<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\QuotedCharge\QuotedCharge;
use Chargebee\Resources\Quote\Quote;

use Chargebee\ValueObjects\ResponseBase;

class CreateForOnetimeChargesQuoteResponse extends ResponseBase { 
    /**
    *
    * @var ?Quote $quote
    */
    public ?Quote $quote;
    
    /**
    *
    * @var ?QuotedCharge $quoted_charge
    */
    public ?QuotedCharge $quoted_charge;
    

    private function __construct(
        ?Quote $quote,
        ?QuotedCharge $quoted_charge,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->quote = $quote;
        $this->quoted_charge = $quoted_charge;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['quote']) ? Quote::from($resourceAttributes['quote']) : null,
            
            isset($resourceAttributes['quoted_charge']) ? QuotedCharge::from($resourceAttributes['quoted_charge']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->quote instanceof Quote){
            $data['quote'] = $this->quote->toArray();
        }  
        if($this->quoted_charge instanceof QuotedCharge){
            $data['quoted_charge'] = $this->quoted_charge->toArray();
        } 

        return $data;
    }
}
?>