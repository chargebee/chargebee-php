<?php


namespace ChargeBee\ChargeBee;

use ChargeBee\ChargeBee;
use ChargeBee\ChargeBee\Exceptions\IOException;
use Exception;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * TODO: Decouple implementation from Guzzle and rename to HttpClient
 */
class Guzzle
{
    public static function utf8($value) {
        if (is_string($value))
            return mb_convert_encoding($value, "UTF-8");
        else
            return $value;
    }

    public static function request($meth, $url, $env, $params, $headers) {
        $client = Environment::getClient();

        $opts = [];

        if (!in_array($meth, [Request::GET, Request::POST])) {
            throw new Exception("Invalid http method $meth");
        }

        $url = self::utf8($env->apiUrl($url));

        $userAgent = "Chargebee-PHP-Client" . " v" . Version::VERSION;
        $httpHeaders = array_merge(
            $headers,
            [
                'Accept' => 'application/json',
                'User-Agent' => $userAgent,
                'Lang-Version' => phpversion(),
                'OS-Version' => PHP_OS,
                'Authorization' => 'Basic ' . \base64_encode($env->getApiKey() . ':')
            ]
        );
        $body = null;

        $uri = new Uri($url);

        if ($meth == Request::GET) {
            if (count($params) > 0) {
                $query = \http_build_query($params, '', '&', \PHP_QUERY_RFC3986);
                $uri->withQuery($query);
            }
        }

        if ($meth == Request::POST) {
            $body = \http_build_query($params, '', '&');
            $httpHeaders['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        $request = new \GuzzleHttp\Psr7\Request($meth, $uri, $httpHeaders, $body);

        // Specifying a CA bundle results in the following error when running in Google App Engine:
        // "Unsupported SSL context options are set. The following options are present, but have been ignored: allow_self_signed, cafile"
        // https://cloud.google.com/appengine/docs/php/outbound-requests#secure_connections_and_https
        $opts['verify'] = ChargeBee::getVerifyCaCerts() && !self::isAppEngine() ? ChargeBee::getCaCertPath() : false;

        try {
            $response = $client->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            $errno = $e->getCode();
            $errorMessage = $e->getMessage();
            $message = "IO exception occurred when trying to connect to " . $url . " . Reason : " . $errorMessage;
            throw new IOException($message, $errno);
        }
        $responseHeaders = $response->getHeaders();
        $httpCode = $response->getStatusCode();
        return array((string)$response->getBody(), $httpCode, $responseHeaders);
    }

    /**
     * Recommended way to check if script is running in Google App Engine:
     * https://github.com/google/google-api-php-client/blob/master/src/Google/Client.php#L799
     *
     * @return bool Returns true if running in Google App Engine
     */
    private static function isAppEngine() {
        return (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'], 'Google App Engine') !== false);
    }

}


