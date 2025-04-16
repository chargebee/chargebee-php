<?php

namespace Chargebee\Responses\CreditNoteResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class CreateCreditNoteResponse extends ResponseBase { 
    /**
    *
    * @var CreditNote $credit_note
    */
    public CreditNote $credit_note;
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    

    private function __construct(
        CreditNote $credit_note,
        ?Invoice $invoice,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->credit_note = $credit_note;
        $this->invoice = $invoice;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             CreditNote::from($resourceAttributes['credit_note']),
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'credit_note' => $this->credit_note->toArray(), 
        ]);
         
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        } 

        return $data;
    }
}
?>