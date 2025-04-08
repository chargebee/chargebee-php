<?php

namespace Chargebee\Responses\PricingPageSessionResponse;
use Chargebee\Resources\PricingPageSession\PricingPageSession;

use Chargebee\ValueObjects\ResponseBase;

class CreateForNewSubscriptionPricingPageSessionResponse extends ResponseBase { 
    /**
    *
    * @var PricingPageSession $pricing_page_session
    */
    public PricingPageSession $pricing_page_session;
    

    private function __construct(
        PricingPageSession $pricing_page_session,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->pricing_page_session = $pricing_page_session;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             PricingPageSession::from($resourceAttributes['pricing_page_session']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'pricing_page_session' => $this->pricing_page_session->toArray(),
        ]);
        

        return $data;
    }
}
?>