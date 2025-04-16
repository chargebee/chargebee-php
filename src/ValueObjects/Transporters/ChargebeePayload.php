<?php

namespace Chargebee\ValueObjects\Transporters;

use Chargebee\Environment;


class ChargebeePayload
{
    private string $url;
    private string $httpMethod;
    private ?string $serializedParameters;
    private array $requestHeaders;
    private Environment $env;

    public function __construct(
        string $url,
        string $httpMethod,
        ?string $serializedParameters,
        array $requestHeaders,
        Environment $env
    ) {
        $this->url = $url;
        $this->httpMethod = $httpMethod;
        $this->serializedParameters = $serializedParameters;
        $this->requestHeaders = $requestHeaders;
        $this->env = $env;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    public function getSerializedParameters(): ?string
    {
        return $this->serializedParameters;
    }

    public function getHeaders(): array
    {
        return $this->requestHeaders;
    }

    public function getEnvironment(): Environment
    {
        return $this->env;
    }

    public static function builder(): ChargebeePayloadBuilder
    {
        return new ChargebeePayloadBuilder();
    }
}


?>