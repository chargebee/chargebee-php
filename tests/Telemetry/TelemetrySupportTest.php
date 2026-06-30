<?php

namespace Tests\Telemetry;

use Chargebee\Exceptions\APIError;
use Chargebee\Telemetry\TelemetryAttributeKeys;
use Chargebee\Telemetry\TelemetrySupport;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

#[TestDox('TelemetrySupport')]
final class TelemetrySupportTest extends TestCase
{
    #[TestDox('builds chargebee resource operation span names')]
    public function testBuildSpanName(): void
    {
        self::assertSame(
            'chargebee.subscription.create',
            TelemetrySupport::buildSpanName('subscription', 'create'),
        );
    }

    #[TestDox('resolves chargebee API version from api path')]
    public function testResolveChargebeeApiVersion(): void
    {
        self::assertSame('v1', TelemetrySupport::resolveChargebeeApiVersion('/api/v1'));
        self::assertSame('v2', TelemetrySupport::resolveChargebeeApiVersion('/api/v2'));
    }

    #[TestDox('promotes chargebee headers and excludes PII origin headers')]
    public function testBuildRequestHeaderSpanAttributes(): void
    {
        $attributes = TelemetrySupport::buildRequestHeaderSpanAttributes([
            'chargebee-foo' => 'bar',
            'Authorization' => 'Basic secret',
            'chargebee-request-origin-ip' => '202.170.207.70',
        ]);

        self::assertSame(
            'bar',
            $attributes[TelemetryAttributeKeys::HTTP_REQUEST_HEADER_ATTRIBUTE_PREFIX . 'chargebee-foo'],
        );
        self::assertArrayNotHasKey(
            TelemetryAttributeKeys::HTTP_REQUEST_HEADER_ATTRIBUTE_PREFIX . 'authorization',
            $attributes,
        );
        self::assertArrayNotHasKey(
            TelemetryAttributeKeys::HTTP_REQUEST_HEADER_ATTRIBUTE_PREFIX . 'chargebee-request-origin-ip',
            $attributes,
        );
    }

    #[TestDox('extracts chargebee error details from APIError')]
    public function testExtractRequestTelemetryErrorFromApiError(): void
    {
        $error = TelemetrySupport::extractRequestTelemetryError(new APIError(
            404,
            [
                'message' => 'Not found',
                'type' => 'invalid_request',
                'api_error_code' => 'resource_not_found',
                'param' => 'customer_id',
            ],
            [],
        ));

        self::assertNotNull($error);
        self::assertSame('Not found', $error->message);
        self::assertSame('resource_not_found', $error->chargebeeErrorCode);
        self::assertSame('invalid_request', $error->chargebeeApiErrorType);
        self::assertSame('customer_id', $error->chargebeeErrorParam);
    }

    #[TestDox('extracts generic error details from non-API exceptions')]
    public function testExtractRequestTelemetryErrorFromGenericException(): void
    {
        $error = TelemetrySupport::extractRequestTelemetryError(new \RuntimeException('network down'));

        self::assertNotNull($error);
        self::assertSame('network down', $error->message);
        self::assertNull($error->chargebeeErrorCode);
    }

    #[TestDox('extracts HTTP status code from APIError')]
    public function testExtractHttpStatusCode(): void
    {
        self::assertSame(
            429,
            TelemetrySupport::extractHttpStatusCode(new APIError(
                429,
                ['message' => 'Rate limited', 'type' => 'invalid_request', 'api_error_code' => 'rate_limit'],
                [],
            )),
        );
        self::assertNull(TelemetrySupport::extractHttpStatusCode(new \RuntimeException('boom')));
    }

    #[TestDox('builds end attributes with chargebee error fields')]
    public function testBuildRequestEndSpanAttributes(): void
    {
        $error = TelemetrySupport::extractRequestTelemetryError(new APIError(
            400,
            [
                'message' => 'Bad request',
                'type' => 'invalid_request',
                'api_error_code' => 'invalid_request',
                'param' => 'email',
            ],
            [],
        ));

        $attributes = TelemetrySupport::buildRequestEndSpanAttributes(400, $error);

        self::assertSame(400, $attributes[TelemetryAttributeKeys::HTTP_RESPONSE_STATUS_CODE]);
        self::assertSame('400', $attributes[TelemetryAttributeKeys::ERROR_TYPE]);
        self::assertSame('invalid_request', $attributes[TelemetryAttributeKeys::CHARGEBEE_ERROR_CODE]);
        self::assertSame('invalid_request', $attributes[TelemetryAttributeKeys::CHARGEBEE_ERROR_TYPE]);
        self::assertSame('email', $attributes[TelemetryAttributeKeys::CHARGEBEE_ERROR_PARAM]);
    }
}
