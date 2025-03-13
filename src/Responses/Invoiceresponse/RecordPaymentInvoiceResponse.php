<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Transaction\Transaction;

use Chargebee\ValueObjects\ResponseBase;

class RecordPaymentInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var Invoice $invoice
    */
    public Invoice $invoice;
    
    /**
    *
    * @var Transaction $transaction
    */
    public Transaction $transaction;
    

    private function __construct(
        Invoice $invoice,
        Transaction $transaction,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->invoice = $invoice;
        $this->transaction = $transaction;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Invoice::from($resourceAttributes['invoice']),
             Transaction::from($resourceAttributes['transaction']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'invoice' => $this->invoice->toArray(), 
            'transaction' => $this->transaction->toArray(),
        ]);
        

        return $data;
    }
}
?>