<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ItemEntitlementResponse\ItemEntitlementsForItemItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\AddItemEntitlementsItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\ItemEntitlementsForFeatureItemEntitlementResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface ItemEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements/list-item-entitlements-for-a-feature?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ItemEntitlementsForFeatureItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function itemEntitlementsForFeature(string $id, array $params = [], array $headers = []): ItemEntitlementsForFeatureItemEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements/upsert-or-remove-item-entitlements-for-a-feature?lang=php-v4
    *   @param array{
    *     item_entitlements?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     value?: string,
    *     }>,
    *     action?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddItemEntitlementsItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addItemEntitlements(string $id, array $params, array $headers = []): AddItemEntitlementsItemEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements/list-item-entitlements-for-an-item?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     embed?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ItemEntitlementsForItemItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function itemEntitlementsForItem(string $id, array $params = [], array $headers = []): ItemEntitlementsForItemItemEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements/upsert-or-remove-item-entitlements-for-an-item?lang=php-v4
    *   @param array{
    *     item_entitlements?: array<array{
    *     feature_id?: string,
    *     value?: string,
    *     }>,
    *     action?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function upsertOrRemoveItemEntitlementsForItem(string $id, array $params, array $headers = []): UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse;

}
?>