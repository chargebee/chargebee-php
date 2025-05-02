<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Transaction\Transaction;

use Chargebee\ValueObjects\ResponseBase;

class RemovePaymentInvoiceResponse extends ResponseBase { 
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
    

    private function __construct(
        ?Invoice $invoice,
        ?Transaction $transaction,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->invoice = $invoice;
        $this->transaction = $transaction;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
            
            isset($resourceAttributes['transaction']) ? Transaction::from($resourceAttributes['transaction']) : null,
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

        return $data;
    }
}
?>