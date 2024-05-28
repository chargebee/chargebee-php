<?php

namespace ChargeBee\ChargeBee;

use ChargeBee\ChargeBee\Exceptions\APIError;
use ChargeBee\ChargeBee\Exceptions\InvalidRequestException;
use ChargeBee\ChargeBee\Exceptions\IOException;
use ChargeBee\ChargeBee\Exceptions\OperationFailedException;
use ChargeBee\ChargeBee\Exceptions\PaymentException;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;

class Request
{
    const GET = "get";
    const POST = "post";

    public static function sendListRequest($method, $url, $params = [], $env = null, $headers = [])
    {
        $serialized = [];
        foreach ($params as $k => $v) {
            if (is_array($v)) {
                $v = json_encode($v);
            }
            $serialized[$k] = $v;
        }

        return self::send($method, $url, $serialized, $env, $headers);
    }

    public static function send($method, $url, $params = [], $env = null, $headers = [])
    {
        if (is_null($env)) {
            $env = Environment::defaultEnv();
        }

        if (is_null($env)) {
            throw new Exception("ChargeBee api environment is not set. Set your site & api key in ChargeBee\ChargeBee\Environment::configure('your_site', 'your_api_key')");
        }

        $ser_params = Util::serialize($params);
        $responseObj = self::doRequest($method, $url, $env, $ser_params, $headers);

        if (is_array($responseObj->data) && array_key_exists("list", $responseObj->data)) {
            return new ListResult($responseObj->data['list'], isset($responseObj->data['next_offset']) ? $responseObj->data['next_offset'] : null, $responseObj->headers);
        } else {
            return new Result($responseObj->data, $responseObj->headers);
        }
    }

    private static function doRequest($meth, $url, $env, $params = array(), $headers = array())
    {
        $url = self::utf8($env->apiUrl($url));

        $factory = Environment::getHttpClientFactory();

        $client = $factory->createClient();
        $request = $factory->createRequest($meth, $headers, $env, $url, $params);

        try {
            $clientResponse = $client->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            $errno = $e->getCode();
            $errorMessage = $e->getMessage();
            $message = "IO exception occurred when trying to connect to " . $url . " . Reason : " . $errorMessage;
            throw new IOException($message, $errno);
        }

        $respJson = self::processResponse((string)$clientResponse->getBody(), $clientResponse->getStatusCode(), $clientResponse->getHeaders());
        return new Response($respJson, $clientResponse->getHeaders());
    }

    /**
     * @param $response
     * @param $httpCode
     *
     * @return mixed
     * @throws APIError
     * @throws InvalidRequestException
     * @throws OperationFailedException
     * @throws PaymentException
     */
    public static function processResponse($response, $httpCode, $headers)
    {
        $respJson = json_decode($response, true);
        if (!$respJson) {
            if (strpos($response, '503') !== false)
                throw new Exception("Sorry, the server is currently unable to handle the request due to a temporary overload or scheduled maintenance. Please retry after sometime. \n type: internal_temporary_error, \n http_status_code: 503, \n error_code: internal_temporary_error");
            else if (strpos($response, '504') !== false)
                throw new Exception("The server did not receive a timely response from an upstream server, request aborted. If this problem persists, contact us at support@chargebee.com. \n type: gateway_timeout, \n http_status_code: 504, \n error_code: gateway_timeout");
            else
                throw new Exception("Sorry, something went wrong when trying to process the request. If this problem persists, contact us at support@chargebee.com. \n type: internal_error, \n http_status_code: 500, \n error_code: internal_error ");
        }
        if ($httpCode < 200 || $httpCode > 299) {
            self::handleAPIRespError($httpCode, $respJson, $response, $headers);
        }
        return $respJson;
    }

    /**
     * @param $httpCode
     * @param $respJson
     * @param $response
     *
     * @throws APIError
     * @throws InvalidRequestException
     * @throws OperationFailedException
     * @throws PaymentException
     */
    public static function handleAPIRespError($httpCode, $respJson, $response, $headers)
    {
        if (!isset($respJson['api_error_code'])) {
            throw new Exception("No api_error_code attribute in content. Probably not a ChargeBee's error response. The content is \n " . $response);
        }
        $type = "unknown";
        if (isset($respJson['type'])) {
            $type = $respJson['type'];
        }
        if ($type == "payment") {
            throw new PaymentException($httpCode, $respJson, $headers);
        } elseif ($type == "operation_failed") {
            throw new OperationFailedException($httpCode, $respJson, $headers);
        } elseif ($type == "invalid_request") {
            throw new InvalidRequestException($httpCode, $respJson, $headers);
        } else {
            throw new APIError($httpCode, $respJson, $headers);
        }
    }

    public static function utf8($value)
    {
        if (is_string($value))
            return mb_convert_encoding($value, "UTF-8");
        else
            return $value;
    }
}
