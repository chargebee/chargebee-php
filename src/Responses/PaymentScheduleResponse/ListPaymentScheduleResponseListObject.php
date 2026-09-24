<?php
namespace Chargebee\Responses\PaymentScheduleResponse;

use Chargebee\Resources\PaymentSchedule\PaymentSchedule;

class ListPaymentScheduleResponseListObject
{ 
    public PaymentSchedule $payment_schedule;
    public function __construct(
        PaymentSchedule $payment_schedule,
    ) { 
        $this->payment_schedule = $payment_schedule;
    }
}
