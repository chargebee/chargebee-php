<?php

class ChargeBee_Curl
{

  public static function utf8($value)
  {
    if (is_string($value))
      return utf8_encode($value);
    else
      return $value;
  }

	public static function doRequest($meth, $url, $env, $params = array())
	{
		list($response, $httpCode) = self::request($meth, $url, $env, $params);
		$respJson = self::processResponse($response, $httpCode);
		return $respJson;
	}

	public static function request($meth, $url, $env, $params)
	{
		$curl = curl_init();
		$opts = array();
		if ($meth == ChargeBee_Request::GET) 
		{
			$opts[CURLOPT_HTTPGET] = 1;
			if (count($params) > 0) 
			{
				$encoded = http_build_query($params, null, '&');
				$url = "$url?$encoded";
			}
		} 
		else if ($meth == ChargeBee_Request::POST) 
		{
			$opts[CURLOPT_POST] = 1;
			$opts[CURLOPT_POSTFIELDS] = http_build_query($params, null, '&');
		} 
		else 
		{
			throw new ChargeBee_APIError("Invalid http method $meth");
		}
		$url = self::utf8($env->apiUrl($url));
		$opts[CURLOPT_URL] = $url;
		$opts[CURLOPT_RETURNTRANSFER] = true;
		$opts[CURLOPT_CONNECTTIMEOUT] = 50;
		$opts[CURLOPT_TIMEOUT] = 100;
		$userAgent = "Chargebee-PHP-Client" . " v" . ChargeBee_Version::VERSION;
		$headers = array(
      'Accept: application/json',
			"User-Agent: " . $userAgent);
    $opts[CURLOPT_HTTPHEADER] = $headers;
		$opts[CURLOPT_USERPWD] = $env->getApiKey() . ':';
    if (ChargeBee::getVerifyCaCerts()) 
		{
        $opts[CURLOPT_SSL_VERIFYPEER] = true;
        $opts[CURLOPT_SSL_VERIFYHOST] = 2;
				$opts[CURLOPT_CAINFO] = ChargeBee::getCaCertPath();
    }
		curl_setopt_array($curl, $opts);

		$response = curl_exec($curl);
		
		if ($response === false) 
		{
			$errno = curl_errno($curl);
			$message = curl_error($curl);
			curl_close($curl);
			throw new ChargeBee_APIError($message, 0, $errno);
		}
		
		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close($curl);
		return array($response, $httpCode);
	}

	public static function processResponse($response, $httpCode)
	{
		$respJson = json_decode($response, true);
		if($httpCode < 200 || $httpCode > 299) 
		{
			self::handleAPIRespError($httpCode, $respJson);
		}
		return $respJson;
	}

  public static function handleAPIRespError($httpCode, $respJson)
  {
		$message = null;
		if(array_key_exists('error_param', $respJson))
		{
			$message = "param ".$respJson['error_param']." ";
		}
		$message .= $respJson['error_msg'];
		throw new ChargeBee_APIError($message, $httpCode, 0, $respJson);
  }

}
