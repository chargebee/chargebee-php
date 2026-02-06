<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\SubscriptionEntitlementResponse\SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse;
use Chargebee\Responses\SubscriptionEntitlementResponse\SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface SubscriptionEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscription_entitlements/enable-or-disable-subscription-entitlements?lang=php-v4
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
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function setSubscriptionEntitlementAvailability(string $id, array $params, array $headers = []): SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscription_entitlements/list-subscription-entitlements?lang=php-v4
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
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function subscriptionEntitlementsForSubscription(string $id, array $params = [], array $headers = []): SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse;

}
?>