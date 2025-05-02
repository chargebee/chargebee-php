<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Transaction\Transaction;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class RecordRefundInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    
    /**
    *
    * @var ?Transaction $transaction
    */
    public ?Transaction $transaction;
    
    /**
    *
    * @var ?CreditNote $credit_note
    */
    public ?CreditNote $credit_note;
    

    private function __construct(
        ?Invoice $invoice,
        ?Transaction $transaction,
        ?CreditNote $credit_note,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->invoice = $invoice;
        $this->transaction = $transaction;
        $this->credit_note = $credit_note;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
            
            isset($resourceAttributes['transaction']) ? Transaction::from($resourceAttributes['transaction']) : null,
            
            isset($resourceAttributes['credit_note']) ? CreditNote::from($resourceAttributes['credit_note']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([   
        ]);
         
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        }  
        if($this->transaction instanceof Transaction){
            $data['transaction'] = $this->transaction->toArray();
        }  
        if($this->credit_note instanceof CreditNote){
            $data['credit_note'] = $this->credit_note->toArray();
        } 

        return $data;
    }
}
?>