<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\UsageSummaryResponse\RetrieveUsageSummaryForSubscriptionUsageSummaryResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface UsageSummaryActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_summaries/retrieve-usage-summary-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: string,
    *     window_size?: string,
    *     timeframe_start?: int,
    *     timeframe_end?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveUsageSummaryForSubscriptionUsageSummaryResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveUsageSummaryForSubscription(string $id, array $params, array $headers = []): RetrieveUsageSummaryForSubscriptionUsageSummaryResponse;

}
?>