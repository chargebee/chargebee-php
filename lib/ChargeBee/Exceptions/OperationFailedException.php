<?php
namespace Chargebee\Chargebee\Exceptions;

class OperationFailedException extends APIError
{
	function __construct($httpStatusCode,$jsonObject)
	{
		parent::__construct($httpStatusCode,$jsonObject);
    }
}
