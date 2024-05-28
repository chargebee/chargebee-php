<?php

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Exceptions\APIError;
use ChargeBee\ChargeBee\Exceptions\InvalidRequestException;
use ChargeBee\ChargeBee\Exceptions\IOException;
use ChargeBee\ChargeBee\Exceptions\OperationFailedException;
use ChargeBee\ChargeBee\Exceptions\PaymentException;
use ChargeBee\ChargeBee\HttpClient\GuzzleFactory;
use ChargeBee\ChargeBee\Models\Customer;
use ChargeBee\ChargeBee\Models\PaymentIntent;
use ChargeBee\ChargeBee\Result;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ChargeBee\ChargeBee\Request
 * @covers \ChargeBee\ChargeBee\Models\Customer
 */
final class HttpClientTest extends TestCase
{
    /** @var MockHandler $mockHandler */
    private $mockHandler;
    /**
     * @return void
     */
    public function testThatResultIsRetrievedFromValidHttpResponse()
    {
        $this->mockHandler = new MockHandler([new Response(200, [], self::customerJson())]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $customerResult = Customer::retrieve(123);

        self::assertEquals('/api/v2/customers/123', $this->mockHandler->getLastRequest()->getUri()->getPath());
        self::assertInstanceOf(Result::class, $customerResult);
    }

    /**
     * @return void
     */
    public function testThatQueryParametersAreBuiltWithOneParam()
    {
        $this->mockHandler = new MockHandler([new Response(200, [], self::customerListJson())]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        Customer::all(["firstName[is]" => "John"]);

        self::assertEquals('/api/v2/customers', $this->mockHandler->getLastRequest()->getUri()->getPath());
        self::assertEquals('first_name%5Bis%5D=John', $this->mockHandler->getLastRequest()->getUri()->getQuery());
    }

    /**
     * @return void
     */
    public function testThatQueryParametersAreBuiltWithMultipleParams()
    {
        $this->mockHandler= new MockHandler([new Response(200, [], self::customerListJson())]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $result = Customer::all(["firstName[is]" => "John", "lastName[is]" => "Doe", "email[is]" => "john@test.com"]);

        self::assertEquals('/api/v2/customers', $this->mockHandler->getLastRequest()->getUri()->getPath());
        self::assertEquals(
            'first_name%5Bis%5D=John&last_name%5Bis%5D=Doe&email%5Bis%5D=john%40test.com',
            $this->mockHandler->getLastRequest()->getUri()->getQuery()
        );
    }

    /**
     * @return void
     */
    public function testThatPostRequestBodyIsBuilt()
    {
        $this->mockHandler= new MockHandler([new Response(200, [], self::customerListJson())]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $result = Customer::create([
            "firstName" => "John",
            "lastName" => "Doe",
            "email" => "john@test.com",
            "locale" => "fr-CA",
            "billingAddress" => [
                "firstName" => "John",
                "lastName" => "Doe",
                "line1" => "PO Box 9999",
                "city" => "Walnut",
                "state" => "California",
                "zip" => "91789",
                "country" => "US"
            ]
        ]);

        $performedRequest = $this->mockHandler->getLastRequest();

        self::assertEquals('POST', $performedRequest->getMethod());
        self::assertEquals('/api/v2/customers', $performedRequest->getUri()->getPath());
        self::assertEquals(
            'first_name=John&'.
            'last_name=Doe&'.
            'email=john%40test.com&'.
            'locale=fr-CA&'.
            'billing_address%5Bfirst_name%5D=John&'.
            'billing_address%5Blast_name%5D=Doe&'.
            'billing_address%5Bline1%5D=PO+Box+9999&'.
            'billing_address%5Bcity%5D=Walnut&'.
            'billing_address%5Bstate%5D=California&'.
            'billing_address%5Bzip%5D=91789&'.
            'billing_address%5Bcountry%5D=US'
            ,
            (string) $performedRequest->getBody()
        );
    }

    /**
     * @return void
     */
    public function testIOExceptionIsThrownOnHttpClientException()
    {
        $this->mockHandler = new MockHandler([
            RequestException::create(
                new Request('GET', '/api/v2/customers/123')
            )
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(IOException::class);

       Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testUnexpectedServerErrorResponse()
    {
        $this->mockHandler = new MockHandler([
            new Response(500, [], '{"message": "Server error"}')
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches('/^No api_error_code attribute in content/');

        Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testDefaultServerErrorResponse()
    {
        $this->mockHandler = new MockHandler([
            new Response(500, [], '{"message": "Server error", "api_error_code": 500}')
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(APIError::class);

        Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testTemporaryUnavailableResponse()
    {
        $this->mockHandler = new MockHandler([
            new Response(503, [], '<html><h1>503</h1>')
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches('/error_code: internal_temporary_error/');

        Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testGatewayTimeout()
    {
        $this->mockHandler = new MockHandler([
            new Response(504, [], '<html><h1>504</h1>')
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches('/error_code: gateway_timeout/');

        Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testFallbackInternalErrorResponse()
    {
        $this->mockHandler = new MockHandler([
            new Response(504, [], 'no http code in response body')
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches('/error_code: internal_error/');

        Customer::retrieve(123);
    }

    /**
     * @return void
     */
    public function testPaymentExceptionIsThrown()
    {
        $this->mockHandler = new MockHandler([
            new Response(
                402,
                [],
                '{"api_error_code": "value not used", "type": "payment"}'
            )
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(PaymentException::class);

        PaymentIntent::retrieve(123);
    }

    /**
     * @return void
     */
    public function testOperationFailedExceptionIsThrown()
    {
        $this->mockHandler = new MockHandler([
            new Response(
                409,
                [],
                '{"api_error_code": "value not used", "type": "operation_failed"}'
            )
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(OperationFailedException::class);

        PaymentIntent::retrieve(123);
    }

    /**
     * @return void
     */
    public function testInvalidRequestExceptionIsThrown()
    {
        $this->mockHandler = new MockHandler([
            new Response(
                400,
                [],
                '{"api_error_code": "value not used", "type": "invalid_request"}'
            )
        ]);
        Environment::configure("test_site", "not-real", $this->clientFactory());

        $this->expectException(InvalidRequestException::class);

        PaymentIntent::retrieve(123);
    }

    private function clientFactory() {
        return new GuzzleFactory(
            2.0,
            5.0,
            ['handler' => HandlerStack::create($this->mockHandler)]
        );
    }

    public static function customerJson()
    {
        return <<<'JSON'
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
    }

    public static function customerListJson()
    {
        return <<<'JSON'
{"list": [
    {"customer": {
        "allow_direct_debit": false,
        "auto_collection": "on",
        "card_status": "no_card",
        "created_at": 1517505747,
        "deleted": false,
        "email": "john@test.com",
        "excess_payments": 0,
        "first_name": "John",
        "id": "__test__KyVnHhSBWlC1T2cj",
        "last_name": "Doe",
        "net_term_days": 0,
        "object": "customer",
        "pii_cleared": "active",
        "preferred_currency_code": "USD",
        "promotional_credits": 0,
        "refundable_credits": 0,
        "resource_version": 1517505747000,
        "taxability": "taxable",
        "unbilled_charges": 0,
        "updated_at": 1517505747
    }}
]}
JSON;
    }
}
