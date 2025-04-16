# Chargebee PHP Client Library - API V2

[![Packagist](https://img.shields.io/packagist/v/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php)
[![Packagist](https://img.shields.io/packagist/dt/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php/stats)
[![Packagist](https://img.shields.io/packagist/dm/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php/stats)
[![Packagist](https://img.shields.io/packagist/l/chargebee/chargebee-php.svg?maxAge=3)](https://packagist.org/packages/chargebee/chargebee-php)

This is the official PHP library for integrating with Chargebee.

- 📘 For a complete reference of available APIs, check out our [API Documentation](https://apidocs.chargebee.com/docs/api/?lang=php).  
- 🧪 To explore and test API capabilities interactively, head over to our [API Explorer](https://api-explorer.chargebee.com).

>Note: Chargebee now supports two API versions - [V1](https://apidocs.chargebee.com/docs/api/v1) and [V2](https://apidocs.chargebee.com/docs/api), of which V2 is the latest release and all future developments will happen in V2. This library is for <b>API version V2</b>. If you’re looking for V1, head to [chargebee-v1 branch](https://github.com/chargebee/chargebee-php/tree/chargebee-v1).

## Requirements

PHP 8.1 or later

## Installation

### Composer
```Chargebee``` is available on [Packagist](https://packagist.org/packages/chargebee/chargebee-php) and can be installed using [Composer](https://getcomposer.org/)

<pre><code>composer require chargebee/chargebee-php</code></pre>

To use the bindings, 
<pre><code>require_once('vendor/autoload.php');</code></pre>

## Usage

### To create a new subscription:

```php
use Chargebee\ChargebeeClient;

$chargebee = new ChargebeeClient(options: [
    "site" => "{your_site}",
    "apiKey" => "{your_apiKey}",
]);

$result = $chargebee->subscription()->createWithItems("customer_id", [
    "subscription_items" => [
        [
            "item_price_id" => "Montly-Item",
            "quantity" => "3",
        ]
    ]
]);
$subscription = $result->subscription;
$customer = $result->customer;

```

### Create an idempotent request

[Idempotency keys](https://apidocs.chargebee.com/docs/api/idempotency?prod_cat_ver=2) are passed along with request headers to allow a safe retry of POST requests. 

```php
use Chargebee\ChargebeeClient;

$chargebee = new ChargebeeClient(options: [
    "site" => "{your_site}",
    "apiKey" => "{your_apiKey}",
]);
$responseCustomer = $chargebee->customer()->create([
    "first_name" => "John",
    "last_name" => "Doe",
    "email" => "john@test.com",
    "card" => [
        "first_name" => "Joe",
        "last_name" => "Doe",
        "number" => "4012888888881881",
        "expiry_month" => "10",
        "expiry_year" => "29",
        "cvv" => "231"
        ]
    ],
    [
        "chargebee-idempotency-key" => "<<UUID>>" // Replace <<UUID>> with a unique string
    ]
);
$responseHeaders = $responseCustomer->getResponseHeaders(); // Retrieves response headers
print_r($responseHeaders);
$idempotencyReplayedValue = $responseCustomer->isIdempotencyReplayed(); // Retrieves Idempotency replayed header value
print_r($idempotencyReplayedValue);
```
`isIdempotencyReplayed()` method can be accessed to differentiate between original and replayed requests.

## License

See the LICENSE file.
