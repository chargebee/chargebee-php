<?php

namespace Chargebee\Resources\BusinessRule;

class BusinessRule  { 
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
    * @var ?int $latest_version
    */
    public ?int $latest_version;
    
    /**
    *
    * @var ?bool $active
    */
    public ?bool $active;
    
    /**
    *
    * @var ?int $released_at
    */
    public ?int $released_at;
    
    /**
    *
    * @var ?string $released_by
    */
    public ?string $released_by;
    
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
    * @var mixed $tags
    */
    public mixed $tags;
    
    /**
    *
    * @var mixed $structured_expression
    */
    public mixed $structured_expression;
    
    /**
    *
    * @var mixed $actions_on_success
    */
    public mixed $actions_on_success;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "latest_version" , "active" , "released_at" , "released_by" , "updated_at" , "updated_by" , "created_by" , "created_at" , "tags" , "structured_expression" , "actions_on_success" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $description,
        ?int $latest_version,
        ?bool $active,
        ?int $released_at,
        ?string $released_by,
        ?int $updated_at,
        ?string $updated_by,
        ?string $created_by,
        ?int $created_at,
        mixed $tags,
        mixed $structured_expression,
        mixed $actions_on_success,
        ?int $resource_version,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->latest_version = $latest_version;
        $this->active = $active;
        $this->released_at = $released_at;
        $this->released_by = $released_by;
        $this->updated_at = $updated_at;
        $this->updated_by = $updated_by;
        $this->created_by = $created_by;
        $this->created_at = $created_at;
        $this->tags = $tags;
        $this->structured_expression = $structured_expression;
        $this->actions_on_success = $actions_on_success;
        $this->resource_version = $resource_version;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['latest_version'] ?? null,
        $resourceAttributes['active'] ?? null,
        $resourceAttributes['released_at'] ?? null,
        $resourceAttributes['released_by'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['updated_by'] ?? null,
        $resourceAttributes['created_by'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['tags'] ?? null,
        $resourceAttributes['structured_expression'] ?? null,
        $resourceAttributes['actions_on_success'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'latest_version' => $this->latest_version,
        'active' => $this->active,
        'released_at' => $this->released_at,
        'released_by' => $this->released_by,
        'updated_at' => $this->updated_at,
        'updated_by' => $this->updated_by,
        'created_by' => $this->created_by,
        'created_at' => $this->created_at,
        'tags' => $this->tags,
        'structured_expression' => $this->structured_expression,
        'actions_on_success' => $this->actions_on_success,
        'resource_version' => $this->resource_version,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>