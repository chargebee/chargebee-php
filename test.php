<?php
require 'vendor/autoload.php';

//Code from apidocs
$chargebee = new \ChargeBee\ChargeBee("rrcb-test",
  "jaGdadHeCQxfmFQG2sEgSrzHdyt23cwcd");

function testParams(\ChargeBee\ChargeBee $chargebee) {
 $result = \ChargeBee\ChargeBee\Models\Subscription::retrieve('1rifg4iOsZUL4mBhF');
 // print_r($result);
 //print_r($result->subscription()->currentTermEnasdd);
 //print_r($result->customer());
 //print_r($result->customer()->cfDateOfBirth);
 //print_r($result->customer()->cfGender);
 print_r($result->subscription());
}

testParams($chargebee);

//$var = "cfDateOfBirth";
//print_r(substr($var,0,2));
?>
