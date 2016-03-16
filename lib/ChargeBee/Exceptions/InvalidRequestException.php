<?php
namespace ChargeBee\ChargeBee\Exceptions;

class InvalidRequestException extends APIError
{
	function __construct($httpStatusCode,$jsonObject)
	{
		parent::__construct($httpStatusCode,$jsonObject);
    }
}
