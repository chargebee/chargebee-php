<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EntitlementOverrideResponse\AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse;
use Chargebee\Responses\EntitlementOverrideResponse\ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface EntitlementOverrideActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlement_overrides/list-entitlement-overrides-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     embed?: string,
    *     include_drafts?: bool,
    *     include_scheduled_overrides?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listEntitlementOverrideForSubscription(string $id, array $params = [], array $headers = []): ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlement_overrides/upsert-or-remove-entitlement-overrides-for-a-subscription?lang=php-v4
    *   @param array{
    *     entitlement_overrides?: array<array{
    *     feature_id?: string,
    *     entity_id?: string,
    *     entity_type?: string,
    *     value?: string,
    *     expires_at?: int,
    *     effective_from?: int,
    *     is_enabled?: bool,
    *     }>,
    *     action?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addEntitlementOverrideForSubscription(string $id, array $params, array $headers = []): AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse;

}
?>