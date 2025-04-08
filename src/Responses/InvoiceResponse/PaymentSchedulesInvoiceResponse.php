<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\PaymentSchedule\PaymentSchedule;

use Chargebee\ValueObjects\ResponseBase;

class PaymentSchedulesInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var array<PaymentSchedule> $payment_schedules
    */
    public array $payment_schedules;
    

    private function __construct(
        array $payment_schedules,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->payment_schedules = $payment_schedules;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $payment_schedules = array_map(fn (array $result): PaymentSchedule =>  PaymentSchedule::from(
            $result
        ), $resourceAttributes['payment_schedules'] );
        
        return new self($payment_schedules, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
        

        if($this->payment_schedules !== []) {
            $data['payment_schedules'] = array_map(
                fn (PaymentSchedule $payment_schedules): array => $payment_schedules->toArray(),
                $this->payment_schedules
            );
        }
        return $data;
    }
}
?>