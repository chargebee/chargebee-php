<?php

namespace Chargebee\Resources\Coupon;

class ItemConstraintCriteria  { 
    /**
    *
    * @var ?string $item_type
    */
    public ?string $item_type;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_type" , "currencies" , "item_family_ids" , "item_price_periods"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_type,
        mixed $currencies,
        mixed $item_family_ids,
        mixed $item_price_periods,
    )
    { 
        $this->item_type = $item_type;
        $this->currencies = $currencies;
        $this->item_family_ids = $item_family_ids;
        $this->item_price_periods = $item_price_periods;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_type'] ?? null,
        $resourceAttributes['currencies'] ?? null,
        $resourceAttributes['item_family_ids'] ?? null,
        $resourceAttributes['item_price_periods'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['item_type' => $this->item_type,
        'currencies' => $this->currencies,
        'item_family_ids' => $this->item_family_ids,
        'item_price_periods' => $this->item_price_periods,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>