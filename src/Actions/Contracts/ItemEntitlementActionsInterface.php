<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ItemEntitlementResponse\ItemEntitlementsForItemItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\AddItemEntitlementsItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\ItemEntitlementsForFeatureItemEntitlementResponse;

Interface ItemEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#list_item_entitlements_for_a_feature
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ItemEntitlementsForFeatureItemEntitlementResponse
    */
    public function itemEntitlementsForFeature(string $id, array $params = [], array $headers = []): ItemEntitlementsForFeatureItemEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#upsert_or_remove_item_entitlements_for_a_feature
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
    */
    public function addItemEntitlements(string $id, array $params, array $headers = []): AddItemEntitlementsItemEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#list_item_entitlements_for_an_item
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     embed?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ItemEntitlementsForItemItemEntitlementResponse
    */
    public function itemEntitlementsForItem(string $id, array $params = [], array $headers = []): ItemEntitlementsForItemItemEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#upsert_or_remove_item_entitlements_for_an_item
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
    */
    public function upsertOrRemoveItemEntitlementsForItem(string $id, array $params, array $headers = []): UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse;

}
?>