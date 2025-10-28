<?php
namespace Chargebee\Responses\EntitlementResponse;

use Chargebee\Resources\Entitlement\Entitlement;

class CreateEntitlementResponseListObject
{ 
    public Entitlement $entitlement;
    public function __construct(
        Entitlement $entitlement,
    ) { 
        $this->entitlement = $entitlement;
    }
}
