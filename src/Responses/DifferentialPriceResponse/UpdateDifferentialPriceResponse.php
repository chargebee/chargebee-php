<?php

namespace Chargebee\Responses\DifferentialPriceResponse;
use Chargebee\Resources\DifferentialPrice\DifferentialPrice;

use Chargebee\ValueObjects\ResponseBase;

class UpdateDifferentialPriceResponse extends ResponseBase { 
    /**
    *
    * @var DifferentialPrice $differential_price
    */
    public DifferentialPrice $differential_price;
    

    private function __construct(
        DifferentialPrice $differential_price,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->differential_price = $differential_price;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             DifferentialPrice::from($resourceAttributes['differential_price']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'differential_price' => $this->differential_price->toArray(),
        ]);
        

        return $data;
    }
}
?>