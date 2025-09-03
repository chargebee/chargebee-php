<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\SubscriptionEntitlementResponse\SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse;
use Chargebee\Responses\SubscriptionEntitlementResponse\SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface SubscriptionEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscription_entitlements?lang=php#enable/disable_subscription_entitlements
    *   @param array{
    *     subscription_entitlements?: array<array{
    *     feature_id?: string,
    *     }>,
    *     is_enabled?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function setSubscriptionEntitlementAvailability(string $id, array $params, array $headers = []): SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscription_entitlements?lang=php#list_subscription_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     embed?: string,
    *     include_scheduled_overrides?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function subscriptionEntitlementsForSubscription(string $id, array $params = [], array $headers = []): SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse;

}
?>