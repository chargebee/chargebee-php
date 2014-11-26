<?php
require 'lib/ChargeBee.php';

//Code from apidocs
ChargeBee_Environment::configure("rrcb-test",
  "jaGdadHeCQxfmFQG2sEgSrzHdyt23cwcd");

function testParams() {
 $result = ChargeBee_Subscription::retrieve('1rifg4iOsZUL4mBhF');
// print_r($result);
//print_r($result->subscription()->currentTermEnasdd);
//print_r($result->customer());
//print_r($result->customer()->cfDateOfBirth);
//print_r($result->customer()->cfGender);
print_r($result->subscription());
}

testParams();

//$var = "cfDateOfBirth";
//print_r(substr($var,0,2));
?>
