<?php
class ChargeBee_Environment
{

	private $apiKey;
	
	private $site;
	
	private $apiEndPoint;
	
	private static $default_env;
	
	public static $chargebeeDomain;
	
	function __construct($site, $apiKey) {
		$this->site = $site;
		$this->apiKey = $apiKey;
		if (ChargeBee_Environment::$chargebeeDomain == null) 
		{
      $this->apiEndPoint = "https://$site.chargebee.com/api/v1";
		} 
		else 
		{
      $this->apiEndPoint = "http://$site.".ChargeBee_Environment::$chargebeeDomain.":8080/api/v1";
		}		
	}
	
	public static function configure($site, $apiKey) 
	{
		ChargeBee_Environment::$default_env = new ChargeBee_Environment($site, $apiKey);
	}
	
	public function getApiKey()
  {
    return $this->apiKey;
  }

  public function getSite()
  {
    return $this->site;
  }
	
	public function getApiEndpoint()
	{
		return $this->apiEndPoint;
	}
	
	public static function defaultEnv()
	{
		return ChargeBee_Environment::$default_env;
	}
	
	public function apiUrl($url)
	{
		return $this->apiEndPoint . $url;
	}
  
}

?>
