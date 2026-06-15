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
    private ?string $telemetryResource;
    private ?string $telemetryOperation;

    public function __construct(
        string $url,
        string $httpMethod,
        ?string $serializedParameters,
        array $requestHeaders,
        Environment $env,
        ?string $telemetryResource = null,
        ?string $telemetryOperation = null,
    ) {
        $this->url = $url;
        $this->httpMethod = $httpMethod;
        $this->serializedParameters = $serializedParameters;
        $this->requestHeaders = $requestHeaders;
        $this->env = $env;
        $this->telemetryResource = $telemetryResource;
        $this->telemetryOperation = $telemetryOperation;
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

    public function getTelemetryResource(): ?string
    {
        return $this->telemetryResource;
    }

    public function getTelemetryOperation(): ?string
    {
        return $this->telemetryOperation;
    }

    public function hasTelemetryMetadata(): bool
    {
        return $this->telemetryResource !== null
            && $this->telemetryResource !== ''
            && $this->telemetryOperation !== null
            && $this->telemetryOperation !== '';
    }

    /**
     * @param array<string, string> $headers
     */
    public function withHeaders(array $headers): self
    {
        return new self(
            $this->url,
            $this->httpMethod,
            $this->serializedParameters,
            array_merge($this->requestHeaders, $headers),
            $this->env,
            $this->telemetryResource,
            $this->telemetryOperation,
        );
    }

    public static function builder(): ChargebeePayloadBuilder
    {
        return new ChargebeePayloadBuilder();
    }
}


?>