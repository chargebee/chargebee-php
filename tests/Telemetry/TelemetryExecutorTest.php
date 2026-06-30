<?php

namespace Tests\Telemetry;

use Chargebee\Environment;
use Chargebee\Exceptions\APIError;
use Chargebee\Telemetry\RequestTelemetryContext;
use Chargebee\Telemetry\RequestTelemetryResult;
use Chargebee\Telemetry\TelemetryAdapter;
use Chargebee\Telemetry\TelemetryExecutor;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class RecordingAdapter implements TelemetryAdapter
{
    /** @var list<string> */
    public array $events = [];

    public ?RequestTelemetryContext $startContext = null;

    public ?RequestTelemetryResult $endResult = null;

    public function onRequestStart(RequestTelemetryContext $context, array &$requestHeaders): mixed
    {
        $this->events[] = 'start';
        $this->startContext = $context;
        $requestHeaders['traceparent'] = '00-test-trace';
        return 'span-1';
    }

    public function onRequestEnd(mixed $handle, RequestTelemetryResult $result): void
    {
        $this->events[] = 'end';
        $this->endResult = $result;
    }
}

#[TestDox('TelemetryExecutor')]
final class TelemetryExecutorTest extends TestCase
{
    private function makeEnvironment(?TelemetryAdapter $adapter = null): Environment
    {
        $env = new Environment('acme', 'test_key');
        if ($adapter !== null) {
            $env->setTelemetryAdapter($adapter);
        }

        return $env;
    }

    private function makePayload(Environment $env, ?string $resource, ?string $operation): ChargebeePayload
    {
        $builder = ChargebeePayload::builder()
            ->withEnvironment($env)
            ->withHttpMethod('get')
            ->withUriPaths(['/customers'])
            ->withParamEncoder(new URLFormEncoder());

        if ($resource !== null) {
            $builder->withTelemetryResource($resource);
        }
        if ($operation !== null) {
            $builder->withTelemetryOperation($operation);
        }

        return $builder->build();
    }

    #[TestDox('skips telemetry when no adapter is configured')]
    public function testSkipsWhenNoAdapter(): void
    {
        $env = $this->makeEnvironment();
        $payload = $this->makePayload($env, 'customer', 'list');

        $result = TelemetryExecutor::execute(
            $env,
            $payload,
            fn (ChargebeePayload $p) => new ResponseObject('{}', 200, []),
        );

        self::assertSame(200, $result->getStatusCode());
    }

    #[TestDox('skips telemetry when resource or operation metadata is missing')]
    public function testSkipsWhenNoMetadata(): void
    {
        $adapter = new RecordingAdapter();
        $env = $this->makeEnvironment($adapter);
        $payload = $this->makePayload($env, null, null);

        TelemetryExecutor::execute(
            $env,
            $payload,
            fn (ChargebeePayload $p) => new ResponseObject('{}', 200, []),
        );

        self::assertSame([], $adapter->events);
    }

    #[TestDox('calls adapter once per API call and injects trace headers')]
    public function testCallsAdapterOncePerApiCall(): void
    {
        $adapter = new RecordingAdapter();
        $env = $this->makeEnvironment($adapter);
        $payload = $this->makePayload($env, 'customer', 'list');
        $attempts = 0;

        $result = TelemetryExecutor::execute($env, $payload, function (ChargebeePayload $p) use (&$attempts) {
            $attempts++;
            self::assertSame('00-test-trace', $p->getHeaders()['traceparent'] ?? null);

            return new ResponseObject('{}', 200, []);
        });

        self::assertSame(1, $attempts);
        self::assertSame(['start', 'end'], $adapter->events);
        self::assertSame('chargebee.customer.list', $adapter->startContext?->spanName);
        self::assertSame(200, $adapter->endResult?->httpStatusCode);
        self::assertSame(200, $result->getStatusCode());
    }

    #[TestDox('promotes chargebee-* request headers and excludes chargebee-request-origin-* PII headers')]
    public function testPromotesChargebeeRequestHeaders(): void
    {
        $adapter = new RecordingAdapter();
        $env = $this->makeEnvironment($adapter);
        $payload = ChargebeePayload::builder()
            ->withEnvironment($env)
            ->withHttpMethod('get')
            ->withUriPaths(['/customers'])
            ->withParamEncoder(new URLFormEncoder())
            ->withTelemetryResource('customer')
            ->withTelemetryOperation('list')
            ->withHeaders([
                'chargebee-foo' => 'bar',
                'Authorization' => 'Basic secret',
                'chargebee-request-origin-ip' => '202.170.207.70',
            ])
            ->build();

        TelemetryExecutor::execute(
            $env,
            $payload,
            fn (ChargebeePayload $p) => new ResponseObject('{}', 200, []),
        );

        $attrs = $adapter->startContext?->startAttributes ?? [];
        self::assertSame('bar', $attrs['http.request.header.chargebee-foo'] ?? null);
        self::assertArrayNotHasKey('http.request.header.authorization', $attrs);
        self::assertArrayNotHasKey('http.request.header.chargebee-request-origin-ip', $attrs);
    }

    #[TestDox('records failure details from APIError')]
    public function testRecordsFailureFromApiError(): void
    {
        $adapter = new RecordingAdapter();
        $env = $this->makeEnvironment($adapter);
        $payload = $this->makePayload($env, 'customer', 'retrieve');

        try {
            TelemetryExecutor::execute($env, $payload, function (ChargebeePayload $p) {
                throw new APIError(
                    404,
                    [
                        'message' => 'Not found',
                        'type' => 'invalid_request',
                        'api_error_code' => 'resource_not_found',
                        'param' => 'customer_id',
                    ],
                    [],
                );
            });
            self::fail('Expected APIError');
        } catch (APIError) {
            // expected
        }

        self::assertSame(['start', 'end'], $adapter->events);
        self::assertSame(404, $adapter->endResult?->httpStatusCode);
        self::assertSame('resource_not_found', $adapter->endResult?->error?->chargebeeErrorCode);
    }
}
