<?php

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Exceptions\APIError;
use ChargeBee\ChargeBee\Exceptions\IOException;
use ChargeBee\ChargeBee\GuzzleFactory;
use ChargeBee\ChargeBee\Models\Customer;
use ChargeBee\ChargeBee\Result;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ChargeBee\ChargeBee\Guzzle
 * @covers \ChargeBee\ChargeBee\Request
 * @covers \ChargeBee\ChargeBee\Models\Customer
 */
final class HttpClientTest extends TestCase
{
    /**
     * @return void
     */
    public function testThatResultIsRetrievedFromValidHttpResponse()
    {
        $mockHandler = new MockHandler();
        Environment::configure("test_site", "not-real");
        $this->setUpClient($mockHandler);

        $customer = <<<'JSON'
 {
    "allow_direct_debit": false,
    "auto_collection": "on",
    "billing_address": {
        "city": "Walnut",
        "country": "US",
        "first_name": "John",
        "last_name": "Doe",
        "line1": "PO Box 9999",
        "object": "billing_address",
        "state": "California",
        "state_code": "CA",
        "validation_status": "not_validated",
        "zip": "91789"
    },
    "card_status": "no_card",
    "created_at": 1517505731,
    "deleted": false,
    "email": "john@test.com",
    "excess_payments": 0,
    "first_name": "John",
    "id": "__test__KyVnHhSBWl7eY2bl",
    "last_name": "Doe",
    "locale": "fr-CA",
    "net_term_days": 0,
    "object": "customer",
    "pii_cleared": "active",
    "preferred_currency_code": "USD",
    "promotional_credits": 0,
    "refundable_credits": 0,
    "resource_version": 1517505731000,
    "taxability": "taxable",
    "unbilled_charges": 0,
    "updated_at": 1517505731
}
JSON;

        $mockHandler->append(new Response(200, [], $customer));

        $customerResult = Customer::retrieve(123);

        self::assertEquals('/api/v2/customers/123', $mockHandler->getLastRequest()->getUri()->getPath());
        self::assertInstanceOf(Result::class, $customerResult);
    }

    /**
     * @return void
     */
    public function testIOExceptionIsThrownOnHttpClientException()
    {
        $mockHandler = new MockHandler([
            RequestException::create(
                new Request('GET', '/api/v2/customers/123')
            )
        ]);
        Environment::configure("test_site", "not-real");
        $this->setUpClient($mockHandler);

        $this->expectException(IOException::class);

       Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testUnexpectedServerErrorResponse()
    {
        $mockHandler = new MockHandler([
            new Response(500, [], '{"message": "Server error"}')
        ]);
        Environment::configure("test_site", "not-real");
        $this->setUpClient($mockHandler);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches('/^No api_error_code attribute in content/');

        Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testDefaultServerErrorResponse()
    {
        $mockHandler = new MockHandler([
            new Response(500, [], '{"message": "Server error", "api_error_code": 500}')
        ]);
        Environment::configure("test_site", "not-real");
        $this->setUpClient($mockHandler);

        $this->expectException(APIError::class);

        Customer::retrieve(123);
    }

    private function setUpClient(MockHandler $mockHandler)
    {
        Environment::configureClient(GuzzleFactory::createClient(
            2,
            5,
            ['handler' => HandlerStack::create($mockHandler)])
        );
    }
}
