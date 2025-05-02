<?php

namespace Chargebee\Responses\CreditNoteResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class CreateCreditNoteResponse extends ResponseBase { 
    /**
    *
    * @var ?CreditNote $credit_note
    */
    public ?CreditNote $credit_note;
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    

    private function __construct(
        ?CreditNote $credit_note,
        ?Invoice $invoice,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->credit_note = $credit_note;
        $this->invoice = $invoice;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['credit_note']) ? CreditNote::from($resourceAttributes['credit_note']) : null,
            
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->credit_note instanceof CreditNote){
            $data['credit_note'] = $this->credit_note->toArray();
        }  
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        } 

        return $data;
    }
}
?>