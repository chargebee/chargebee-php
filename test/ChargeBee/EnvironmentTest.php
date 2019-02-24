<?php

use ChargeBee\ChargeBee\Environment;

class ChargeBee_EnvironmentTest extends UnitTestCase
{
    public function testConfigure()
    {
        Environment::configure("test_site", "test_api_key");
        $defEnvConfig = Environment::defaultEnv();

        $this->assertEqual("test_site", $defEnvConfig->getSite());
        $this->assertEqual("test_api_key", $defEnvConfig->getApiKey());
        $this->assertEqual("https://test_site.chargebee.com/api/" . Environment::API_VERSION, $defEnvConfig->getApiEndpoint());
    }
}
