<?php

namespace Chargebee\Resources\Coupon;

class ItemConstraintCriteria  { 
    /**
    *
    * @var mixed $currencies
    */
    public mixed $currencies;
    
    /**
    *
    * @var mixed $item_family_ids
    */
    public mixed $item_family_ids;
    
    /**
    *
    * @var mixed $item_price_periods
    */
    public mixed $item_price_periods;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintCriteriaItemType $item_type
    */
    public ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintCriteriaItemType $item_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "currencies" , "item_family_ids" , "item_price_periods"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        mixed $currencies,
        mixed $item_family_ids,
        mixed $item_price_periods,
        ?\Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintCriteriaItemType $item_type,
    )
    { 
        $this->currencies = $currencies;
        $this->item_family_ids = $item_family_ids;
        $this->item_price_periods = $item_price_periods;  
        $this->item_type = $item_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['currencies'] ?? null,
        $resourceAttributes['item_family_ids'] ?? null,
        $resourceAttributes['item_price_periods'] ?? null,
        
         
        isset($resourceAttributes['item_type']) ? \Chargebee\Resources\Coupon\ClassBasedEnums\ItemConstraintCriteriaItemType::tryFromValue($resourceAttributes['item_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['currencies' => $this->currencies,
        'item_family_ids' => $this->item_family_ids,
        'item_price_periods' => $this->item_price_periods,
        
        'item_type' => $this->item_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>