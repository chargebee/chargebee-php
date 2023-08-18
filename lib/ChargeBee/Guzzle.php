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

        $url = self::utf8($env->apiUrl($url));

        $request = GuzzleFactory::createRequest($meth, $headers, $env, $url, $params);

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
        return [(string)$response->getBody(), $httpCode, $responseHeaders];
    }

}


