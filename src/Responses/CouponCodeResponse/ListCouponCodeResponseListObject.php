<?php
namespace Chargebee\Responses\CouponCodeResponse;

use Chargebee\Resources\CouponCode\CouponCode;

class ListCouponCodeResponseListObject
{ 
    public CouponCode $coupon_code;
    public function __construct(
        CouponCode $coupon_code,
    ) { 
        $this->coupon_code = $coupon_code;
    }
}
