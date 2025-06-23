<?php

namespace tests\Network;

use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class MockGuzzleFactory implements HttpClientFactory
{
    private array $options;
    private float $connectTimeoutInSecs;
    private float $requestTimeoutInSecs;
    private ?int $mockStatusCode;
    private string $mockResponseBody;

    private int $requestCount = 0;
    private array $requests = [];

    public function __construct(
        float $connectTimeoutInSecs,
        float $requestTimeoutInSecs,
        array $options = [],
        ?int $mockStatusCode = null,
        string $mockResponseBody = ''
    ) {
        $this->connectTimeoutInSecs = $connectTimeoutInSecs;
        $this->requestTimeoutInSecs = $requestTimeoutInSecs;
        $this->options = $options;
        $this->mockStatusCode = $mockStatusCode;
        $this->mockResponseBody = $mockResponseBody;
    }

    public function create(): ClientInterface
    {
        if ($this->mockStatusCode !== null) {
            $statusCode = $this->mockStatusCode;
            $responseBody = $this->mockResponseBody;
            $requestsRef = &$this->requests;
            $requestCountRef = &$this->requestCount;

            // Allow custom handler to be passed in options
            if (isset($this->options['handler']) && $this->options['handler'] instanceof HandlerStack) {
                // Set up a mock handler to return the mock response
                $mock = new MockHandler([
                    new Response($statusCode, [], $responseBody),
                    new Response($statusCode, [], $responseBody),
                    new Response($statusCode, [], $responseBody),
                    new Response($statusCode, [], $responseBody),
                    new Response($statusCode, [], $responseBody),
                ]);
                
                // Add the mock handler to the provided stack
                $handler = $this->options['handler'];
                $handler->setHandler($mock);
                
                // Add history middleware to track requests
                $history = Middleware::history($requestsRef);
                $handler->push($history);
                
                // Add middleware to count requests
                $handler->push(function (callable $handler) use (&$requestCountRef) {
                    return function (RequestInterface $request, array $options) use ($handler, &$requestCountRef) {
                        $requestCountRef++;
                        return $handler($request, $options);
                    };
                });
                
                // Create client with the configured handler
                return new Client(array_merge(
                    [
                        'allow_redirects' => true,
                        'http_errors' => false,
                        'connect_timeout' => $this->connectTimeoutInSecs,
                        'timeout' => $this->requestTimeoutInSecs,
                    ], 
                    $this->options
                ));
            }
            
            // Fallback to using our mock client implementation
            return new class($statusCode, $responseBody, $requestsRef, $requestCountRef) implements ClientInterface {
                private int $statusCode;
                private string $responseBody;
                private  $requests;
                private  $requestCount;

                public function __construct(int $statusCode, string $responseBody, array &$requests, int &$requestCount)
                {
                    $this->statusCode = $statusCode;
                    $this->responseBody = $responseBody;
                    $this->requests = &$requests;
                    $this->requestCount = &$requestCount;
                }

                public function sendRequest(RequestInterface $request): ResponseInterface
                {
                    $this->requestCount++;
                    $this->requests[] = $request;

                    return new Response(
                        $this->statusCode,
                        [],
                        $this->responseBody
                    );
                }
            };
        }

        $clientOptions = array_merge(
            [
                'allow_redirects' => true,
                'http_errors' => false,
                'connect_timeout' => $this->connectTimeoutInSecs,
                'timeout' => $this->requestTimeoutInSecs,
            ],
            $this->options
        );

        return new Client($clientOptions);
    }

    public function createRequest(ChargebeePayload $chargebeePayload): RequestInterface
    {
        $httpMethod = $chargebeePayload->getHttpMethod();
        $params = $chargebeePayload->getSerializedParameters();
        $headers = $chargebeePayload->getHeaders();

        if (!in_array($httpMethod, ["get", "post"], true)) {
            throw new Exception("Invalid http method {$httpMethod}");
        }

        $url = self::utf8($chargebeePayload->getUrl());
        $uri = new Uri($url);
        $body = null;

        if ($httpMethod === "get" && !empty($params)) {
            $uri = $uri->withQuery($params);
        }

        if ($httpMethod === "post") {
            $body = $params;
        }

        return new Request($httpMethod, $uri, $headers, $body);
    }

    /**
     * Convert string to UTF-8
     */
    public static function utf8($value)
    {
        if (is_string($value)) {
            return mb_convert_encoding($value, "UTF-8", mb_detect_encoding($value, "UTF-8, ISO-8859-1, ASCII", true));
        }
        return $value;
    }

    /**
     * Get the number of requests made
     */
    public function getRequestCount(): int
    {
        return $this->requestCount;
    }

    /**
     * Get the stored requests
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}
