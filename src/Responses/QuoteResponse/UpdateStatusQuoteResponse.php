<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\QuotedCharge\QuotedCharge;
use Chargebee\Resources\QuotedSubscription\QuotedSubscription;
use Chargebee\Resources\Quote\Quote;

use Chargebee\ValueObjects\ResponseBase;

class UpdateStatusQuoteResponse extends ResponseBase { 
    /**
    *
    * @var Quote $quote
    */
    public Quote $quote;
    
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
    

    private function __construct(
        Quote $quote,
        ?QuotedSubscription $quoted_subscription,
        ?QuotedCharge $quoted_charge,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->quote = $quote;
        $this->quoted_subscription = $quoted_subscription;
        $this->quoted_charge = $quoted_charge;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Quote::from($resourceAttributes['quote']),
            isset($resourceAttributes['quoted_subscription']) ? QuotedSubscription::from($resourceAttributes['quoted_subscription']) : null,
            
            isset($resourceAttributes['quoted_charge']) ? QuotedCharge::from($resourceAttributes['quoted_charge']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'quote' => $this->quote->toArray(),  
        ]);
         
        if($this->quoted_subscription instanceof QuotedSubscription){
            $data['quoted_subscription'] = $this->quoted_subscription->toArray();
        }  
        if($this->quoted_charge instanceof QuotedCharge){
            $data['quoted_charge'] = $this->quoted_charge->toArray();
        } 

        return $data;
    }
}
?>