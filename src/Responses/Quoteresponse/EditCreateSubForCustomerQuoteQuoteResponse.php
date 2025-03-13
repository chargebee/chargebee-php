<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\QuotedSubscription\QuotedSubscription;
use Chargebee\Resources\Quote\Quote;

use Chargebee\ValueObjects\ResponseBase;

class EditCreateSubForCustomerQuoteQuoteResponse extends ResponseBase { 
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
    

    private function __construct(
        Quote $quote,
        ?QuotedSubscription $quoted_subscription,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->quote = $quote;
        $this->quoted_subscription = $quoted_subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Quote::from($resourceAttributes['quote']),
            isset($resourceAttributes['quoted_subscription']) ? QuotedSubscription::from($resourceAttributes['quoted_subscription']) : null,
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

        return $data;
    }
}
?>