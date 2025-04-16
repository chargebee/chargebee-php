<?php

namespace Chargebee\Responses\EntitlementOverrideResponse;
use Chargebee\Resources\EntitlementOverride\EntitlementOverride;

use Chargebee\ValueObjects\ResponseBase;

class AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse extends ResponseBase { 
    /**
    *
    * @var EntitlementOverride $entitlement_override
    */
    public EntitlementOverride $entitlement_override;
    

    private function __construct(
        EntitlementOverride $entitlement_override,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->entitlement_override = $entitlement_override;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             EntitlementOverride::from($resourceAttributes['entitlement_override']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'entitlement_override' => $this->entitlement_override->toArray(),
        ]);
        

        return $data;
    }
}
?>