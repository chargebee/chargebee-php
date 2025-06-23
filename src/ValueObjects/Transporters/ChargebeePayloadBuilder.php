<?php

namespace Chargebee\ValueObjects\Transporters;

use Chargebee\Environment;
use Chargebee\Utils\Util;
use Chargebee\ValueObjects\Encoders\ParamEncoderInterface;
use Chargebee\Version;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;

class ChargebeePayloadBuilder
{
    private const IDEMPOTENCY_HEADER = 'chargebee-idempotency-key';
    private array $uriPaths = [];
    private array $params = [];
    private array $headers = [];
    private array $headerOverrides = [];
    private string $httpMethod = 'get';
    private ?Environment $env = null;
    private ?string $subdomain = null;
    private ?bool $isIdempotent = false;
    private array $jsonKeys = [];
    private ?ParamEncoderInterface $paramEncoder = null;

    public function withUriPaths(array $uriPaths): self
    {
        $this->uriPaths = $uriPaths;
        return $this;
    }

    public function withParams(array $params=[]): self
    {
        $this->params = $params;
        return $this;
    }

    public function withHeaders(array $headers): self
    {
        $this->headers = $headers;
        return $this;
    }

    public function withHeaderOverride(string $key, string $value): self
    {
        $this->headerOverrides[$key] = $value;
        return $this;
    }

    public function withHeaderOverrides(array $headers): self
    {
        $this->headerOverrides = array_merge($this->headerOverrides, $headers);
        return $this;
    }

    public function withHttpMethod(string $httpMethod): self
    {
        $this->httpMethod = strtolower($httpMethod);
        return $this;
    }

    public function withEnvironment(Environment $env): self
    {
        $this->env = $env;
        return $this;
    }

    public function withSubdomain(?string $subdomain): self
    {
        $this->subdomain = $subdomain;
        return $this;
    }

    public function withJsonKeys(array $jsonKeys): self
    {
        $this->jsonKeys = $jsonKeys;
        return $this;
    }

    public function withParamEncoder(ParamEncoderInterface $paramEncoder): self
    {
        $this->paramEncoder = $paramEncoder;
        return $this;
    }

    public function withIdempotent(bool $isIdempotent): self
    {
        $this->isIdempotent = $isIdempotent;
        return $this;
    }

    private function constructHeaders(): array
    {
        if (!$this->env) {
            throw new \InvalidArgumentException('Environment is required to construct headers');
        }
        $userAgentHeader = "Chargebee-PHP-Client" . " v" . Version::VERSION;
        if(!empty($this->env->userAgentSuffix)){
            $userAgentHeader .= "; " . $this->env->userAgentSuffix;
        }
        $defaultHeaders = [
            'Accept' => 'application/json',
            'User-Agent' => $userAgentHeader,
            'Lang-Version' => phpversion(),
            'OS-Version' => PHP_OS,
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic ' . base64_encode($this->env->getApiKey())
        ];
        $idempotencyKey = $this->headers[self::IDEMPOTENCY_HEADER] ?? null;

        if (strtolower($this->httpMethod) === "post"  && $this->isIdempotent && $idempotencyKey === null && $this->env->getRetryConfig()->isEnabled()) {
            $this->headerOverrides[self::IDEMPOTENCY_HEADER] = Util::generateUUIDv4();
        }

        return array_merge($defaultHeaders, $this->headers, $this->headerOverrides);
    }

    public function build(): ChargebeePayload
    {
       
        if (!$this->env) {
            throw new \InvalidArgumentException('Environment is required');
        }

        if (!$this->paramEncoder) {
            throw new \InvalidArgumentException('Param encoder is required');
        }

        $url = $this->env->apiUrl(Util::encodeURIPath(...$this->uriPaths), $this->subdomain);
        $headers = $this->constructHeaders();
        $serializedParameters = !empty($this->params)
            ? $this->paramEncoder->encode($this->params, $this->jsonKeys)
            : null;
        return new ChargebeePayload(
            $url,
            $this->httpMethod,
            $serializedParameters,
            $headers,
            $this->env,
        );
    }
}