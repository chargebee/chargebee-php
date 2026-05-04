<?php

namespace Chargebee\Resources\QuoteEntitlement;

class QuoteEntitlement  { 
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
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
    * @var ?bool $is_enabled
    */
    public ?bool $is_enabled;
    
    /**
    *
    * @var ?int $start_date
    */
    public ?int $start_date;
    
    /**
    *
    * @var ?int $end_date
    */
    public ?int $end_date;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\QuoteEntitlement\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Resources\QuoteEntitlement\Enums\EntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "entity_id" , "feature_id" , "value" , "is_enabled" , "start_date" , "end_date" , "created_at" , "modified_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $entity_id,
        ?string $feature_id,
        ?string $value,
        ?bool $is_enabled,
        ?int $start_date,
        ?int $end_date,
        ?int $created_at,
        ?int $modified_at,
        ?\Chargebee\Resources\QuoteEntitlement\Enums\EntityType $entity_type,
    )
    { 
        $this->entity_id = $entity_id;
        $this->feature_id = $feature_id;
        $this->value = $value;
        $this->is_enabled = $is_enabled;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;  
        $this->entity_type = $entity_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['is_enabled'] ?? null,
        $resourceAttributes['start_date'] ?? null,
        $resourceAttributes['end_date'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\QuoteEntitlement\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['entity_id' => $this->entity_id,
        'feature_id' => $this->feature_id,
        'value' => $this->value,
        'is_enabled' => $this->is_enabled,
        'start_date' => $this->start_date,
        'end_date' => $this->end_date,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        
        'entity_type' => $this->entity_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>