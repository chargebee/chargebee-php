<?php

namespace Chargebee\Resources\ResourceMigration;

class ResourceMigration  { 
    /**
    *
    * @var ?string $from_site
    */
    public ?string $from_site;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?string $errors
    */
    public ?string $errors;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
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
    * @var ?\Chargebee\Resources\ResourceMigration\Enums\Status $status
    */
    public ?\Chargebee\Resources\ResourceMigration\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "from_site" , "entity_id" , "errors" , "created_at" , "updated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $from_site,
        ?string $entity_id,
        ?string $errors,
        ?int $created_at,
        ?int $updated_at,
        ?\Chargebee\Enums\EntityType $entity_type,
        ?\Chargebee\Resources\ResourceMigration\Enums\Status $status,
    )
    { 
        $this->from_site = $from_site;
        $this->entity_id = $entity_id;
        $this->errors = $errors;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at; 
        $this->entity_type = $entity_type; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['from_site'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['errors'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
        
        isset($resourceAttributes['entity_type']) ? \Chargebee\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\ResourceMigration\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['from_site' => $this->from_site,
        'entity_id' => $this->entity_id,
        'errors' => $this->errors,
        'created_at' => $this->created_at,
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