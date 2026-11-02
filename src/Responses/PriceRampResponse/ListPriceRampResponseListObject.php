<?php
namespace Chargebee\Responses\PriceRampResponse;

use Chargebee\Resources\PriceRamp\PriceRamp;

class ListPriceRampResponseListObject
{ 
    public PriceRamp $price_ramp;
    public function __construct(
        PriceRamp $price_ramp,
    ) { 
        $this->price_ramp = $price_ramp;
    }
}
