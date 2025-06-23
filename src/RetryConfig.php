<?php

namespace Chargebee;

class RetryConfig
{
    private bool $enabled;
    private int $maxRetries;
    private int $delayMs;
    private array $retryOn;

    public function __construct(
        bool $enabled = false,
        int $maxRetries = 3,
        int $delayMs = 200,
        array $retryOn = [500, 502, 503, 504]
    ) {
        $this->enabled = $enabled;
        $this->maxRetries = $maxRetries;
        $this->delayMs = $delayMs;
        $this->retryOn = $retryOn;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function getMaxRetries(): int
    {
        return $this->maxRetries;
    }

    public function getDelayMs(): int
    {
        return $this->delayMs;
    }

    public function getRetryOn(): array
    {
        return $this->retryOn;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function setMaxRetries(int $maxRetries): void
    {
        $this->maxRetries = $maxRetries;
    }

    public function setDelayMs(int $delayMs): void
    {
        $this->delayMs = $delayMs;
    }

    public function setRetryOn(array $retryOn): void
    {
        $this->retryOn = $retryOn;
    }
}