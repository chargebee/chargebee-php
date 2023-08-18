<?php


namespace ChargeBee\ChargeBee;

use ChargeBee\ChargeBee;
use ChargeBee\ChargeBee\Exceptions\IOException;
use ChargeBee\ChargeBee\Exceptions\PaymentException;
use ChargeBee\ChargeBee\Exceptions\OperationFailedException;
use ChargeBee\ChargeBee\Exceptions\InvalidRequestException;
use ChargeBee\ChargeBee\Exceptions\APIError;
use Exception;
use GuzzleHttp\Exception\RequestException;

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
        if ($meth == Request::GET) {
            if (count($params) > 0) {
                $opts['query'] = $params;
            }
        } else if ($meth == Request::POST) {
            $opts['form_params'] = $params;
        } else {
            throw new Exception("Invalid http method $meth");
        }
        $url = self::utf8($env->apiUrl($url));

        $userAgent = "Chargebee-PHP-Client" . " v" . Version::VERSION;
        $httpHeaders = array_merge($headers, ['Accept' => 'application/json', 'User-Agent' => $userAgent, 'Lang-Version' => phpversion() , 'OS-Version' => PHP_OS]);

        $opts['headers'] = $httpHeaders;
        $opts['auth'] = [$env->getApiKey(), ''];

        // Specifying a CA bundle results in the following error when running in Google App Engine:
        // "Unsupported SSL context options are set. The following options are present, but have been ignored: allow_self_signed, cafile"
        // https://cloud.google.com/appengine/docs/php/outbound-requests#secure_connections_and_https
        $opts['verify'] = ChargeBee::getVerifyCaCerts() && !self::isAppEngine() ? ChargeBee::getCaCertPath() : false;

        $response = null;
        try {
            $response = $client->request($meth, $url, $opts);
        } catch (RequestException $e) {
            $errno = $e->getCode();
            $guzzleMsg = $e->getMessage();
            $message = "IO exception occurred when trying to connect to " . $url . " . Reason : " . $guzzleMsg;
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


