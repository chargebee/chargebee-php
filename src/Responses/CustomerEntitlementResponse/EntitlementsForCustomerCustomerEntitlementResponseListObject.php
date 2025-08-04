<?php
namespace Chargebee\Responses\CustomerEntitlementResponse;

use Chargebee\Resources\CustomerEntitlement\CustomerEntitlement;

class EntitlementsForCustomerCustomerEntitlementResponseListObject
{ 
    public CustomerEntitlement $customer_entitlement;
    public function __construct(
        CustomerEntitlement $customer_entitlement,
    ) { 
        $this->customer_entitlement = $customer_entitlement;
    }
}
