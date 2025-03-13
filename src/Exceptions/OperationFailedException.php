<?php

namespace Chargebee\Exceptions;

use Chargebee\Exceptions\APIError;

class OperationFailedException extends APIError
{
    public function __construct($httpStatusCode, $jsonObject, $responseHeaders)
    {
        parent::__construct($httpStatusCode, $jsonObject, $responseHeaders);
    }
}
