<?php

namespace Chargebee\Responses\PriceVariantResponse;
use Chargebee\Resources\PriceVariant\PriceVariant;

use Chargebee\ValueObjects\ResponseBase;

class UpdatePriceVariantResponse extends ResponseBase { 
    /**
    *
    * @var PriceVariant $price_variant
    */
    public PriceVariant $price_variant;
    

    private function __construct(
        PriceVariant $price_variant,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->price_variant = $price_variant;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             PriceVariant::from($resourceAttributes['price_variant']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'price_variant' => $this->price_variant->toArray(),
        ]);
        

        return $data;
    }
}
?>