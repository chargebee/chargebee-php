<?php

$simpletest_vendor = @include_once(dirname(__FILE__) . '/../vendor/simpletest/simpletest/autorun.php');
$simpletest = @include_once('simpletest/autorun.php');

if (!$simpletest_vendor && !$simpletest) {
    echo "SimpleTest Dependency Not Found: ChargeBee test cases are run using SimpleTest unit tester.
Download it from www.simpletest.org and extract it in the php include path. \n";
    exit(1);
}

require_once(dirname(__FILE__) . '/../vendor/autoload.php');

require_once(dirname(__FILE__) . '/ChargeBee/SampleData.php');
require_once(dirname(__FILE__) . '/ChargeBee/UtilTest.php');
require_once(dirname(__FILE__) . '/ChargeBee/EnvironmentTest.php');
require_once(dirname(__FILE__) . '/ChargeBee/ResultTest.php');
require_once(dirname(__FILE__) . '/ChargeBee/ListResultTest.php');
require_once(dirname(__FILE__) . '/ChargeBee/WebhookDeserializeTest.php');
