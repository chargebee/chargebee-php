<?php

namespace Chargebee\Responses\PriceVariantResponse;
use Chargebee\Resources\PriceVariant\PriceVariant;

use Chargebee\ValueObjects\ResponseBase;

class DeletePriceVariantResponse extends ResponseBase { 
    /**
    *
    * @var ?PriceVariant $price_variant
    */
    public ?PriceVariant $price_variant;
    

    private function __construct(
        ?PriceVariant $price_variant,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->price_variant = $price_variant;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['price_variant']) ? PriceVariant::from($resourceAttributes['price_variant']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->price_variant instanceof PriceVariant){
            $data['price_variant'] = $this->price_variant->toArray();
        } 

        return $data;
    }
}
?>