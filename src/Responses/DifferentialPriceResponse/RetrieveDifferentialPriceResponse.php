<?php

namespace Chargebee\Responses\DifferentialPriceResponse;
use Chargebee\Resources\DifferentialPrice\DifferentialPrice;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveDifferentialPriceResponse extends ResponseBase { 
    /**
    *
    * @var ?DifferentialPrice $differential_price
    */
    public ?DifferentialPrice $differential_price;
    

    private function __construct(
        ?DifferentialPrice $differential_price,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->differential_price = $differential_price;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['differential_price']) ? DifferentialPrice::from($resourceAttributes['differential_price']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->differential_price instanceof DifferentialPrice){
            $data['differential_price'] = $this->differential_price->toArray();
        } 

        return $data;
    }
}
?>