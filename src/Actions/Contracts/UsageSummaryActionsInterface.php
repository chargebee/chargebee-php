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
    *   
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: string,
    *     window_size?: string,
    *     timeframe_start?: int,
    *     timeframe_end?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @deprecated This method is deprecated and will be removed in a future version.
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