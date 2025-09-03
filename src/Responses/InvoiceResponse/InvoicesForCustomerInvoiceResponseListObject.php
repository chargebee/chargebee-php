<?php
namespace Chargebee\Responses\InvoiceResponse;

use Chargebee\Resources\Invoice\Invoice;

class InvoicesForCustomerInvoiceResponseListObject
{ 
    public Invoice $invoice;
    public function __construct(
        Invoice $invoice,
    ) { 
        $this->invoice = $invoice;
    }
}
