<?php

namespace Chargebee\Resources\CustomData;

class CustomData  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $schema_id
    */
    public ?string $schema_id;
    
    /**
    *
    * @var ?string $schema_values
    */
    public ?string $schema_values;
    
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
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Enums\EntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "schema_id" , "schema_values" , "created_at" , "modified_at" , "updated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $schema_id,
        ?string $schema_values,
        ?int $created_at,
        ?int $modified_at,
        ?int $updated_at,
        ?\Chargebee\Enums\EntityType $entity_type,
    )
    { 
        $this->id = $id;
        $this->schema_id = $schema_id;
        $this->schema_values = $schema_values;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->updated_at = $updated_at; 
        $this->entity_type = $entity_type;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['schema_id'] ?? null,
        $resourceAttributes['schema_values'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
        
        isset($resourceAttributes['entity_type']) ? \Chargebee\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'schema_id' => $this->schema_id,
        'schema_values' => $this->schema_values,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'updated_at' => $this->updated_at,
        
        'entity_type' => $this->entity_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>