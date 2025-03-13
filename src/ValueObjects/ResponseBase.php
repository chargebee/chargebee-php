<?php

namespace Chargebee\ValueObjects;
define('IDEMPOTENCY_REPLAY_HEADER', 'chargebee-idempotency-replayed');

class ResponseBase
{
    /**
     * @var array<string, string> $responseHeaders
     */
    protected ?array $responseHeaders;

    public function __construct(array $responseHeaders = [])
    {
        $this->responseHeaders = $responseHeaders;
    }

    public function getResponseHeaders(): ?array
    {
        return $this->responseHeaders;
    }
    public function isIdempotencyReplayed(): bool
    {   
        $headers = $this->responseHeaders;
        if (isset($headers[IDEMPOTENCY_REPLAY_HEADER])) {
            $value = $headers[IDEMPOTENCY_REPLAY_HEADER][0];
            return  boolval($value);
        }
        return false;
    }
}