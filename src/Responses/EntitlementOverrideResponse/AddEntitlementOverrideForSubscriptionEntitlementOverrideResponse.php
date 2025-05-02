<?php

namespace Chargebee\Responses\EntitlementOverrideResponse;
use Chargebee\Resources\EntitlementOverride\EntitlementOverride;

use Chargebee\ValueObjects\ResponseBase;

class AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse extends ResponseBase { 
    /**
    *
    * @var ?EntitlementOverride $entitlement_override
    */
    public ?EntitlementOverride $entitlement_override;
    

    private function __construct(
        ?EntitlementOverride $entitlement_override,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->entitlement_override = $entitlement_override;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['entitlement_override']) ? EntitlementOverride::from($resourceAttributes['entitlement_override']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->entitlement_override instanceof EntitlementOverride){
            $data['entitlement_override'] = $this->entitlement_override->toArray();
        } 

        return $data;
    }
}
?>