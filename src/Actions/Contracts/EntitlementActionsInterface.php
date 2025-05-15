<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EntitlementResponse\ListEntitlementResponse;
use Chargebee\Responses\EntitlementResponse\CreateEntitlementResponse;

Interface EntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements?lang=php#list_all_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * entity_type?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * entity_id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * include_drafts?: bool,
    *     embed?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListEntitlementResponse
    */
    public function all(array $params = [], array $headers = []): ListEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements?lang=php#upsert_or_remove_entitlements_for_a_feature
    *   @param array{
    *     entitlements?: array<array{
    *     entity_id?: string,
    *     feature_id?: string,
    *     entity_type?: string,
    *     value?: string,
    *     apply_grandfathering?: bool,
    *     }>,
    *     action?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateEntitlementResponse
    */
    public function create(array $params, array $headers = []): CreateEntitlementResponse;

}
?>