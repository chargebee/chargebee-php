<?php

namespace Chargebee\Responses\CreditNoteResponse;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class ResendEinvoiceCreditNoteResponse extends ResponseBase { 
    /**
    *
    * @var ?CreditNote $credit_note
    */
    public ?CreditNote $credit_note;
    

    private function __construct(
        ?CreditNote $credit_note,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->credit_note = $credit_note;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['credit_note']) ? CreditNote::from($resourceAttributes['credit_note']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->credit_note instanceof CreditNote){
            $data['credit_note'] = $this->credit_note->toArray();
        } 

        return $data;
    }
}
?>