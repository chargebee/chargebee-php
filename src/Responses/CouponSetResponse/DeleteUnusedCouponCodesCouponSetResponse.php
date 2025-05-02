<?php

namespace Chargebee\Responses\CouponSetResponse;
use Chargebee\Resources\CouponSet\CouponSet;

use Chargebee\ValueObjects\ResponseBase;

class DeleteUnusedCouponCodesCouponSetResponse extends ResponseBase { 
    /**
    *
    * @var ?CouponSet $coupon_set
    */
    public ?CouponSet $coupon_set;
    

    private function __construct(
        ?CouponSet $coupon_set,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->coupon_set = $coupon_set;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['coupon_set']) ? CouponSet::from($resourceAttributes['coupon_set']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->coupon_set instanceof CouponSet){
            $data['coupon_set'] = $this->coupon_set->toArray();
        } 

        return $data;
    }
}
?>