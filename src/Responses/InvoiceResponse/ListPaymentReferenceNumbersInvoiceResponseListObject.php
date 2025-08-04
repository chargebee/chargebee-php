<?php
namespace Chargebee\Responses\InvoiceResponse;

use Chargebee\Resources\PaymentReferenceNumber\PaymentReferenceNumber;

class ListPaymentReferenceNumbersInvoiceResponseListObject
{ 
    public PaymentReferenceNumber $payment_reference_number;
    public function __construct(
        PaymentReferenceNumber $payment_reference_number,
    ) { 
        $this->payment_reference_number = $payment_reference_number;
    }
}
