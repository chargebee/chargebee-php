<?php
namespace Chargebee\Responses\CouponSetResponse;

use Chargebee\Resources\CouponSet\CouponSet;

class ListCouponSetResponseListObject
{ 
    public CouponSet $coupon_set;
    public function __construct(
        CouponSet $coupon_set,
    ) { 
        $this->coupon_set = $coupon_set;
    }
}
