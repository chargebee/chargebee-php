<?php

namespace Chargebee\Responses\CouponCodeResponse;
use Chargebee\Resources\CouponCode\CouponCode;

use Chargebee\ValueObjects\ResponseBase;

class CreateCouponCodeResponse extends ResponseBase { 
    /**
    *
    * @var ?CouponCode $coupon_code
    */
    public ?CouponCode $coupon_code;
    

    private function __construct(
        ?CouponCode $coupon_code,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->coupon_code = $coupon_code;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['coupon_code']) ? CouponCode::from($resourceAttributes['coupon_code']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->coupon_code instanceof CouponCode){
            $data['coupon_code'] = $this->coupon_code->toArray();
        } 

        return $data;
    }
}
?>