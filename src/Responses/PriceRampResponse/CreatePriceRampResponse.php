<?php

namespace Chargebee\Responses\PriceRampResponse;
use Chargebee\Resources\PriceRamp\PriceRamp;

use Chargebee\ValueObjects\ResponseBase;

class CreatePriceRampResponse extends ResponseBase { 
    /**
    *
    * @var ?PriceRamp $price_ramp
    */
    public ?PriceRamp $price_ramp;
    

    private function __construct(
        ?PriceRamp $price_ramp,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->price_ramp = $price_ramp;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['price_ramp']) ? PriceRamp::from($resourceAttributes['price_ramp']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->price_ramp instanceof PriceRamp){
            $data['price_ramp'] = $this->price_ramp->toArray();
        } 

        return $data;
    }
}
?>