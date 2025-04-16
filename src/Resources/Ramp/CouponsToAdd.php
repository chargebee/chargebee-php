<?php

namespace Chargebee\Resources\Ramp;

class CouponsToAdd  { 
    /**
    *
    * @var string $coupon_id
    */
    public string $coupon_id;
    
    /**
    *
    * @var ?int $apply_till
    */
    public ?int $apply_till;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "coupon_id" , "apply_till"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $coupon_id,
        ?int $apply_till,
    )
    { 
        $this->coupon_id = $coupon_id;
        $this->apply_till = $apply_till;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['coupon_id'] ,
        $resourceAttributes['apply_till'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['coupon_id' => $this->coupon_id,
        'apply_till' => $this->apply_till,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>