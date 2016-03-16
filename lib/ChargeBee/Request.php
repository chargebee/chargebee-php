<?php

namespace ChargeBee\ChargeBee;

class Request
{
	
	const GET = "get";
	
	const POST = "post";
	
	public static function send($method, $url, $params = array(), $env = null, $headers = array())
	{
		if(is_null($env))
		{
			$env = Environment::defaultEnv();
		}
		if(is_null($env))
		{
			throw new \Exception("ChargeBee api environment is not set. Set your site & api key in Environment::configure('your_site', 'your_api_key')");
		}
		$ser_params = Util::serialize($params);
		$response = Curl::doRequest($method, $url, $env, $ser_params, $headers);
		if(is_array($response) && array_key_exists("list", $response))
		{
			return new ListResult($response['list'], isset($response['next_offset'])?$response['next_offset']:null);
		} else {
			return new Result($response);
		}
	}
	
}
