<?php

namespace Chargebee\Resources\QuotedRamp;

class CouponApplicabilityMapping  { 
    /**
    *
    * @var ?string $coupon_id
    */
    public ?string $coupon_id;
    
    /**
    *
    * @var ?array<string> $applicable_item_price_ids
    */
    public ?array $applicable_item_price_ids;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "coupon_id" , "applicable_item_price_ids"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $coupon_id,
        ?array $applicable_item_price_ids,
    )
    { 
        $this->coupon_id = $coupon_id;
        $this->applicable_item_price_ids = $applicable_item_price_ids;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['coupon_id'] ?? null,
        $resourceAttributes['applicable_item_price_ids'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['coupon_id' => $this->coupon_id,
        'applicable_item_price_ids' => $this->applicable_item_price_ids,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>