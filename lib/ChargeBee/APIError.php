<?php
class ChargeBee_APIError extends Exception
{
	
	private $httpCode;
	
	private $errorNo;
	
	private $jsonObject;
	
	function __construct($message, $httpCode, $errorNo, $jsonObject = null)
	{
		parent::__construct($message);
		$this->httpCode = $httpCode;
    $this->errorNo = $errorNo;
    $this->jsonObject = $jsonObject;
	}
	
	public function getHttpCode()
  {
    return $this->httpCode;
  }

  public function getErrorNo()
  {
    return $this->errorNo;
  }

  public function getJsonObject()
  {
    return $this->jsonObject;
  }

}
?>