<?php

namespace Chargebee\Resources\PriceVariant;

class PriceVariant  { 
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
    * @var ?string $variant_group
    */
    public ?string $variant_group;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
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
    * @var ?int $archived_at
    */
    public ?int $archived_at;
    
    /**
    *
    * @var ?array<Attribute> $attributes
    */
    public ?array $attributes;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?\Chargebee\Resources\PriceVariant\Enums\Status $status
    */
    public ?\Chargebee\Resources\PriceVariant\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "external_name" , "variant_group" , "description" , "created_at" , "resource_version" , "updated_at" , "archived_at" , "attributes" , "business_entity_id" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $external_name,
        ?string $variant_group,
        ?string $description,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?int $archived_at,
        ?array $attributes,
        ?string $business_entity_id,
        ?bool $deleted,
        ?\Chargebee\Resources\PriceVariant\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->external_name = $external_name;
        $this->variant_group = $variant_group;
        $this->description = $description;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->archived_at = $archived_at;
        $this->attributes = $attributes;
        $this->business_entity_id = $business_entity_id;
        $this->deleted = $deleted;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $attributes = array_map(fn (array $result): Attribute =>  Attribute::from(
            $result
        ), $resourceAttributes['attributes'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['external_name'] ?? null,
        $resourceAttributes['variant_group'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['archived_at'] ?? null,
        $attributes,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\PriceVariant\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'external_name' => $this->external_name,
        'variant_group' => $this->variant_group,
        'description' => $this->description,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'archived_at' => $this->archived_at,
        
        'business_entity_id' => $this->business_entity_id,
        'deleted' => $this->deleted,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->attributes !== []){
            $data['attributes'] = array_map(
                fn (Attribute $attributes): array => $attributes->toArray(),
                $this->attributes
            );
        }

        
        return $data;
    }
}
?>