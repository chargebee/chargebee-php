<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class ImportInvoiceInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var Invoice $invoice
    */
    public Invoice $invoice;
    
    /**
    *
    * @var ?CreditNote $credit_note
    */
    public ?CreditNote $credit_note;
    

    private function __construct(
        Invoice $invoice,
        ?CreditNote $credit_note,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->invoice = $invoice;
        $this->credit_note = $credit_note;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Invoice::from($resourceAttributes['invoice']),
            isset($resourceAttributes['credit_note']) ? CreditNote::from($resourceAttributes['credit_note']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'invoice' => $this->invoice->toArray(), 
        ]);
         
        if($this->credit_note instanceof CreditNote){
            $data['credit_note'] = $this->credit_note->toArray();
        } 

        return $data;
    }
}
?>