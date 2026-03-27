<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\UsageChargeResponse\RetrieveUsageChargesForSubscriptionUsageChargeResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface UsageChargeActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_charges/retrieve-usage-charges-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveUsageChargesForSubscriptionUsageChargeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveUsageChargesForSubscription(string $id, array $params = [], array $headers = []): RetrieveUsageChargesForSubscriptionUsageChargeResponse;

}
?>