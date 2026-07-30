<?php

namespace Chargebee\Resources\CreditUnit;

class CreditUnit  { 
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
    * @var ?string $external_name
    */
    public ?string $external_name;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?string $created_by
    */
    public ?string $created_by;
    
    /**
    *
    * @var ?string $updated_by
    */
    public ?string $updated_by;
    
    /**
    *
    * @var ?bool $is_unlimited
    */
    public ?bool $is_unlimited;
    
    /**
    *
    * @var ?string $overdraft_amount
    */
    public ?string $overdraft_amount;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditUnit\Enums\Status $status
    */
    public ?\Chargebee\Resources\CreditUnit\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "external_name" , "resource_version" , "updated_at" , "created_at" , "created_by" , "updated_by" , "is_unlimited" , "overdraft_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $external_name,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?string $created_by,
        ?string $updated_by,
        ?bool $is_unlimited,
        ?string $overdraft_amount,
        ?\Chargebee\Resources\CreditUnit\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->external_name = $external_name;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->created_by = $created_by;
        $this->updated_by = $updated_by;
        $this->is_unlimited = $is_unlimited;
        $this->overdraft_amount = $overdraft_amount;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['external_name'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['created_by'] ?? null,
        $resourceAttributes['updated_by'] ?? null,
        $resourceAttributes['is_unlimited'] ?? null,
        $resourceAttributes['overdraft_amount'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CreditUnit\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'external_name' => $this->external_name,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        'created_by' => $this->created_by,
        'updated_by' => $this->updated_by,
        'is_unlimited' => $this->is_unlimited,
        'overdraft_amount' => $this->overdraft_amount,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>