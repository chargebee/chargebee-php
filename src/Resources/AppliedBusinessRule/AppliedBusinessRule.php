<?php

namespace Chargebee\Resources\AppliedBusinessRule;

class AppliedBusinessRule  { 
    /**
    *
    * @var ?string $handle
    */
    public ?string $handle;
    
    /**
    *
    * @var ?int $entity_id
    */
    public ?int $entity_id;
    
    /**
    *
    * @var ?int $entity_version
    */
    public ?int $entity_version;
    
    /**
    *
    * @var ?string $rule_id
    */
    public ?string $rule_id;
    
    /**
    *
    * @var ?int $version
    */
    public ?int $version;
    
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
    * @var ?\Chargebee\Resources\AppliedBusinessRule\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Resources\AppliedBusinessRule\Enums\EntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "handle" , "entity_id" , "entity_version" , "rule_id" , "version" , "created_at" , "modified_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $handle,
        ?int $entity_id,
        ?int $entity_version,
        ?string $rule_id,
        ?int $version,
        ?int $created_at,
        ?int $modified_at,
        ?\Chargebee\Resources\AppliedBusinessRule\Enums\EntityType $entity_type,
    )
    { 
        $this->handle = $handle;
        $this->entity_id = $entity_id;
        $this->entity_version = $entity_version;
        $this->rule_id = $rule_id;
        $this->version = $version;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;  
        $this->entity_type = $entity_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['handle'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['entity_version'] ?? null,
        $resourceAttributes['rule_id'] ?? null,
        $resourceAttributes['version'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\AppliedBusinessRule\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['handle' => $this->handle,
        'entity_id' => $this->entity_id,
        'entity_version' => $this->entity_version,
        'rule_id' => $this->rule_id,
        'version' => $this->version,
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