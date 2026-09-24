<?php

namespace Chargebee\Resources\CustomDataSchema;

class CustomDataSchema  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $display_name
    */
    public ?string $display_name;
    
    /**
    *
    * @var ?string $schema_definition
    */
    public ?string $schema_definition;
    
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
    *
    * @var ?\Chargebee\Resources\CustomDataSchema\Enums\Status $status
    */
    public ?\Chargebee\Resources\CustomDataSchema\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "display_name" , "schema_definition" , "created_at" , "modified_at" , "updated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $display_name,
        ?string $schema_definition,
        ?int $created_at,
        ?int $modified_at,
        ?int $updated_at,
        ?\Chargebee\Enums\EntityType $entity_type,
        ?\Chargebee\Resources\CustomDataSchema\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->display_name = $display_name;
        $this->schema_definition = $schema_definition;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->updated_at = $updated_at; 
        $this->entity_type = $entity_type; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['display_name'] ?? null,
        $resourceAttributes['schema_definition'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
        
        isset($resourceAttributes['entity_type']) ? \Chargebee\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CustomDataSchema\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'display_name' => $this->display_name,
        'schema_definition' => $this->schema_definition,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'updated_at' => $this->updated_at,
        
        'entity_type' => $this->entity_type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>