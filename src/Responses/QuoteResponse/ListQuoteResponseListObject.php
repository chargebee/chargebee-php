<?php
namespace Chargebee\Responses\QuoteResponse;

use Chargebee\Resources\Quote\Quote;
use Chargebee\Resources\QuotedSubscription\QuotedSubscription;
use Chargebee\Resources\QuotedRamp\QuotedRamp;

class ListQuoteResponseListObject
{ 
    public Quote $quote;

    public ?QuotedSubscription $quoted_subscription;

    public ?QuotedRamp $quoted_ramp;
    public function __construct(
        Quote $quote,
    
        ?QuotedSubscription $quoted_subscription,
    
        ?QuotedRamp $quoted_ramp,
    ) { 
        $this->quote = $quote;
        $this->quoted_subscription = $quoted_subscription;
        $this->quoted_ramp = $quoted_ramp;
    }
}
