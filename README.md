# ChargeBee PHP Client Library

The php library for integrating with ChargeBee Recurring Billing and Subscription Management solution.

## Installation
Download the php library from https://github.com/chargebee/chargebee-php/downloads. Extract the library into the
php include path.

Then, require the library as 
<pre><code>
 require_once(dirname(__FILE__) . 'path_to ChargeBee.php');
</code></pre>

## Documentation

  * <a href="https://apidocs.chargebee.com/docs/api?lang=php" target="_blank">API Reference</a>

## Usage

To create a new subscription:

<pre><code>
require 'ChargeBee.php';
ChargeBee_Environment::configure("your_site", "{your_site_api_key}");
$result = ChargeBee_Subscription::create(array(
  "id" => "__dev__KyVqH3NW3f42fD", 
  "planId" => "starter", 
  "customer" => array(
    "email" => "john@user.com", 
    "firstName" => "John", 
    "lastName" => "Wayne"
  )
));
$subscription = $result->subscription();
$customer = $result->customer();
$card = $result->card();
</code></pre>

## License

See the LICENSE file.

