<?php

namespace Chargebee\Resources\BusinessEntityTransfer;

class BusinessEntityTransfer  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $resource_id
    */
    public ?string $resource_id;
    
    /**
    *
    * @var ?string $active_resource_id
    */
    public ?string $active_resource_id;
    
    /**
    *
    * @var ?string $destination_business_entity_id
    */
    public ?string $destination_business_entity_id;
    
    /**
    *
    * @var ?string $source_business_entity_id
    */
    public ?string $source_business_entity_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\BusinessEntityTransfer\Enums\ResourceType $resource_type
    */
    public ?\Chargebee\Resources\BusinessEntityTransfer\Enums\ResourceType $resource_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\BusinessEntityTransfer\Enums\ReasonCode $reason_code
    */
    public ?\Chargebee\Resources\BusinessEntityTransfer\Enums\ReasonCode $reason_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "resource_id" , "active_resource_id" , "destination_business_entity_id" , "source_business_entity_id" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $resource_id,
        ?string $active_resource_id,
        ?string $destination_business_entity_id,
        ?string $source_business_entity_id,
        ?int $created_at,
        ?\Chargebee\Resources\BusinessEntityTransfer\Enums\ResourceType $resource_type,
        ?\Chargebee\Resources\BusinessEntityTransfer\Enums\ReasonCode $reason_code,
    )
    { 
        $this->id = $id;
        $this->resource_id = $resource_id;
        $this->active_resource_id = $active_resource_id;
        $this->destination_business_entity_id = $destination_business_entity_id;
        $this->source_business_entity_id = $source_business_entity_id;
        $this->created_at = $created_at;  
        $this->resource_type = $resource_type;
        $this->reason_code = $reason_code; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['resource_id'] ?? null,
        $resourceAttributes['active_resource_id'] ?? null,
        $resourceAttributes['destination_business_entity_id'] ?? null,
        $resourceAttributes['source_business_entity_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
         
        isset($resourceAttributes['resource_type']) ? \Chargebee\Resources\BusinessEntityTransfer\Enums\ResourceType::tryFromValue($resourceAttributes['resource_type']) : null,
        
        isset($resourceAttributes['reason_code']) ? \Chargebee\Resources\BusinessEntityTransfer\Enums\ReasonCode::tryFromValue($resourceAttributes['reason_code']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'resource_id' => $this->resource_id,
        'active_resource_id' => $this->active_resource_id,
        'destination_business_entity_id' => $this->destination_business_entity_id,
        'source_business_entity_id' => $this->source_business_entity_id,
        'created_at' => $this->created_at,
        
        'resource_type' => $this->resource_type?->value,
        
        'reason_code' => $this->reason_code?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>