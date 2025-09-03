<?php
namespace Chargebee\Responses\PaymentSourceResponse;

use Chargebee\Resources\PaymentSource\PaymentSource;

class ListPaymentSourceResponseListObject
{ 
    public PaymentSource $payment_source;
    public function __construct(
        PaymentSource $payment_source,
    ) { 
        $this->payment_source = $payment_source;
    }
}
