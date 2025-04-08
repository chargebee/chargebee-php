<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\QuotedCharge\QuotedCharge;
use Chargebee\Resources\Quote\Quote;

use Chargebee\ValueObjects\ResponseBase;

class CreateForOnetimeChargesQuoteResponse extends ResponseBase { 
    /**
    *
    * @var Quote $quote
    */
    public Quote $quote;
    
    /**
    *
    * @var ?QuotedCharge $quoted_charge
    */
    public ?QuotedCharge $quoted_charge;
    

    private function __construct(
        Quote $quote,
        ?QuotedCharge $quoted_charge,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->quote = $quote;
        $this->quoted_charge = $quoted_charge;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Quote::from($resourceAttributes['quote']),
            isset($resourceAttributes['quoted_charge']) ? QuotedCharge::from($resourceAttributes['quoted_charge']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'quote' => $this->quote->toArray(), 
        ]);
         
        if($this->quoted_charge instanceof QuotedCharge){
            $data['quoted_charge'] = $this->quoted_charge->toArray();
        } 

        return $data;
    }
}
?>