<?php

namespace Network;

use Chargebee\ChargebeeClient;
use Chargebee\Exceptions\APIError;
use Chargebee\RetryConfig;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use Tests\Network\MockGuzzleFactory;

#[CoversClass(RetryConfig::class)]
#[CoversClass(ChargebeeClient::class)]
final class
RetryFeatureTest extends TestCase
{
    private const ERROR_BODY = '{
        "message":"Plan is not present",
        "type":"invalid_request",
        "api_error_code":"resource_not_found",
        "param":"item_id",
        "error_cause_id": "gateway.general.decline"
    }';

    private function setupClientWithRetryConfig(
        bool   $enabled,
        int    $maxRetries,
        array  $retryOn = [500, 503, 504],
        int    $statusCode = 500,
        string $responseBody = self::ERROR_BODY
    ): array
    {
        // Configure RetryConfig
        $retryConfig = new RetryConfig();
        $retryConfig->setMaxRetries($maxRetries);
        $retryConfig->setEnabled($enabled);
        $retryConfig->setRetryOn($retryOn);
        $retryConfig->setDelayMs(1); // Minimal delay for faster tests

        // Configure MockGuzzleFactory
        $httpClient = new MockGuzzleFactory(
            1.0, // Fast timeouts for tests
            3.0,
            [],
            $statusCode,
            $responseBody
        );

        // Create client
        $chargebeeClient = new ChargebeeClient([
            "site" => "test-site",
            "apiKey" => "test-api-key",
            "chargebeeDomain" => "devcb.in",
            "enableDebugLogs" => false, // Disable logs in tests
            "retryConfig" => $retryConfig,
        ], $httpClient);

        return ['client' => $chargebeeClient, 'httpClient' => $httpClient];
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public static function retryConfigProvider(): array
    {
        return [
            'retries disabled' => [
                'enabled' => false,
                'maxRetries' => 3,
                'statusCode' => 500,
                'retryOn' => [500, 503, 504],
                'expectedRequests' => 1,
            ],
            'retries enabled with maxRetries=2' => [
                'enabled' => true,
                'maxRetries' => 2,
                'statusCode' => 500,
                'retryOn' => [500, 503, 504],
                'expectedRequests' => 3, // Initial + 2 retries
            ],
            'retries enabled with maxRetries=0' => [
                'enabled' => true,
                'maxRetries' => 0,
                'statusCode' => 500,
                'retryOn' => [500, 503, 504],
                'expectedRequests' => 1,
            ],
            'non-retryable status code' => [
                'enabled' => true,
                'maxRetries' => 3,
                'statusCode' => 400,
                'retryOn' => [500, 503, 504],
                'expectedRequests' => 1,
            ],
            'custom retryable status code' => [
                'enabled' => true,
                'maxRetries' => 2,
                'statusCode' => 400,
                'retryOn' => [400, 500],
                'expectedRequests' => 3,
            ],
        ];
    }

    #[DataProvider('retryConfigProvider')]
    #[TestDox('Retry configuration: enabled=$enabled, maxRetries=$maxRetries, statusCode=$statusCode, expectedRequests=$expectedRequests')]
    public function testRetryConfiguration(
        bool  $enabled,
        int   $maxRetries,
        int   $statusCode,
        array $retryOn,
        int   $expectedRequests
    ): void
    {
        ['client' => $client, 'httpClient' => $httpClient] =
            $this->setupClientWithRetryConfig($enabled, $maxRetries, $retryOn, $statusCode);

        $this->expectException(APIError::class);

        try {
            $client->customer()->all();
        } catch (APIError $e) {
            $this->assertEquals(
                $expectedRequests,
                $httpClient->getRequestCount(),
                sprintf(
                    "Expected %d request(s) with retry config: enabled=%s, maxRetries=%d, statusCode=%d",
                    $expectedRequests,
                    $enabled ? 'true' : 'false',
                    $maxRetries,
                    $statusCode
                )
            );
            throw $e;
        }
    }

    #[TestDox('429 rate limit errors should respect retry-after header')]
    public function testRateLimitRetry(): void
    {
        // This is a more complex test that would verify rate limit handling
        // In a real implementation, we'd need to mock the retry-after header
        // For now, we're just demonstrating the approach
        $this->markTestIncomplete(
            'This test should validate retry-after header handling for 429 responses'
        );
    }

    #[TestDox('RetryConfig default values are correctly set')]
    public function testRetryConfig_DefaultValues(): void
    {
        $retryConfig = new RetryConfig();
        $this->assertFalse($retryConfig->isEnabled(), "Default enabled should be false");
        $this->assertEquals(3, $retryConfig->getMaxRetries(), "Default max retries should be 3");
        $this->assertEqualsCanonicalizing(
            [500, 502, 503, 504],
            $retryConfig->getRetryOn(),
            "Default retryable status codes"
        );
        $this->assertEquals(200, $retryConfig->getDelayMs(), "Default delay should be 200ms");
    }

    #[TestDox('RetryConfig can be customized with setter methods')]
    public function testRetryConfig_CustomValues(): void
    {
        $retryConfig = new RetryConfig();
        $retryConfig->setEnabled(true);
        $retryConfig->setMaxRetries(5);
        $retryConfig->setRetryOn([500, 501]);
        $retryConfig->setDelayMs(2000);

        $this->assertTrue($retryConfig->isEnabled(), "Custom enabled value");
        $this->assertEquals(5, $retryConfig->getMaxRetries(), "Custom max retries value");
        $this->assertEqualsCanonicalizing([500, 501], $retryConfig->getRetryOn(), "Custom retryable status codes");
        $this->assertEquals(2000, $retryConfig->getDelayMs(), "Custom delay value");
    }
}
