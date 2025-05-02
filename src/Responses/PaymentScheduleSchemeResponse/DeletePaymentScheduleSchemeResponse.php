<?php

namespace Chargebee\Responses\PaymentScheduleSchemeResponse;
use Chargebee\Resources\PaymentScheduleScheme\PaymentScheduleScheme;

use Chargebee\ValueObjects\ResponseBase;

class DeletePaymentScheduleSchemeResponse extends ResponseBase { 
    /**
    *
    * @var ?PaymentScheduleScheme $payment_schedule_scheme
    */
    public ?PaymentScheduleScheme $payment_schedule_scheme;
    

    private function __construct(
        ?PaymentScheduleScheme $payment_schedule_scheme,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->payment_schedule_scheme = $payment_schedule_scheme;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['payment_schedule_scheme']) ? PaymentScheduleScheme::from($resourceAttributes['payment_schedule_scheme']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->payment_schedule_scheme instanceof PaymentScheduleScheme){
            $data['payment_schedule_scheme'] = $this->payment_schedule_scheme->toArray();
        } 

        return $data;
    }
}
?>