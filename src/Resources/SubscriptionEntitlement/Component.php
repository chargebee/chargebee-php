<?php

namespace Chargebee\Resources\SubscriptionEntitlement;

class Component  { 
    /**
    *
    * @var ?\Chargebee\Resources\EntitlementOverride\EntitlementOverride $entitlement_overrides
    */
    public ?\Chargebee\Resources\EntitlementOverride\EntitlementOverride $entitlement_overrides;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "entitlement_overrides"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?\Chargebee\Resources\EntitlementOverride\EntitlementOverride $entitlement_overrides,
    )
    { 
        $this->entitlement_overrides = $entitlement_overrides;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( isset($resourceAttributes['entitlement_overrides']) ? \Chargebee\Resources\EntitlementOverride\EntitlementOverride::from($resourceAttributes['entitlement_overrides']) : null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter([
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->entitlement_overrides instanceof \Chargebee\Resources\EntitlementOverride\EntitlementOverride){
            $data['entitlement_overrides'] = $this->entitlement_overrides->toArray();
        }
        

        
        return $data;
    }
}
?>