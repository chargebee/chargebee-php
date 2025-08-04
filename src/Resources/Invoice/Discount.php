<?php

namespace Chargebee\Resources\Invoice;

class Discount  { 
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?string $coupon_set_code
    */
    public ?string $coupon_set_code;
    
    /**
    *
    * @var ?\Chargebee\Resources\Invoice\ClassBasedEnums\DiscountEntityType $entity_type
    */
    public ?\Chargebee\Resources\Invoice\ClassBasedEnums\DiscountEntityType $entity_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Invoice\ClassBasedEnums\DiscountDiscountType $discount_type
    */
    public ?\Chargebee\Resources\Invoice\ClassBasedEnums\DiscountDiscountType $discount_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "amount" , "description" , "entity_id" , "coupon_set_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $amount,
        ?string $description,
        ?string $entity_id,
        ?string $coupon_set_code,
        ?\Chargebee\Resources\Invoice\ClassBasedEnums\DiscountEntityType $entity_type,
        ?\Chargebee\Resources\Invoice\ClassBasedEnums\DiscountDiscountType $discount_type,
    )
    { 
        $this->amount = $amount;
        $this->description = $description;
        $this->entity_id = $entity_id;
        $this->coupon_set_code = $coupon_set_code;  
        $this->entity_type = $entity_type;
        $this->discount_type = $discount_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['amount'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['coupon_set_code'] ?? null,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\Invoice\ClassBasedEnums\DiscountEntityType::tryFromValue($resourceAttributes['entity_type']) : null,
        
        isset($resourceAttributes['discount_type']) ? \Chargebee\Resources\Invoice\ClassBasedEnums\DiscountDiscountType::tryFromValue($resourceAttributes['discount_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['amount' => $this->amount,
        'description' => $this->description,
        'entity_id' => $this->entity_id,
        'coupon_set_code' => $this->coupon_set_code,
        
        'entity_type' => $this->entity_type?->value,
        
        'discount_type' => $this->discount_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>