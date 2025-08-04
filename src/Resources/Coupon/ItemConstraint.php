<?php

namespace Chargebee\Resources\Coupon;

class ItemConstraint  { 
    /**
    *
    * @var mixed $item_price_ids
    */
    public mixed $item_price_ids;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintItemType $item_type
    */
    public ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintItemType $item_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintConstraint $constraint
    */
    public ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintConstraint $constraint;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_ids"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        mixed $item_price_ids,
        ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintItemType $item_type,
        ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintConstraint $constraint,
    )
    { 
        $this->item_price_ids = $item_price_ids;  
        $this->item_type = $item_type;
        $this->constraint = $constraint;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_ids'] ?? null,
        
         
        isset($resourceAttributes['item_type']) ? \Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintItemType::tryFromValue($resourceAttributes['item_type']) : null,
        
        isset($resourceAttributes['constraint']) ? \Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintConstraint::tryFromValue($resourceAttributes['constraint']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_price_ids' => $this->item_price_ids,
        
        'item_type' => $this->item_type?->value,
        
        'constraint' => $this->constraint?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>