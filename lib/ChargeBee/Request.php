<?php

class ChargeBee_Request
{
	
	const GET = "get";
	
	const POST = "post";

	public static function sendListRequest($method, $url, $params = array(), $env = null, $headers = array())
	{
		$serialized = array();
		foreach ($params as $k => $v)
		{
			if(is_array($v)){
				$v = json_encode($v);
			}
		    $serialized[$k] = $v;
		}
		return self::send($method,$url,$serialized,$env,$headers);
	}
	
	public static function send($method, $url, $params = array(), $env = null, $headers = array())
	{
		if(is_null($env))
		{
			$env = ChargeBee_Environment::defaultEnv();
		}
		if(is_null($env))
		{
			throw new Exception("ChargeBee api environment is not set. Set your site & api key in ChargeBee_Environment::configure('your_site', 'your_api_key')");
		}
		$ser_params = ChargeBee_Util::serialize($params);
		$response = ChargeBee_Curl::doRequest($method, $url, $env, $ser_params, array_merge(ChargeBee_Environment::universalHeaders(), $headers));
		if(is_array($response) && array_key_exists("list", $response))
		{
			return new ChargeBee_ListResult($response['list'], isset($response['next_offset'])?$response['next_offset']:null);
		} else {
			return new ChargeBee_Result($response);
		}
	}
	
}

?>