<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\CpqQuoteSignature\CpqQuoteSignature;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveSignatureQuoteResponse extends ResponseBase { 
    /**
    *
    * @var ?CpqQuoteSignature $cpq_quote_signature
    */
    public ?CpqQuoteSignature $cpq_quote_signature;
    

    private function __construct(
        ?CpqQuoteSignature $cpq_quote_signature,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->cpq_quote_signature = $cpq_quote_signature;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['cpq_quote_signature']) ? CpqQuoteSignature::from($resourceAttributes['cpq_quote_signature']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->cpq_quote_signature instanceof CpqQuoteSignature){
            $data['cpq_quote_signature'] = $this->cpq_quote_signature->toArray();
        } 

        return $data;
    }
}
?>