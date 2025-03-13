<?php

namespace Chargebee\Exceptions;

use Chargebee\Exceptions\APIError;

class PaymentException extends APIError
{
    public function __construct($httpStatusCode, $jsonObject, $responseHeaders)
    {
        parent::__construct($httpStatusCode, $jsonObject, $responseHeaders);
    }
}
