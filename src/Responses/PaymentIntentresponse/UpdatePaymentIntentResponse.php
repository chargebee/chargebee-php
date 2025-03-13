<?php

namespace Chargebee\Responses\PaymentIntentResponse;
use Chargebee\Resources\PaymentIntent\PaymentIntent;

use Chargebee\ValueObjects\ResponseBase;

class UpdatePaymentIntentResponse extends ResponseBase { 
    /**
    *
    * @var PaymentIntent $payment_intent
    */
    public PaymentIntent $payment_intent;
    

    private function __construct(
        PaymentIntent $payment_intent,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->payment_intent = $payment_intent;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             PaymentIntent::from($resourceAttributes['payment_intent']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'payment_intent' => $this->payment_intent->toArray(),
        ]);
        

        return $data;
    }
}
?>