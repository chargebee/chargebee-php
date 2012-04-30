<?php

class ChargeBee_APIErrorTest extends UnitTestCase
{

	function testAuthError()
	{
		$respJson = null;
		try 
		{
			$respJson = ChargeBee_Curl::processResponse(ChargeBee_SampleData::sampleAuthError(), 401);
		}
		catch (ChargeBee_APIError $e)
		{
			$this->assertEqual($e->getMessage(), 'Sorry, authentication failed. Invalid api key');
		}
	}
	
	function testParamError()
	{
		$respJson = null;
		try
		{
			$respJson = ChargeBee_Curl::processResponse(ChargeBee_SampleData::sampleParamError(), 400);
		}
		catch(ChargeBee_APIError $e)
		{
			$this->assertEqual($e->getMessage(), 'param card[gateway] cannot be blank');
		}
	}

}

?>