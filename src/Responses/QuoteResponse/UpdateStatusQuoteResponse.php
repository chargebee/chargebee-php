<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\QuotedCharge\QuotedCharge;
use Chargebee\Resources\QuotedRamp\QuotedRamp;
use Chargebee\Resources\QuotedSubscription\QuotedSubscription;
use Chargebee\Resources\Quote\Quote;

use Chargebee\ValueObjects\ResponseBase;

class UpdateStatusQuoteResponse extends ResponseBase { 
    /**
    *
    * @var ?Quote $quote
    */
    public ?Quote $quote;
    
    /**
    *
    * @var ?QuotedSubscription $quoted_subscription
    */
    public ?QuotedSubscription $quoted_subscription;
    
    /**
    *
    * @var ?QuotedCharge $quoted_charge
    */
    public ?QuotedCharge $quoted_charge;
    
    /**
    *
    * @var ?QuotedRamp $quoted_ramp
    */
    public ?QuotedRamp $quoted_ramp;
    

    private function __construct(
        ?Quote $quote,
        ?QuotedSubscription $quoted_subscription,
        ?QuotedCharge $quoted_charge,
        ?QuotedRamp $quoted_ramp,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->quote = $quote;
        $this->quoted_subscription = $quoted_subscription;
        $this->quoted_charge = $quoted_charge;
        $this->quoted_ramp = $quoted_ramp;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['quote']) ? Quote::from($resourceAttributes['quote']) : null,
            
            isset($resourceAttributes['quoted_subscription']) ? QuotedSubscription::from($resourceAttributes['quoted_subscription']) : null,
            
            isset($resourceAttributes['quoted_charge']) ? QuotedCharge::from($resourceAttributes['quoted_charge']) : null,
            
            isset($resourceAttributes['quoted_ramp']) ? QuotedRamp::from($resourceAttributes['quoted_ramp']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([    
        ]);
         
        if($this->quote instanceof Quote){
            $data['quote'] = $this->quote->toArray();
        }  
        if($this->quoted_subscription instanceof QuotedSubscription){
            $data['quoted_subscription'] = $this->quoted_subscription->toArray();
        }  
        if($this->quoted_charge instanceof QuotedCharge){
            $data['quoted_charge'] = $this->quoted_charge->toArray();
        }  
        if($this->quoted_ramp instanceof QuotedRamp){
            $data['quoted_ramp'] = $this->quoted_ramp->toArray();
        } 

        return $data;
    }
}
?>