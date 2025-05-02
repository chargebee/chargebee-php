<?php

namespace Chargebee\Responses\PricingPageSessionResponse;
use Chargebee\Resources\PricingPageSession\PricingPageSession;

use Chargebee\ValueObjects\ResponseBase;

class CreateForExistingSubscriptionPricingPageSessionResponse extends ResponseBase { 
    /**
    *
    * @var ?PricingPageSession $pricing_page_session
    */
    public ?PricingPageSession $pricing_page_session;
    

    private function __construct(
        ?PricingPageSession $pricing_page_session,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->pricing_page_session = $pricing_page_session;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['pricing_page_session']) ? PricingPageSession::from($resourceAttributes['pricing_page_session']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->pricing_page_session instanceof PricingPageSession){
            $data['pricing_page_session'] = $this->pricing_page_session->toArray();
        } 

        return $data;
    }
}
?>