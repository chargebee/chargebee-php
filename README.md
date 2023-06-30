# Chargebee PHP Client Library - API V2

[![Packagist](https://img.shields.io/packagist/v/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php)
[![Packagist](https://img.shields.io/packagist/dt/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php/stats)
[![Packagist](https://img.shields.io/packagist/dm/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php/stats)
[![Packagist](https://img.shields.io/packagist/l/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php)

This is the PHP Library for integrating with Chargebee. Sign up for a Chargebee account [here](https://www.chargebee.com).

Chargebee now supports two API versions - [V1](https://apidocs.chargebee.com/docs/api/v1) and [V2](https://apidocs.chargebee.com/docs/api), of which V2 is the latest release and all future developments will happen in V2. This library is for <b>API version V2</b>. If you’re looking for V1, head to [chargebee-v1 branch](https://github.com/chargebee/chargebee-php/tree/chargebee-v1).

## Requirements

PHP 5.6.0 or later

## Installation

### Composer
```Chargebee``` is available on [Packagist](https://packagist.org/packages/chargebee/chargebee-php) and can be installed using [Composer](https://getcomposer.org/)

<pre><code>composer require chargebee/chargebee-php</code></pre>

To use the bindings, 
<pre><code>require_once('vendor/autoload.php');</code></pre>

### Manual Installation
Download the [latest release](https://github.com/chargebee/chargebee-php/releases) and to use the bindings, include 
<code>init.php</code> file. 
<pre><code>require_once('/path/to/chargebee-php/lib/init.php');</code></pre>

## Documentation

* <a href="https://apidocs.chargebee.com/docs/api?lang=php" target="_blank">API Reference</a>

## Usage

### To create a new subscription:

```php
use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Subscription;

Environment::configure("your_site", "{your_site_api_key}");
$result = Subscription::create([
    "id" => "__dev__KyVqH3NW3f42fD",
    "planId" => "starter",
    "customer" => [
        "email" => "john@user.com",
        "firstName" => "John",
        "lastName" => "Wayne"
    ]
]);
$subscription = $result->subscription();
$customer = $result->customer();
$card = $result->card();
```

### Create an idempotent request

[Idempotency keys](https://apidocs.chargebee.com/docs/api/idempotency?prod_cat_ver=2) are passed along with request headers to allow a safe retry of POST requests. 

```php
use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\Customer;

Environment::configure("your_site", "{your_site_api_key}");
$result = Customer::create(array(
    "email" => "john@test.com",
    "first_name" => "john"
    ), 
    null, 
    array(
        "chargebee-idempotency-key" => "<<UUID>>"
        )
    ); // Replace <<UUID>> with a unique string
$customer = $result->customer();
print_r($customer);

$responseHeaders = $result->getResponseHeaders(); // Retrieves response headers
print_r($responseHeaders);
$idempotencyReplayedValue = $result->isIdempotencyReplayed(); // Retrieves Idempotency replayed header value
print_r($idempotencyReplayedValue);
```
`isIdempotencyReplayed()` method can be accessed to differentiate between original and replayed requests.

## Legacy Support

If you are using PHP < 5.6.0 , you can download chargebee-php [v2.8.3](https://github.com/chargebee/chargebee-php/tree/v2.8.3). This version will not support recently added features since the version was released. We recommend you to upgrade PHP inorder to use the latest features. 
## License

See the LICENSE file.

