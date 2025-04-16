<?php

namespace Chargebee\Resources\CouponCode;

class CouponCode  { 
    /**
    *
    * @var string $code
    */
    public string $code;
    
    /**
    *
    * @var string $coupon_id
    */
    public string $coupon_id;
    
    /**
    *
    * @var string $coupon_set_id
    */
    public string $coupon_set_id;
    
    /**
    *
    * @var string $coupon_set_name
    */
    public string $coupon_set_name;
    
    /**
    *
    * @var \Chargebee\Resources\CouponCode\Enums\Status $status
    */
    public \Chargebee\Resources\CouponCode\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "code" , "coupon_id" , "coupon_set_id" , "coupon_set_name"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $code,
        string $coupon_id,
        string $coupon_set_id,
        string $coupon_set_name,
        \Chargebee\Resources\CouponCode\Enums\Status $status,
    )
    { 
        $this->code = $code;
        $this->coupon_id = $coupon_id;
        $this->coupon_set_id = $coupon_set_id;
        $this->coupon_set_name = $coupon_set_name;  
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['code'] ,
        $resourceAttributes['coupon_id'] ,
        $resourceAttributes['coupon_set_id'] ,
        $resourceAttributes['coupon_set_name'] ,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CouponCode\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['code' => $this->code,
        'coupon_id' => $this->coupon_id,
        'coupon_set_id' => $this->coupon_set_id,
        'coupon_set_name' => $this->coupon_set_name,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>