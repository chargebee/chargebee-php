<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItemOffer;

class OmnichannelSubscriptionItemOffer  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $offer_id_at_source
    */
    public ?string $offer_id_at_source;
    
    /**
    *
    * @var ?string $category_at_source
    */
    public ?string $category_at_source;
    
    /**
    *
    * @var ?string $type_at_source
    */
    public ?string $type_at_source;
    
    /**
    *
    * @var ?string $duration
    */
    public ?string $duration;
    
    /**
    *
    * @var ?float $percentage
    */
    public ?float $percentage;
    
    /**
    *
    * @var ?string $price_currency
    */
    public ?string $price_currency;
    
    /**
    *
    * @var ?int $price_units
    */
    public ?int $price_units;
    
    /**
    *
    * @var ?int $price_nanos
    */
    public ?int $price_nanos;
    
    /**
    *
    * @var ?int $offer_term_start
    */
    public ?int $offer_term_start;
    
    /**
    *
    * @var ?int $offer_term_end
    */
    public ?int $offer_term_end;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?\Chargebee\Enums\Category $category
    */
    public ?\Chargebee\Enums\Category $category;
    
    /**
    *
    * @var ?\Chargebee\Enums\Type $type
    */
    public ?\Chargebee\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Enums\DiscountType $discount_type
    */
    public ?\Chargebee\Enums\DiscountType $discount_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "offer_id_at_source" , "category_at_source" , "type_at_source" , "duration" , "percentage" , "price_currency" , "price_units" , "price_nanos" , "offer_term_start" , "offer_term_end" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $offer_id_at_source,
        ?string $category_at_source,
        ?string $type_at_source,
        ?string $duration,
        ?float $percentage,
        ?string $price_currency,
        ?int $price_units,
        ?int $price_nanos,
        ?int $offer_term_start,
        ?int $offer_term_end,
        ?int $resource_version,
        ?\Chargebee\Enums\Category $category,
        ?\Chargebee\Enums\Type $type,
        ?\Chargebee\Enums\DiscountType $discount_type,
    )
    { 
        $this->id = $id;
        $this->offer_id_at_source = $offer_id_at_source;
        $this->category_at_source = $category_at_source;
        $this->type_at_source = $type_at_source;
        $this->duration = $duration;
        $this->percentage = $percentage;
        $this->price_currency = $price_currency;
        $this->price_units = $price_units;
        $this->price_nanos = $price_nanos;
        $this->offer_term_start = $offer_term_start;
        $this->offer_term_end = $offer_term_end;
        $this->resource_version = $resource_version; 
        $this->category = $category;
        $this->type = $type;
        $this->discount_type = $discount_type;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['offer_id_at_source'] ?? null,
        $resourceAttributes['category_at_source'] ?? null,
        $resourceAttributes['type_at_source'] ?? null,
        $resourceAttributes['duration'] ?? null,
        $resourceAttributes['percentage'] ?? null,
        $resourceAttributes['price_currency'] ?? null,
        $resourceAttributes['price_units'] ?? null,
        $resourceAttributes['price_nanos'] ?? null,
        $resourceAttributes['offer_term_start'] ?? null,
        $resourceAttributes['offer_term_end'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
        
        isset($resourceAttributes['category']) ? \Chargebee\Enums\Category::tryFromValue($resourceAttributes['category']) : null,
        
        isset($resourceAttributes['type']) ? \Chargebee\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['discount_type']) ? \Chargebee\Enums\DiscountType::tryFromValue($resourceAttributes['discount_type']) : null,
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'offer_id_at_source' => $this->offer_id_at_source,
        'category_at_source' => $this->category_at_source,
        'type_at_source' => $this->type_at_source,
        'duration' => $this->duration,
        'percentage' => $this->percentage,
        'price_currency' => $this->price_currency,
        'price_units' => $this->price_units,
        'price_nanos' => $this->price_nanos,
        'offer_term_start' => $this->offer_term_start,
        'offer_term_end' => $this->offer_term_end,
        'resource_version' => $this->resource_version,
        
        'category' => $this->category?->value,
        
        'type' => $this->type?->value,
        
        'discount_type' => $this->discount_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>