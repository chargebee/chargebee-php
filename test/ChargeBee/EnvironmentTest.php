<?php
	
class ChargeBee_EnvironmentTest extends UnitTestCase
{
	public function testConfigure()
	{
		$chargebee = new \Chargebee\Chargebee("test_site", "test_api_key");
		$defEnvConfig = \Chargebee\Chargebee\Environment::defaultEnv();
		$this->assertEqual("test_site", $defEnvConfig->getSite());
		$this->assertEqual("test_api_key", $defEnvConfig->getApiKey());
		$this->assertEqual("https://test_site.chargebee.com/api/v1", $defEnvConfig->getApiEndpoint());
	}
	
}
	
?>
