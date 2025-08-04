<?php
namespace Chargebee\Responses\DifferentialPriceResponse;

use Chargebee\Resources\DifferentialPrice\DifferentialPrice;

class ListDifferentialPriceResponseListObject
{ 
    public DifferentialPrice $differential_price;
    public function __construct(
        DifferentialPrice $differential_price,
    ) { 
        $this->differential_price = $differential_price;
    }
}
