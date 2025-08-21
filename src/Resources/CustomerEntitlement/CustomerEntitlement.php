<?php

namespace Chargebee\Resources\CustomerEntitlement;

class CustomerEntitlement  { 
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $feature_id
    */
    public ?string $feature_id;
    
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?bool $is_enabled
    */
    public ?bool $is_enabled;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "customer_id" , "subscription_id" , "feature_id" , "value" , "name" , "is_enabled"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $customer_id,
        ?string $subscription_id,
        ?string $feature_id,
        ?string $value,
        ?string $name,
        ?bool $is_enabled,
    )
    { 
        $this->customer_id = $customer_id;
        $this->subscription_id = $subscription_id;
        $this->feature_id = $feature_id;
        $this->value = $value;
        $this->name = $name;
        $this->is_enabled = $is_enabled;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['is_enabled'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['customer_id' => $this->customer_id,
        'subscription_id' => $this->subscription_id,
        'feature_id' => $this->feature_id,
        'value' => $this->value,
        'name' => $this->name,
        'is_enabled' => $this->is_enabled,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>