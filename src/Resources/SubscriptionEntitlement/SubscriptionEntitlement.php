<?php

namespace Chargebee\Resources\SubscriptionEntitlement;

class SubscriptionEntitlement  { 
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
    * @var ?string $feature_name
    */
    public ?string $feature_name;
    
    /**
    *
    * @var ?string $feature_unit
    */
    public ?string $feature_unit;
    
    /**
    *
    * @var ?string $feature_type
    */
    public ?string $feature_type;
    
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
    * @var ?bool $is_overridden
    */
    public ?bool $is_overridden;
    
    /**
    *
    * @var ?bool $is_enabled
    */
    public ?bool $is_enabled;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?int $effective_from
    */
    public ?int $effective_from;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *
    * @var ?Component $components
    */
    public ?Component $components;
    
    /**
    *
    * @var ?\Chargebee\Resources\SubscriptionEntitlement\Enums\ScheduleStatus $schedule_status
    */
    public ?\Chargebee\Resources\SubscriptionEntitlement\Enums\ScheduleStatus $schedule_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "subscription_id" , "feature_id" , "feature_name" , "feature_unit" , "feature_type" , "value" , "name" , "is_overridden" , "is_enabled" , "effective_from" , "expires_at" , "components"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $subscription_id,
        ?string $feature_id,
        ?string $feature_name,
        ?string $feature_unit,
        ?string $feature_type,
        ?string $value,
        ?string $name,
        ?bool $is_overridden,
        ?bool $is_enabled,
        ?int $effective_from,
        ?int $expires_at,
        ?Component $components,
        ?\Chargebee\Resources\SubscriptionEntitlement\Enums\ScheduleStatus $schedule_status,
    )
    { 
        $this->subscription_id = $subscription_id;
        $this->feature_id = $feature_id;
        $this->feature_name = $feature_name;
        $this->feature_unit = $feature_unit;
        $this->feature_type = $feature_type;
        $this->value = $value;
        $this->name = $name;
        $this->is_overridden = $is_overridden;
        $this->is_enabled = $is_enabled;
        $this->effective_from = $effective_from;
        $this->expires_at = $expires_at;
        $this->components = $components;  
        $this->schedule_status = $schedule_status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['feature_name'] ?? null,
        $resourceAttributes['feature_unit'] ?? null,
        $resourceAttributes['feature_type'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['is_overridden'] ?? null,
        $resourceAttributes['is_enabled'] ?? null,
        $resourceAttributes['effective_from'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        isset($resourceAttributes['components']) ? Component::from($resourceAttributes['components']) : null,
        
         
        isset($resourceAttributes['schedule_status']) ? \Chargebee\Resources\SubscriptionEntitlement\Enums\ScheduleStatus::tryFromValue($resourceAttributes['schedule_status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['subscription_id' => $this->subscription_id,
        'feature_id' => $this->feature_id,
        'feature_name' => $this->feature_name,
        'feature_unit' => $this->feature_unit,
        'feature_type' => $this->feature_type,
        'value' => $this->value,
        'name' => $this->name,
        'is_overridden' => $this->is_overridden,
        'is_enabled' => $this->is_enabled,
        'effective_from' => $this->effective_from,
        'expires_at' => $this->expires_at,
        
        
        'schedule_status' => $this->schedule_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->components instanceof Component){
            $data['components'] = $this->components->toArray();
        }
        

        
        return $data;
    }
}
?>