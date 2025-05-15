<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CustomerEntitlementResponse\EntitlementsForCustomerCustomerEntitlementResponse;

Interface CustomerEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customer_entitlements?lang=php#list_customer_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EntitlementsForCustomerCustomerEntitlementResponse
    */
    public function entitlementsForCustomer(string $id, array $params = [], array $headers = []): EntitlementsForCustomerCustomerEntitlementResponse;

}
?>