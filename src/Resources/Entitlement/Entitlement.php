<?php

namespace Chargebee\Resources\Entitlement;

class Entitlement  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?\Chargebee\Resources\Entitlement\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Resources\Entitlement\Enums\EntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "entity_id" , "feature_id" , "feature_name" , "value" , "name"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $entity_id,
        ?string $feature_id,
        ?string $feature_name,
        ?string $value,
        ?string $name,
        ?\Chargebee\Resources\Entitlement\Enums\EntityType $entity_type,
    )
    { 
        $this->id = $id;
        $this->entity_id = $entity_id;
        $this->feature_id = $feature_id;
        $this->feature_name = $feature_name;
        $this->value = $value;
        $this->name = $name;  
        $this->entity_type = $entity_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['feature_name'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['name'] ?? null,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\Entitlement\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'entity_id' => $this->entity_id,
        'feature_id' => $this->feature_id,
        'feature_name' => $this->feature_name,
        'value' => $this->value,
        'name' => $this->name,
        
        'entity_type' => $this->entity_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>