<?php

namespace Chargebee\Responses\CouponResponse;
use Chargebee\Resources\Coupon\Coupon;

use Chargebee\ValueObjects\ResponseBase;

class CreateForItemsCouponResponse extends ResponseBase { 
    /**
    *
    * @var ?Coupon $coupon
    */
    public ?Coupon $coupon;
    

    private function __construct(
        ?Coupon $coupon,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->coupon = $coupon;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['coupon']) ? Coupon::from($resourceAttributes['coupon']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->coupon instanceof Coupon){
            $data['coupon'] = $this->coupon->toArray();
        } 

        return $data;
    }
}
?>