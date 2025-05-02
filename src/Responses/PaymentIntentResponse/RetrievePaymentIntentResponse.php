<?php

namespace Chargebee\Responses\PaymentIntentResponse;
use Chargebee\Resources\PaymentIntent\PaymentIntent;

use Chargebee\ValueObjects\ResponseBase;

class RetrievePaymentIntentResponse extends ResponseBase { 
    /**
    *
    * @var ?PaymentIntent $payment_intent
    */
    public ?PaymentIntent $payment_intent;
    

    private function __construct(
        ?PaymentIntent $payment_intent,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->payment_intent = $payment_intent;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['payment_intent']) ? PaymentIntent::from($resourceAttributes['payment_intent']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->payment_intent instanceof PaymentIntent){
            $data['payment_intent'] = $this->payment_intent->toArray();
        } 

        return $data;
    }
}
?>