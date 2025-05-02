<?php

namespace Chargebee\Resources\Subscription;

class Coupon  { 
    /**
    *
    * @var ?string $coupon_id
    */
    public ?string $coupon_id;
    
    /**
    *
    * @var ?int $apply_till
    */
    public ?int $apply_till;
    
    /**
    *
    * @var ?int $applied_count
    */
    public ?int $applied_count;
    
    /**
    *
    * @var ?string $coupon_code
    */
    public ?string $coupon_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "coupon_id" , "apply_till" , "applied_count" , "coupon_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $coupon_id,
        ?int $apply_till,
        ?int $applied_count,
        ?string $coupon_code,
    )
    { 
        $this->coupon_id = $coupon_id;
        $this->apply_till = $apply_till;
        $this->applied_count = $applied_count;
        $this->coupon_code = $coupon_code;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['coupon_id'] ?? null,
        $resourceAttributes['apply_till'] ?? null,
        $resourceAttributes['applied_count'] ?? null,
        $resourceAttributes['coupon_code'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['coupon_id' => $this->coupon_id,
        'apply_till' => $this->apply_till,
        'applied_count' => $this->applied_count,
        'coupon_code' => $this->coupon_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>