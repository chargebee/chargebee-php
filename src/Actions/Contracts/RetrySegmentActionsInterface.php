<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\RetrySegmentResponse\RetrieveRetrySegmentResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface RetrySegmentActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/retry_segments/retrieve-a-retry-segment?lang=php-v4
    *   @param array{
    *     invoice_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRetrySegmentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $params = [], array $headers = []): RetrieveRetrySegmentResponse;

}
?>