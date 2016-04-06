# Chargebee PHP Client Library - API V1

The php library for integrating with Chargebee Recurring Billing and Subscription Management solution.

Chargebee now supports two API versions - [V1](https://apidocs.chargebee.com/docs/api/v1) and [V2](https://apidocs.chargebee.com/docs/api). This library is for our <b>older API version V1</b>. The library for V2 can be found in the [master branch](https://github.com/chargebee/chargebee-php). 

You'd want to upgrade to V2 to benefit from the new functionality. Click here for the [API V2 Upgradation Guide](https://apidocs.chargebee.com/docs/api/v1#api-v2-upgradation-guide).


## Installation

```ChargeBee``` is available on [Packagist](https://packagist.org/packages/chargebee/chargebee-php) and can be installed using [Composer](https://getcomposer.org/)

<pre><code>
	composer require chargebee/chargebee-php:'&lt;2'
</code></pre>

or 
Download the php library version 1.x.x from https://github.com/chargebee/chargebee-php/tags. Extract the library into the
php include path.

Then, require the library as 
<pre><code>
 require_once(dirname(__FILE__) . 'path_to ChargeBee.php');
</code></pre>

## Documentation

  * <a href="https://apidocs.chargebee.com/docs/api/v1/?lang=php" target="_blank">API Reference</a>

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

