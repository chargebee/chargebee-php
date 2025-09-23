<?php

namespace Chargebee\Responses\OfferFulfillmentResponse;
use Chargebee\Resources\OfferFulfillment\OfferFulfillment;
use Chargebee\Resources\HostedPage\HostedPage;

use Chargebee\ValueObjects\ResponseBase;

class OfferFulfillmentsOfferFulfillmentResponse extends ResponseBase { 
    /**
    *
    * @var ?OfferFulfillment $offer_fulfillment
    */
    public ?OfferFulfillment $offer_fulfillment;
    
    /**
    *
    * @var ?HostedPage $hosted_page
    */
    public ?HostedPage $hosted_page;
    

    private function __construct(
        ?OfferFulfillment $offer_fulfillment,
        ?HostedPage $hosted_page,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->offer_fulfillment = $offer_fulfillment;
        $this->hosted_page = $hosted_page;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['offer_fulfillment']) ? OfferFulfillment::from($resourceAttributes['offer_fulfillment']) : null,
            
            isset($resourceAttributes['hosted_page']) ? HostedPage::from($resourceAttributes['hosted_page']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->offer_fulfillment instanceof OfferFulfillment){
            $data['offer_fulfillment'] = $this->offer_fulfillment->toArray();
        }  
        if($this->hosted_page instanceof HostedPage){
            $data['hosted_page'] = $this->hosted_page->toArray();
        } 

        return $data;
    }
}
?>