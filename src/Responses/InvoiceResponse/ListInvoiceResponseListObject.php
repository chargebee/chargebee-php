<?php
namespace Chargebee\Responses\InvoiceResponse;

use Chargebee\Resources\Invoice\Invoice;

class ListInvoiceResponseListObject
{ 
    public Invoice $invoice;
    public function __construct(
        Invoice $invoice,
    ) { 
        $this->invoice = $invoice;
    }
}
