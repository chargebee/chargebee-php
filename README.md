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


### Retry Handling

Chargebee's SDK includes built-in retry logic to handle temporary network issues and server-side errors. This feature is **disabled by default** but can be **enabled when needed**.

#### Key features include:

- **Automatic retries for specific HTTP status codes**: Retries are automatically triggered for status codes `500`, `502`, `503`, and `504`.
- **Exponential backoff**: Retry delays increase exponentially to prevent overwhelming the server.
- **Rate limit management**: If a `429 Too Many Requests` response is received with a `Retry-After` header, the SDK waits for the specified duration before retrying.
  > *Note: Exponential backoff and max retries do not apply in this case.*
- **Customizable retry behavior**: Retry logic can be configured using the `retryConfig` parameter in the environment configuration.

#### Example: Customizing Retry Logic

You can enable and configure the retry logic by passing a `retryConfig` object when initializing the Chargebee environment:

```php
use Chargebee\ChargebeeClient;

// Retry Configurations
$retryConfig = new RetryConfig();
$retryConfig->setEnabled(true); // Enable retry mechanism
$retryConfig->setMaxRetries(5); // Maximum number of retries
$retryConfig->setDelayMs(1000); // Delay in milliseconds before retrying
$retryConfig->setRetryOn([500, 502, 503, 504]); // Retry on these HTTP status codes

$chargebee = new ChargebeeClient(options: [
    "site" => "{your_site}",
    "apiKey" => "{your_apiKey}",
    "retryConfig" => $retryConfig,
]);

// ... your Chargebee API operations below ...

```

#### Example: Rate Limit retry logic

You can enable and configure the retry logic for rate-limit by passing a `retryConfig` object when initializing the Chargebee environment:

```php
use Chargebee\ChargebeeClient;

// Retry Configurations
$retryConfig = new RetryConfig();
$retryConfig->setEnabled(true); // Enable retry mechanism
$retryConfig->setMaxRetries(5); // Maximum number of retries
$retryConfig->setDelayMs(1000); // Delay in milliseconds before retrying
$retryConfig->setRetryOn([429]); // Retry on 429 HTTP status codes

$chargebee = new ChargebeeClient(options: [
    "site" => "{your_site}",
    "apiKey" => "{your_apiKey}",
    "retryConfig" => $retryConfig,
]);

// ... your Chargebee API operations below ...

```

## License

See the LICENSE file.
