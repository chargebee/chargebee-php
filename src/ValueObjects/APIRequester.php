<?php

namespace Chargebee\ValueObjects;

use Chargebee\Environment;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\PaymentException;
use Chargebee\RetryConfig;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\HttpClient\HttpClientFactory;
use Psr\Http\Client\ClientExceptionInterface;

class APIRequester
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    
    // Constants for logging and retry
    private const LOG_LEVEL_INFO = 'INFO';
    private const LOG_LEVEL_ERROR = 'ERROR';
    private const DEFAULT_JITTER_MS = 100;

    public function __construct(HttpClientFactory $httpClientFactory, Environment $env)
    {
        $this->httpClientFactory = $httpClientFactory;
        $this->env = $env;
    }

    /**
     * Makes an API request with retry logic.
     *
     * @throws PaymentException
     * @throws ClientExceptionInterface
     * @throws OperationFailedException
     * @throws APIError
     * @throws InvalidRequestException
     * @throws \Exception
     */
    public function makeRequest(ChargebeePayload $payload): ResponseObject
    {
        $retryConfig = $this->env->getRetryConfig() ?? new RetryConfig();
        return $this->withRetry(function ($retryCount) use ($payload) {
            return $this->sendRequest($payload, $retryCount);
        }, $retryConfig);
    }

    /**
     * Sends the actual HTTP request.
     * @throws PaymentException
     * @throws ClientExceptionInterface
     * @throws OperationFailedException
     * @throws APIError
     * @throws InvalidRequestException
     * @throws \Exception
     */
    private function sendRequest(ChargebeePayload $payload, int $retryCount): ResponseObject
    {
        $client = $this->httpClientFactory->create();
        $request = $this->httpClientFactory->createRequest($payload);
        if($retryCount > 0) {
            $request->withAddedHeader('X-CB-Retry-Attempt', $retryCount);
        }
        $response = $client->sendRequest($request);
        return new ResponseObject(
            $response->getBody(),
            $response->getStatusCode(),
            $response->getHeaders()
        );
    }

    /**
     * Handles retry logic for API requests.
     * 
     * @param callable $makeRequest The function to call to make the request
     * @param RetryConfig $retryConfig The retry configuration
     * @param int $retryCount The current retry attempt (0 for initial request)
     * @return ResponseObject The response from the API
     * @throws \Exception If all retries fail
     */
    private function withRetry(callable $makeRequest, RetryConfig $retryConfig, int $retryCount = 0): ResponseObject
    {
        try {
            // Attempt the request
            return $makeRequest($retryCount);
        } catch (APIError $err) {
            // Extract HTTP status code from the error
            $statusCode = $err->getHttpStatusCode();
            
            // Special handling for rate limit (429) errors
            if ($this->shouldHandleRateLimit($statusCode, $retryConfig)) {
                return $this->handleRateLimitError($err, $makeRequest, $retryConfig, $retryCount);
            }
            
            // Handle standard retries
            if (!$this->shouldRetry($statusCode, $retryCount, $retryConfig)) {
                $this->logRequestFailed($retryCount, $err->getMessage());
                throw $err;
            }
            
            // Calculate delay with exponential backoff and jitter
            $retryDelayMs = $this->calculateBackoffDelay($retryCount, $retryConfig->getDelayMs());
            
            $this->logRetryAttempt($retryCount, $retryConfig->getMaxRetries(), $retryDelayMs, $statusCode);
            $this->sleep($retryDelayMs);
            
            // Retry the request recursively
            return $this->withRetry($makeRequest, $retryConfig, $retryCount + 1);
        } catch (\Exception $err) {
            // Handle generic exceptions
            $statusCode = $this->extractStatusCodeFromException($err);
            
            if (!$this->shouldRetry($statusCode, $retryCount, $retryConfig)) {
                $this->logRequestFailed($retryCount, $err->getMessage());
                throw $err;
            }
            
            $retryDelayMs = $this->calculateBackoffDelay($retryCount, $retryConfig->getDelayMs());
            $this->logRetryAttempt($retryCount, $retryConfig->getMaxRetries(), $retryDelayMs, $statusCode);
            $this->sleep($retryDelayMs);
            
            return $this->withRetry($makeRequest, $retryConfig, $retryCount + 1);
        }
    }

    /**
     * Determines if we should handle a rate limit error.
     */
    private function shouldHandleRateLimit(int $statusCode, RetryConfig $retryConfig): bool
    {
        return $statusCode === 429 && $retryConfig->isEnabled();
    }

    /**
     * Handles rate limit (429) errors with Retry-After header.
     */
    private function handleRateLimitError(\Exception $err, callable $makeRequest, RetryConfig $retryConfig, int $retryCount): ResponseObject
    {
        $headers = method_exists($err, 'getHeaders') ? $err->getHeaders() : [];
        $retryAfterHeader = $headers['retry-after'] ?? $headers['Retry-After'] ?? '';
        $parsedDelay = $this->parseRetryAfter((string)$retryAfterHeader);

        if (!$parsedDelay) {
            // Use default delay if no retry-after header is found
            $parsedDelay = $retryConfig->getDelayMs();
            $this->log("Rate limit error occurred, but no valid retry-after header found. Using default delay: {$parsedDelay}ms.", self::LOG_LEVEL_INFO);
        } else {
            $this->log("Rate limit error occurred. Retrying in {$parsedDelay}ms as specified by Retry-After header.", self::LOG_LEVEL_INFO);
        }

        $this->sleep($parsedDelay);
        return $this->withRetry($makeRequest, $retryConfig, $retryCount + 1);
    }

    /**
     * Extracts HTTP status code from generic exceptions.
     */
    private function extractStatusCodeFromException(\Exception $err): int
    {
        // Try various methods to get the status code
        if (method_exists($err, 'getHttpStatusCode')) {
            return $err->getHttpStatusCode();
        }

        if (method_exists($err, 'getResponse')) {
            $response = $err->getResponse();
            if (is_object($response) && method_exists($response, 'getStatusCode')) {
                return $response->getStatusCode();
            }
        }
        
        // Fall back to error code, which might not be an HTTP status code
        return (int)$err->getCode();
    }
    
    /**
     * Determines if a request should be retried.
     */
    private function shouldRetry(int $statusCode, int $retryCount, RetryConfig $retryConfig): bool
    {
        return $retryConfig->isEnabled() &&
               in_array($statusCode, $retryConfig->getRetryOn(), true) &&
               $retryCount < $retryConfig->getMaxRetries();
    }
    
    /**
     * Calculates delay with exponential backoff and jitter.
     */
    private function calculateBackoffDelay(int $retryCount, int $baseDelayMs): int
    {
        // Exponential backoff with jitter
        return $baseDelayMs * (int)pow(2, $retryCount) + rand(0, self::DEFAULT_JITTER_MS);
    }
    
    /**
     * Logs a message when a request fails after retries.
     */
    private function logRequestFailed(int $retryCount, string $errorMessage): void
    {
        $this->log("Request failed after {$retryCount} " . 
            ($retryCount === 1 ? "retry" : "retries") . ": {$errorMessage}", self::LOG_LEVEL_ERROR);
    }
    
    /**
     * Logs information about a retry attempt.
     */
    private function logRetryAttempt(int $retryCount, int $maxRetries, int $delayMs, int $statusCode): void
    {
        $nextAttempt = $retryCount + 1;
        $this->log("Retrying request [{$nextAttempt}/{$maxRetries}] in {$delayMs}ms due to status code {$statusCode}.", 
            self::LOG_LEVEL_INFO);
    }
    
    /**
     * Sleep for the specified milliseconds.
     */
    private function sleep(int $milliseconds): void
    {
        usleep($milliseconds * 1000); // Convert to microseconds
    }

    /**
     * Parses the Retry-After header to determine the delay in milliseconds.
     */
    private function parseRetryAfter(string $retryAfterHeader): ?int
    {
        if (empty($retryAfterHeader)) {
            return null;
        }
        
        if (is_numeric($retryAfterHeader)) {
            // If it's numeric, treat as seconds
            return (int)$retryAfterHeader * 1000; // Convert seconds to milliseconds
        }

        // Try to parse as HTTP date
        $retryAfterTime = strtotime($retryAfterHeader);
        if ($retryAfterTime === false) {
            return null;
        }
        
        // Calculate delay based on difference between now and the specified time
        return max(0, ($retryAfterTime - time()) * 1000); // Convert seconds to milliseconds
    }

    /**
     * Logs messages for debugging purposes.
     */
    private function log(string $message, string $level = self::LOG_LEVEL_INFO): void
    {
        if($this->env->getEnableDebugLogs()){
            echo "[$level] $message\n";
        }
    }
}
