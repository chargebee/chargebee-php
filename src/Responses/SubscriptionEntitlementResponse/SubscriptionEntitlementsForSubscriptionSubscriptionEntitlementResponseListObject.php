<?php
namespace Chargebee\Responses\SubscriptionEntitlementResponse;

use Chargebee\Resources\SubscriptionEntitlement\SubscriptionEntitlement;

class SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponseListObject
{ 
    public SubscriptionEntitlement $subscription_entitlement;
    public function __construct(
        SubscriptionEntitlement $subscription_entitlement,
    ) { 
        $this->subscription_entitlement = $subscription_entitlement;
    }
}
