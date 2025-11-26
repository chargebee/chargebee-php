<?php

namespace Chargebee\Resources\QuotedDeltaRamp;

class LineItem  { 
    /**
    *
    * @var ?string $item_level_discount_per_billing_cycle_in_decimal
    */
    public ?string $item_level_discount_per_billing_cycle_in_decimal;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_level_discount_per_billing_cycle_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_level_discount_per_billing_cycle_in_decimal,
    )
    { 
        $this->item_level_discount_per_billing_cycle_in_decimal = $item_level_discount_per_billing_cycle_in_decimal;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_level_discount_per_billing_cycle_in_decimal'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['item_level_discount_per_billing_cycle_in_decimal' => $this->item_level_discount_per_billing_cycle_in_decimal,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>