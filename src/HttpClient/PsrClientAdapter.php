<?php

namespace Chargebee\HttpClient;

use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

class PsrClientAdapter implements HttpClientFactory
{
    public function __construct(
        private readonly ClientInterface $client,
        private readonly ?RequestFactoryInterface $requestFactory = null,
        private readonly ?StreamFactoryInterface $streamFactory = null,
    ) {}

    public function create(): ClientInterface
    {
        return $this->client;
    }

    public function createRequest(ChargebeePayload $payload): RequestInterface
    {
        $httpMethod = $payload->getHttpMethod();
        $params     = $payload->getSerializedParameters();
        $headers    = $payload->getHeaders();

        if (!in_array($httpMethod, ['get', 'post'], true)) {
            throw new \Exception("Invalid http method $httpMethod");
        }

        $url = self::utf8($payload->getUrl());

        $requestFactory = $this->requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory  = $this->streamFactory  ?? Psr17FactoryDiscovery::findStreamFactory();

        if ($httpMethod === 'get' && !empty($params)) {
            $url .= '?' . $params;
        }
        $request = $requestFactory->createRequest(strtoupper($httpMethod), $url);
        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }
        if ($httpMethod === 'post' && !empty($params)) {
            $request = $request->withBody($streamFactory->createStream($params));
        }
        return $request;
    }

    private static function utf8(string $value): string
    {
        return mb_convert_encoding($value, 'UTF-8');
    }
}
