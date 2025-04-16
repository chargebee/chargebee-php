<?php

namespace Chargebee\Resources\EntitlementOverride;

class EntitlementOverride  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?string $entity_type
    */
    public ?string $entity_type;
    
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
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *
    * @var ?int $effective_from
    */
    public ?int $effective_from;
    
    /**
    *
    * @var ?\Chargebee\Resources\EntitlementOverride\Enums\ScheduleStatus $schedule_status
    */
    public ?\Chargebee\Resources\EntitlementOverride\Enums\ScheduleStatus $schedule_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "entity_id" , "entity_type" , "feature_id" , "feature_name" , "value" , "name" , "expires_at" , "effective_from"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        ?string $entity_id,
        ?string $entity_type,
        ?string $feature_id,
        ?string $feature_name,
        ?string $value,
        ?string $name,
        ?int $expires_at,
        ?int $effective_from,
        ?\Chargebee\Resources\EntitlementOverride\Enums\ScheduleStatus $schedule_status,
    )
    { 
        $this->id = $id;
        $this->entity_id = $entity_id;
        $this->entity_type = $entity_type;
        $this->feature_id = $feature_id;
        $this->feature_name = $feature_name;
        $this->value = $value;
        $this->name = $name;
        $this->expires_at = $expires_at;
        $this->effective_from = $effective_from;  
        $this->schedule_status = $schedule_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['entity_type'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['feature_name'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        $resourceAttributes['effective_from'] ?? null,
        
         
        isset($resourceAttributes['schedule_status']) ? \Chargebee\Resources\EntitlementOverride\Enums\ScheduleStatus::tryFromValue($resourceAttributes['schedule_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'entity_id' => $this->entity_id,
        'entity_type' => $this->entity_type,
        'feature_id' => $this->feature_id,
        'feature_name' => $this->feature_name,
        'value' => $this->value,
        'name' => $this->name,
        'expires_at' => $this->expires_at,
        'effective_from' => $this->effective_from,
        
        'schedule_status' => $this->schedule_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>