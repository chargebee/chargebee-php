<?php

namespace Chargebee\Resources\BusinessRuleset;

class BusinessRuleset  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?bool $active
    */
    public ?bool $active;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?string $updated_by
    */
    public ?string $updated_by;
    
    /**
    *
    * @var ?string $created_by
    */
    public ?string $created_by;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var mixed $rules
    */
    public mixed $rules;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?\Chargebee\Resources\BusinessRuleset\Enums\ExecuteMode $execute_mode
    */
    public ?\Chargebee\Resources\BusinessRuleset\Enums\ExecuteMode $execute_mode;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "active" , "updated_at" , "updated_by" , "created_by" , "created_at" , "rules" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $description,
        ?bool $active,
        ?int $updated_at,
        ?string $updated_by,
        ?string $created_by,
        ?int $created_at,
        mixed $rules,
        ?int $resource_version,
        ?\Chargebee\Resources\BusinessRuleset\Enums\ExecuteMode $execute_mode,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->active = $active;
        $this->updated_at = $updated_at;
        $this->updated_by = $updated_by;
        $this->created_by = $created_by;
        $this->created_at = $created_at;
        $this->rules = $rules;
        $this->resource_version = $resource_version;  
        $this->execute_mode = $execute_mode; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['active'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['updated_by'] ?? null,
        $resourceAttributes['created_by'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['rules'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
         
        isset($resourceAttributes['execute_mode']) ? \Chargebee\Resources\BusinessRuleset\Enums\ExecuteMode::tryFromValue($resourceAttributes['execute_mode']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'active' => $this->active,
        'updated_at' => $this->updated_at,
        'updated_by' => $this->updated_by,
        'created_by' => $this->created_by,
        'created_at' => $this->created_at,
        'rules' => $this->rules,
        'resource_version' => $this->resource_version,
        
        'execute_mode' => $this->execute_mode?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>