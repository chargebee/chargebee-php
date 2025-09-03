<?php
namespace Chargebee\Responses\PriceVariantResponse;

use Chargebee\Resources\PriceVariant\PriceVariant;

class ListPriceVariantResponseListObject
{ 
    public PriceVariant $price_variant;
    public function __construct(
        PriceVariant $price_variant,
    ) { 
        $this->price_variant = $price_variant;
    }
}
