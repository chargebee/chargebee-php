<?php

class ChargeBee_UtilTest extends UnitTestCase
{

	function testSerialize() {
		  $before = array(
	      "id" => "sub_KyVq7DNSNM7CSD",
	      "planId" => "free",
	       "addons" => array(array("id" => "monitor", "quantity" => 2), array("id" => "ssl")),
           "addonIds" => array("addonOne","addonTwo"),
	       "card" => array(
	         "firstName" => "Rajaraman",
	         "lastName" => "Santhanam",
	         "number" => "4111111111111111",
	         "expiryMonth" => "1",
	         "expiryYear" => "2024",
	         "cvv" => "007"));

	    $after = array(
	      "id"=>"sub_KyVq7DNSNM7CSD",
	      "plan_id"=>"free",
	      "addons[id][0]"=>"monitor",
	      "addons[quantity][0]"=>2,
	      "addons[id][1]"=>"ssl",
          "addon_ids[0]"=>"addonOne",
          "addon_ids[1]"=>"addonTwo",
	      "card[first_name]"=>"Rajaraman",
	      "card[last_name]"=>"Santhanam",
	      "card[number]"=>"4111111111111111",
	      "card[expiry_month]"=>"1",
	      "card[expiry_year]"=>"2024",
	      "card[cvv]"=>"007");
          $this->assertEqual($after, ChargeBee_Util::serialize($before));
	  }

	function testToCamelCaseFromUnderscore()
	{
		$before = "test_string";
		$after = "testString";
		$this->assertEqual($after, ChargeBee_Util::toCamelCaseFromUnderscore($before));
	}

	function testToUnderscoreFromCamelCase()
	{
		$before = "testString";
		$after = "test_string";
		$this->assertEqual($after, ChargeBee_Util::toUnderscoreFromCamelCase($before));
	}

}

?>
