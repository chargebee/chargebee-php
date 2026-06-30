<?php

namespace Chargebee\Telemetry;

use Chargebee\Environment;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\Version;

/** Executes Chargebee API calls with optional telemetry adapter hooks. */
final class TelemetryExecutor
{
    private function __construct()
    {
    }

    /**
     * @param callable(ChargebeePayload): ResponseObject $action
     */
    public static function execute(
        Environment $env,
        ChargebeePayload $payload,
        callable $action,
    ): ResponseObject {
        $adapter = self::resolveAdapter($env);
        if ($adapter === null || !$payload->hasTelemetryMetadata()) {
            return $action($payload);
        }

        $startMs = (int) (microtime(true) * 1000);
        $headers = $payload->getHeaders();
        $handle = self::startTelemetry($env, $adapter, $payload, $headers);
        $requestPayload = $payload->withHeaders($headers);

        try {
            $response = $action($requestPayload);
            self::endTelemetrySuccess($env, $adapter, $handle, $startMs, $response->getStatusCode());
            return $response;
        } catch (\Throwable $err) {
            self::endTelemetryFailure($env, $adapter, $handle, $startMs, $err);
            throw $err;
        }
    }

    public static function resolveAdapter(Environment $env): ?TelemetryAdapter
    {
        return $env->getTelemetryAdapter();
    }

    /**
     * @param array<string, string> $headers
     */
    private static function startTelemetry(
        Environment $env,
        TelemetryAdapter $adapter,
        ChargebeePayload $payload,
        array &$headers,
    ): mixed {
        try {
            $context = self::buildContext($env, $payload, $headers);
            return $adapter->onRequestStart($context, $headers);
        } catch (\Throwable $err) {
            self::logTelemetryAdapterError($env, 'onRequestStart', $err);
            return null;
        }
    }

    private static function endTelemetrySuccess(
        Environment $env,
        TelemetryAdapter $adapter,
        mixed $handle,
        int $startMs,
        int $httpStatusCode,
    ): void {
        try {
            $adapter->onRequestEnd(
                $handle,
                TelemetrySupport::buildRequestTelemetryResult(
                    $httpStatusCode,
                    (int) (microtime(true) * 1000) - $startMs,
                    null,
                ),
            );
        } catch (\Throwable $err) {
            self::logTelemetryAdapterError($env, 'onRequestEnd', $err);
        }
    }

    private static function endTelemetryFailure(
        Environment $env,
        TelemetryAdapter $adapter,
        mixed $handle,
        int $startMs,
        \Throwable $err,
    ): void {
        $status = TelemetrySupport::extractHttpStatusCode($err);
        $httpStatusCode = $status ?? 500;
        try {
            $adapter->onRequestEnd(
                $handle,
                TelemetrySupport::buildRequestTelemetryResult(
                    $httpStatusCode,
                    (int) (microtime(true) * 1000) - $startMs,
                    TelemetrySupport::extractRequestTelemetryError($err),
                ),
            );
        } catch (\Throwable $telemetryErr) {
            self::logTelemetryAdapterError($env, 'onRequestEnd', $telemetryErr);
        }
    }

    private static function logTelemetryAdapterError(
        Environment $env,
        string $hook,
        \Throwable $err,
    ): void {
        if (!$env->getEnableDebugLogs()) {
            return;
        }

        echo '[ERROR] Telemetry adapter ' . $hook . ' failed: ' . $err->getMessage() . "\n";
    }

    /**
     * @param array<string, string> $requestHeaders
     */
    private static function buildContext(
        Environment $env,
        ChargebeePayload $payload,
        array $requestHeaders,
    ): RequestTelemetryContext {
        $parsed = parse_url($payload->getUrl());
        $scheme = $parsed['scheme'] ?? 'https';
        $host = $parsed['host'] ?? '';
        $path = $parsed['path'] ?? '';
        $httpUrl = $scheme . '://' . $host . $path;
        $apiPath = '/api/' . $env->apiVersion;

        return TelemetrySupport::buildRequestTelemetryContext(
            $payload->getTelemetryResource() ?? '',
            $payload->getTelemetryOperation() ?? '',
            strtoupper($payload->getHttpMethod()),
            $httpUrl,
            $host,
            $env->getSite(),
            TelemetrySupport::resolveChargebeeApiVersion($apiPath),
            Version::VERSION,
            $requestHeaders,
        );
    }
}
