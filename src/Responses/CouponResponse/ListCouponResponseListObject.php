<?php
namespace Chargebee\Responses\CouponResponse;

use Chargebee\Resources\Coupon\Coupon;

class ListCouponResponseListObject
{ 
    public Coupon $coupon;
    public function __construct(
        Coupon $coupon,
    ) { 
        $this->coupon = $coupon;
    }
}
