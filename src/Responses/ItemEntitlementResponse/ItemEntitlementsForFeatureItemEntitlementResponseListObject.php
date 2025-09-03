<?php
namespace Chargebee\Responses\ItemEntitlementResponse;

use Chargebee\Resources\ItemEntitlement\ItemEntitlement;

class ItemEntitlementsForFeatureItemEntitlementResponseListObject
{ 
    public ItemEntitlement $item_entitlement;
    public function __construct(
        ItemEntitlement $item_entitlement,
    ) { 
        $this->item_entitlement = $item_entitlement;
    }
}
