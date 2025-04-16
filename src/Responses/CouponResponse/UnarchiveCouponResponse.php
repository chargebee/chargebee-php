<?php

namespace Chargebee\Responses\CouponResponse;
use Chargebee\Resources\Coupon\Coupon;

use Chargebee\ValueObjects\ResponseBase;

class UnarchiveCouponResponse extends ResponseBase { 
    /**
    *
    * @var Coupon $coupon
    */
    public Coupon $coupon;
    

    private function __construct(
        Coupon $coupon,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->coupon = $coupon;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Coupon::from($resourceAttributes['coupon']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'coupon' => $this->coupon->toArray(),
        ]);
        

        return $data;
    }
}
?>