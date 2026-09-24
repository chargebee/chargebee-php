<?php
namespace Chargebee\Responses\PaymentScheduleSchemeResponse;

use Chargebee\Resources\PaymentScheduleScheme\PaymentScheduleScheme;

class ListPaymentScheduleSchemeResponseListObject
{ 
    public PaymentScheduleScheme $payment_schedule_scheme;
    public function __construct(
        PaymentScheduleScheme $payment_schedule_scheme,
    ) { 
        $this->payment_schedule_scheme = $payment_schedule_scheme;
    }
}
