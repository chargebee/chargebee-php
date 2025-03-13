<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;

use Chargebee\ValueObjects\ResponseBase;

class ChargeInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var Invoice $invoice
    */
    public Invoice $invoice;
    

    private function __construct(
        Invoice $invoice,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->invoice = $invoice;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Invoice::from($resourceAttributes['invoice']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'invoice' => $this->invoice->toArray(),
        ]);
        

        return $data;
    }
}
?>