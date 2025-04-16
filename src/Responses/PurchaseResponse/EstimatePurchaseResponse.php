<?php

namespace Chargebee\Responses\PurchaseResponse;
use Chargebee\Resources\Estimate\Estimate;

use Chargebee\ValueObjects\ResponseBase;

class EstimatePurchaseResponse extends ResponseBase { 
    /**
    *
    * @var Estimate $estimate
    */
    public Estimate $estimate;
    

    private function __construct(
        Estimate $estimate,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->estimate = $estimate;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Estimate::from($resourceAttributes['estimate']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'estimate' => $this->estimate->toArray(),
        ]);
        

        return $data;
    }
}
?>