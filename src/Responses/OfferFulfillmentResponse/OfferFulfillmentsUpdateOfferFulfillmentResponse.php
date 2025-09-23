<?php

namespace Chargebee\Responses\OfferFulfillmentResponse;
use Chargebee\Resources\OfferFulfillment\OfferFulfillment;

use Chargebee\ValueObjects\ResponseBase;

class OfferFulfillmentsUpdateOfferFulfillmentResponse extends ResponseBase { 
    /**
    *
    * @var ?OfferFulfillment $offer_fulfillment
    */
    public ?OfferFulfillment $offer_fulfillment;
    

    private function __construct(
        ?OfferFulfillment $offer_fulfillment,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->offer_fulfillment = $offer_fulfillment;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['offer_fulfillment']) ? OfferFulfillment::from($resourceAttributes['offer_fulfillment']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->offer_fulfillment instanceof OfferFulfillment){
            $data['offer_fulfillment'] = $this->offer_fulfillment->toArray();
        } 

        return $data;
    }
}
?>