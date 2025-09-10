<?php

namespace Chargebee\ValueObjects;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\UbbBatchIngestionInvalidRequestException;

use Exception;

class ResponseObject
{
    public array $data;

    public array $headers;

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
    public function __construct($response, $httpCode, $responseHeaders)
    {
        $respJson = json_decode($response, true); // json parsing error might not get caught properly;
        if (!$respJson) {
            if (strpos($response, '503') !== false)
                throw new Exception("Sorry, the server is currently unable to handle the request due to a temporary overload or scheduled maintenance. Please retry after sometime. \n type: internal_temporary_error, \n http_status_code: 503, \n error_code: internal_temporary_error");
            else if (strpos($response, '504') !== false)
                throw new Exception("The server did not receive a timely response from an upstream server, request aborted. If this problem persists, contact us at support@chargebee.com. \n type: gateway_timeout, \n http_status_code: 504, \n error_code: gateway_timeout");
            else
                throw new Exception("Sorry, something went wrong when trying to process the request. If this problem persists, contact us at support@chargebee.com. \n type: internal_error, \n http_status_code: 500, \n error_code: internal_error ");
        }
        if ($httpCode < 200 || $httpCode > 299) {
            self::handleAPIRespError($httpCode, $respJson, $response, $responseHeaders);
        }
        $this->data = $respJson;
        $this->headers = $responseHeaders;
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
    public static function handleAPIRespError($httpCode, $respJson, $response, $responseHeaders)
    {
        if (!isset($respJson['api_error_code'])) {
            throw new Exception("No api_error_code attribute in content. Probably not a ChargeBee's error response. The content is \n " . $response);
        }
        $type = "unknown";
        if (isset($respJson['type'])) {
            $type = $respJson['type'];
        }
        if ($type == "payment") {
            throw new PaymentException($httpCode, $respJson, $responseHeaders);
        } elseif ($type == "operation_failed") {
            throw new OperationFailedException($httpCode, $respJson, $responseHeaders);
        } elseif ($type == "invalid_request") {
            throw new InvalidRequestException($httpCode, $respJson, $responseHeaders);
        } elseif ($type == "ubb_batch_ingestion_invalid_request") {
            throw new UbbBatchIngestionInvalidRequestException($httpCode, $respJson, $responseHeaders);
        } else {
            throw new APIError($httpCode, $respJson, $responseHeaders);
        }
    }

}