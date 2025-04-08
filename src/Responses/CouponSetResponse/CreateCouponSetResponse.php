<?php

namespace Chargebee\Responses\CouponSetResponse;
use Chargebee\Resources\CouponSet\CouponSet;

use Chargebee\ValueObjects\ResponseBase;

class CreateCouponSetResponse extends ResponseBase { 
    /**
    *
    * @var CouponSet $coupon_set
    */
    public CouponSet $coupon_set;
    

    private function __construct(
        CouponSet $coupon_set,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->coupon_set = $coupon_set;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             CouponSet::from($resourceAttributes['coupon_set']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'coupon_set' => $this->coupon_set->toArray(),
        ]);
        

        return $data;
    }
}
?>