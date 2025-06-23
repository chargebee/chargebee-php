<?php

namespace Tests\Transporters;

use Chargebee\Environment;
use Chargebee\RetryConfig;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayloadBuilder;
use PHPUnit\Framework\TestCase;

final class
ChargebeePayloadBuilderTest extends TestCase
{
    public function testIdempotencyKeyIsGeneratedWhenConditionsAreMet(): void
    {
        $env = new Environment("test-site", "test-api-key", "devcb.in");
        $retryConfig = new RetryConfig();
        $retryConfig->setEnabled(true);
        $env->setRetryConfig($retryConfig);

        $builder = (new ChargebeePayloadBuilder())
            ->withEnvironment($env)
            ->withParamEncoder(new URLFormEncoder())
            ->withUriPaths(['customers'])
            ->withHttpMethod('POST')
            ->withIdempotent(true);

        $payload = $builder->build();

        $headers = $payload->getHeaders();

        $this->assertArrayHasKey('chargebee-idempotency-key', $headers);
        $this->assertMatchesRegularExpression('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i', $headers['chargebee-idempotency-key']);
    }

    public function testIdempotencyKeyIsNotOverriddenIfAlreadySet(): void
    {
        $env = new Environment("test-site", "test-api-key", "devcb.in");
        $retryConfig = new RetryConfig();
        $retryConfig->setEnabled(true);
        $env->setRetryConfig($retryConfig);

        $builder = (new ChargebeePayloadBuilder())
            ->withEnvironment($env)
            ->withParamEncoder(new URLFormEncoder())
            ->withUriPaths(['customers'])
            ->withHttpMethod('POST')
            ->withIdempotent(true)
            ->withHeaders([
                'chargebee-idempotency-key' => 'custom-idempotency-key-123'
            ]);

        $payload = $builder->build();

        $headers = $payload->getHeaders();

        $this->assertEquals('custom-idempotency-key-123', $headers['chargebee-idempotency-key']);
    }

    public function testIdempotencyKeyIsNotGeneratedIfNotPost(): void
    {
        $env = new Environment("test-site", "test-api-key", "devcb.in");
        $retryConfig = new RetryConfig();
        $retryConfig->setEnabled(true);
        $env->setRetryConfig($retryConfig);

        $builder = (new ChargebeePayloadBuilder())
            ->withEnvironment($env)
            ->withParamEncoder(new URLFormEncoder())
            ->withUriPaths(['customers'])
            ->withHttpMethod('GET') // Not POST
            ->withIdempotent(true);

        $payload = $builder->build();
        $headers = $payload->getHeaders();

        $this->assertArrayNotHasKey('chargebee-idempotency-key', $headers);
    }

    public function testIdempotencyKeyIsNotGeneratedIfRetryIsDisabled(): void
    {
        $env = new Environment("test-site", "test-api-key", "devcb.in");
        $retryConfig = new RetryConfig();
        $retryConfig->setEnabled(false); // Retry disabled
        $env->setRetryConfig($retryConfig);

        $builder = (new ChargebeePayloadBuilder())
            ->withEnvironment($env)
            ->withParamEncoder(new URLFormEncoder())
            ->withUriPaths(['customers'])
            ->withHttpMethod('POST')
            ->withIdempotent(true);

        $payload = $builder->build();
        $headers = $payload->getHeaders();

        $this->assertArrayNotHasKey('chargebee-idempotency-key', $headers);
    }
}
