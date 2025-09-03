<?php
namespace Chargebee\Responses\SubscriptionResponse;

use Chargebee\Resources\Discount\Discount;

class ListDiscountsSubscriptionResponseListObject
{ 
    public Discount $discount;
    public function __construct(
        Discount $discount,
    ) { 
        $this->discount = $discount;
    }
}
