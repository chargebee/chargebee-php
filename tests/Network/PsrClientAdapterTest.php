<?php

namespace Tests\Network;

use Chargebee\ChargebeeClient;
use Chargebee\Environment;
use Chargebee\HttpClient\PsrClientAdapter;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

#[CoversClass(PsrClientAdapter::class)]
final class PsrClientAdapterTest extends TestCase
{
    private function makePayload(
        string $method,
        string $url,
        ?string $params = null,
        array $headers = []
    ): ChargebeePayload {
        $env = new Environment('test-site', 'test-api-key');
        return new ChargebeePayload($url, $method, $params, $headers, $env);
    }

    private function makeStubClient(?ResponseInterface $response = null): ClientInterface
    {
        $response ??= new Response(200, [], '{}');

        return new class($response) implements ClientInterface {
            private ResponseInterface $response;
            public array $sentRequests = [];

            public function __construct(ResponseInterface $response)
            {
                $this->response = $response;
            }

            public function sendRequest(RequestInterface $request): ResponseInterface
            {
                $this->sentRequests[] = $request;
                return $this->response;
            }
        };
    }

    #[TestDox('PsrClientAdapter::create() returns the injected PSR-18 client')]
    public function testCreateReturnsInjectedClient(): void
    {
        $client = $this->makeStubClient();
        $adapter = new PsrClientAdapter($client);

        $this->assertSame($client, $adapter->create());
    }

    #[TestDox('GET request with no PSR-17 factories discovers them automatically')]
    public function testGetRequestWithDiscoveredFactories(): void
    {
        $client = $this->makeStubClient();
        $adapter = new PsrClientAdapter($client);

        $payload = $this->makePayload('get', 'https://example.com/api/v2/customers', 'limit=10', [
            'Authorization' => 'Basic dGVzdA==',
        ]);

        $request = $adapter->createRequest($payload);

        $this->assertSame('GET', strtoupper($request->getMethod()));
        $this->assertStringContainsString('limit=10', (string) $request->getUri());
        $this->assertSame('Basic dGVzdA==', $request->getHeaderLine('Authorization'));
    }

    #[TestDox('POST request with no PSR-17 factories discovers them automatically')]
    public function testPostRequestWithDiscoveredFactories(): void
    {
        $client = $this->makeStubClient();
        $adapter = new PsrClientAdapter($client);

        $payload = $this->makePayload('post', 'https://example.com/api/v2/customers', 'first_name=John', [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ]);

        $request = $adapter->createRequest($payload);

        $this->assertSame('POST', strtoupper($request->getMethod()));
        $this->assertSame('first_name=John', (string) $request->getBody());
    }

    #[TestDox('GET request with PSR-17 factories uses them for request building')]
    public function testGetRequestWithPsr17Factories(): void
    {
        $client  = $this->makeStubClient();
        [$requestFactory, $streamFactory] = $this->makePsr17Factories();

        $adapter = new PsrClientAdapter($client, $requestFactory, $streamFactory);

        $payload = $this->makePayload('get', 'https://example.com/api/v2/customers', 'limit=5', [
            'Authorization' => 'Basic dGVzdA==',
        ]);

        $request = $adapter->createRequest($payload);

        $this->assertSame('GET', strtoupper($request->getMethod()));
        $this->assertStringContainsString('limit=5', (string) $request->getUri());
        $this->assertSame('Basic dGVzdA==', $request->getHeaderLine('Authorization'));
    }

    #[TestDox('POST request with PSR-17 factories uses them for request building')]
    public function testPostRequestWithPsr17Factories(): void
    {
        $client  = $this->makeStubClient();
        [$requestFactory, $streamFactory] = $this->makePsr17Factories();

        $adapter = new PsrClientAdapter($client, $requestFactory, $streamFactory);

        $payload = $this->makePayload('post', 'https://example.com/api/v2/customers', 'first_name=Jane', [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ]);

        $request = $adapter->createRequest($payload);

        $this->assertSame('POST', strtoupper($request->getMethod()));
        $this->assertSame('first_name=Jane', (string) $request->getBody());
    }

    #[TestDox('Invalid HTTP method throws an exception')]
    public function testInvalidHttpMethodThrows(): void
    {
        $client  = $this->makeStubClient();
        $adapter = new PsrClientAdapter($client);

        $payload = $this->makePayload('delete', 'https://example.com/api/v2/customers/123');

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches('/Invalid http method delete/i');

        $adapter->createRequest($payload);
    }

    #[TestDox('Existing HttpClientFactory injection still works (regression)')]
    public function testExistingHttpClientFactoryInjectionStillWorks(): void
    {
        $mockFactory = new MockGuzzleFactory(
            1.0,
            3.0,
            [],
            200,
            '{"list":[],"next_offset":null}'
        );

        $chargebeeClient = new ChargebeeClient([
            'site'   => 'test-site',
            'apiKey' => 'test-api-key',
        ], $mockFactory);

        // Verify no exception is thrown during construction
        $this->assertInstanceOf(ChargebeeClient::class, $chargebeeClient);
    }

    #[TestDox('PSR-18 ClientInterface can be injected directly into ChargebeeClient')]
    public function testPsrClientInterfaceInjectionIntoChargebeeClient(): void
    {
        $stubClient = $this->makeStubClient(
            new Response(200, [], '{"list":[],"next_offset":null}')
        );

        $chargebeeClient = new ChargebeeClient([
            'site'   => 'test-site',
            'apiKey' => 'test-api-key',
        ], $stubClient);

        $this->assertInstanceOf(ChargebeeClient::class, $chargebeeClient);
    }

    #[TestDox('PSR-18 + PSR-17 factories can be injected into ChargebeeClient')]
    public function testPsrClientWithFactoriesInjectionIntoChargebeeClient(): void
    {
        $stubClient = $this->makeStubClient(
            new Response(200, [], '{"list":[],"next_offset":null}')
        );
        [$requestFactory, $streamFactory] = $this->makePsr17Factories();

        $chargebeeClient = new ChargebeeClient([
            'site'   => 'test-site',
            'apiKey' => 'test-api-key',
        ], $stubClient, $requestFactory, $streamFactory);

        $this->assertInstanceOf(ChargebeeClient::class, $chargebeeClient);
    }

    /**
     * Returns minimal anonymous-class implementations of PSR-17 factories
     * backed by Guzzle PSR-7 objects, so no extra test dependency is needed.
     *
     * @return array{RequestFactoryInterface, StreamFactoryInterface}
     */
    private function makePsr17Factories(): array
    {
        $requestFactory = new class implements RequestFactoryInterface {
            public function createRequest(string $method, $uri): RequestInterface
            {
                return new \GuzzleHttp\Psr7\Request($method, $uri);
            }
        };

        $streamFactory = new class implements StreamFactoryInterface {
            public function createStream(string $content = ''): StreamInterface
            {
                return \GuzzleHttp\Psr7\Utils::streamFor($content);
            }

            public function createStreamFromFile(string $filename, string $mode = 'r'): StreamInterface
            {
                return \GuzzleHttp\Psr7\Utils::streamFor(fopen($filename, $mode));
            }

            public function createStreamFromResource($resource): StreamInterface
            {
                return \GuzzleHttp\Psr7\Utils::streamFor($resource);
            }
        };

        return [$requestFactory, $streamFactory];
    }
}
