<?php
namespace Chargebee\Responses\EntitlementOverrideResponse;

use Chargebee\Resources\EntitlementOverride\EntitlementOverride;

class ListEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject
{ 
    public EntitlementOverride $entitlement_override;
    public function __construct(
        EntitlementOverride $entitlement_override,
    ) { 
        $this->entitlement_override = $entitlement_override;
    }
}
