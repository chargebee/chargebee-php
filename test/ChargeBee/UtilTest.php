<?php

class ChargeBee_UtilTest extends UnitTestCase
{
    public function testSerialize()
    {
        $before = [
          "id" => "sub_KyVq7DNSNM7CSD",
          "cf_URL" => "www.chargebee.com",
          "cf_Single_line" => "Single line custom field",
          "planId" => "free",
           "addons" => [
             ["id" => "monitor", "quantity" => 2], ["id" => "ssl"]
           ],
           "addonIds" => ["addonOne","addonTwo"],
           "card" => [
             "firstName" => "Rajaraman",
             "lastName" => "Santhanam",
             "number" => "4111111111111111",
             "expiryMonth" => "1",
             "expiryYear" => "2024",
             "cvv" => "007"
           ]
         ];

        $after = [
          "id" => "sub_KyVq7DNSNM7CSD",
          "cf_URL" => "www.chargebee.com",
          "cf_Single_line" => "Single line custom field",
          "plan_id" => "free",
          "addons[id][0]" => "monitor",
          "addons[quantity][0]"=>2,
          "addons[id][1]" => "ssl",
          "addon_ids[0]" => "addonOne",
          "addon_ids[1]" => "addonTwo",
          "card[first_name]" => "Rajaraman",
          "card[last_name]" => "Santhanam",
          "card[number]" => "4111111111111111",
          "card[expiry_month]" => "1",
          "card[expiry_year]" => "2024",
          "card[cvv]" => "007"
        ];

        $this->assertEqual($after, \ChargeBee\ChargeBee\Util::serialize($before));
    }

    public function testToCamelCaseFromUnderscore()
    {
        $before = "test_string";
        $after = "testString";
        $this->assertEqual($after, \ChargeBee\ChargeBee\Util::toCamelCaseFromUnderscore($before));
    }

    public function testToUnderscoreFromCamelCase()
    {
        $before = "testString";
        $after = "test_string";
        $this->assertEqual($after, \ChargeBee\ChargeBee\Util::toUnderscoreFromCamelCase($before));
    }
}
