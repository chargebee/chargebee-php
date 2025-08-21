<?php

namespace Chargebee\Resources\Rule;

class Rule  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $namespace
    */
    public ?string $namespace;
    
    /**
    *
    * @var ?string $rule_name
    */
    public ?string $rule_name;
    
    /**
    *
    * @var ?int $rule_order
    */
    public ?int $rule_order;
    
    /**
    *
    * @var ?string $conditions
    */
    public ?string $conditions;
    
    /**
    *
    * @var ?string $outcome
    */
    public ?string $outcome;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
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
    * @var ?\Chargebee\Resources\Rule\Enums\Status $status
    */
    public ?\Chargebee\Resources\Rule\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "namespace" , "rule_name" , "rule_order" , "conditions" , "outcome" , "deleted" , "created_at" , "modified_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $namespace,
        ?string $rule_name,
        ?int $rule_order,
        ?string $conditions,
        ?string $outcome,
        ?bool $deleted,
        ?int $created_at,
        ?int $modified_at,
        ?\Chargebee\Resources\Rule\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->namespace = $namespace;
        $this->rule_name = $rule_name;
        $this->rule_order = $rule_order;
        $this->conditions = $conditions;
        $this->outcome = $outcome;
        $this->deleted = $deleted;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['namespace'] ?? null,
        $resourceAttributes['rule_name'] ?? null,
        $resourceAttributes['rule_order'] ?? null,
        $resourceAttributes['conditions'] ?? null,
        $resourceAttributes['outcome'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Rule\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'namespace' => $this->namespace,
        'rule_name' => $this->rule_name,
        'rule_order' => $this->rule_order,
        'conditions' => $this->conditions,
        'outcome' => $this->outcome,
        'deleted' => $this->deleted,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>