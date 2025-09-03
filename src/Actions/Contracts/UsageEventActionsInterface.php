<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\UsageEventResponse\BatchIngestUsageEventResponse;
use Chargebee\Responses\UsageEventResponse\CreateUsageEventResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface UsageEventActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_events?lang=php#create_a_usage_event
    *   @param array{
    *     deduplication_id?: string,
    *     subscription_id?: string,
    *     usage_timestamp?: int,
    *     properties?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsageEventResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateUsageEventResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_events?lang=php#ingest_usages_in_batch
    *   @param array{
    *     events?: array<array{
    *     deduplication_id?: string,
    *     subscription_id?: string,
    *     usage_timestamp?: int,
    *     properties?: mixed,
    *     }>,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return BatchIngestUsageEventResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function batchIngest(array $params, array $headers = []): BatchIngestUsageEventResponse;

}
?>