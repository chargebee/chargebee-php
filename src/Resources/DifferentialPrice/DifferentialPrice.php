<?php

namespace Chargebee\Resources\DifferentialPrice;

class DifferentialPrice  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?string $parent_item_id
    */
    public ?string $parent_item_id;
    
    /**
    *
    * @var ?int $price
    */
    public ?int $price;
    
    /**
    *
    * @var ?string $price_in_decimal
    */
    public ?string $price_in_decimal;
    
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
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
    /**
    *
    * @var ?array<Tier> $tiers
    */
    public ?array $tiers;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?array<ParentPeriod> $parent_periods
    */
    public ?array $parent_periods;
    
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
    * @var ?\Chargebee\Resources\DifferentialPrice\Enums\Status $status
    */
    public ?\Chargebee\Resources\DifferentialPrice\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "item_price_id" , "parent_item_id" , "price" , "price_in_decimal" , "resource_version" , "updated_at" , "created_at" , "modified_at" , "tiers" , "currency_code" , "parent_periods" , "business_entity_id" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $item_price_id,
        ?string $parent_item_id,
        ?int $price,
        ?string $price_in_decimal,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?int $modified_at,
        ?array $tiers,
        ?string $currency_code,
        ?array $parent_periods,
        ?string $business_entity_id,
        ?bool $deleted,
        ?\Chargebee\Resources\DifferentialPrice\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->item_price_id = $item_price_id;
        $this->parent_item_id = $parent_item_id;
        $this->price = $price;
        $this->price_in_decimal = $price_in_decimal;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->tiers = $tiers;
        $this->currency_code = $currency_code;
        $this->parent_periods = $parent_periods;
        $this->business_entity_id = $business_entity_id;
        $this->deleted = $deleted;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $tiers = array_map(fn (array $result): Tier =>  Tier::from(
            $result
        ), $resourceAttributes['tiers'] ?? []);
        
        $parent_periods = array_map(fn (array $result): ParentPeriod =>  ParentPeriod::from(
            $result
        ), $resourceAttributes['parent_periods'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['parent_item_id'] ?? null,
        $resourceAttributes['price'] ?? null,
        $resourceAttributes['price_in_decimal'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $tiers,
        $resourceAttributes['currency_code'] ?? null,
        $parent_periods,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\DifferentialPrice\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'item_price_id' => $this->item_price_id,
        'parent_item_id' => $this->parent_item_id,
        'price' => $this->price,
        'price_in_decimal' => $this->price_in_decimal,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        
        'currency_code' => $this->currency_code,
        
        'business_entity_id' => $this->business_entity_id,
        'deleted' => $this->deleted,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->tiers !== []){
            $data['tiers'] = array_map(
                fn (Tier $tiers): array => $tiers->toArray(),
                $this->tiers
            );
        }
        if($this->parent_periods !== []){
            $data['parent_periods'] = array_map(
                fn (ParentPeriod $parent_periods): array => $parent_periods->toArray(),
                $this->parent_periods
            );
        }

        
        return $data;
    }
}
?>