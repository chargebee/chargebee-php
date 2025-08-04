<?php

namespace Chargebee\Resources\Quote;

class LineItemDiscount  { 
    /**
    *
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    *
    * @var ?string $coupon_id
    */
    public ?string $coupon_id;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?int $discount_amount
    */
    public ?int $discount_amount;
    
    /**
    *
    * @var ?\Chargebee\Resources\Quote\ClassBasedEnums\LineItemDiscountDiscountType $discount_type
    */
    public ?\Chargebee\Resources\Quote\ClassBasedEnums\LineItemDiscountDiscountType $discount_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "line_item_id" , "coupon_id" , "entity_id" , "discount_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $line_item_id,
        ?string $coupon_id,
        ?string $entity_id,
        ?int $discount_amount,
        ?\Chargebee\Resources\Quote\ClassBasedEnums\LineItemDiscountDiscountType $discount_type,
    )
    { 
        $this->line_item_id = $line_item_id;
        $this->coupon_id = $coupon_id;
        $this->entity_id = $entity_id;
        $this->discount_amount = $discount_amount;  
        $this->discount_type = $discount_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['line_item_id'] ?? null,
        $resourceAttributes['coupon_id'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['discount_amount'] ?? null,
        
         
        isset($resourceAttributes['discount_type']) ? \Chargebee\Resources\Quote\ClassBasedEnums\LineItemDiscountDiscountType::tryFromValue($resourceAttributes['discount_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['line_item_id' => $this->line_item_id,
        'coupon_id' => $this->coupon_id,
        'entity_id' => $this->entity_id,
        'discount_amount' => $this->discount_amount,
        
        'discount_type' => $this->discount_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>