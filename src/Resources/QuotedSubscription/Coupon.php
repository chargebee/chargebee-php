<?php

namespace Chargebee\Resources\QuotedSubscription;

class Coupon  { 
    /**
    *
    * @var ?string $coupon_id
    */
    public ?string $coupon_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "coupon_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $coupon_id,
    )
    { 
        $this->coupon_id = $coupon_id;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['coupon_id'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['coupon_id' => $this->coupon_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>