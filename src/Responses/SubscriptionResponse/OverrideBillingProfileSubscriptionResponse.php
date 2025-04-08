<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\PaymentSource\PaymentSource;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class OverrideBillingProfileSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var Subscription $subscription
    */
    public Subscription $subscription;
    
    /**
    *
    * @var ?PaymentSource $payment_source
    */
    public ?PaymentSource $payment_source;
    

    private function __construct(
        Subscription $subscription,
        ?PaymentSource $payment_source,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->subscription = $subscription;
        $this->payment_source = $payment_source;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Subscription::from($resourceAttributes['subscription']),
            isset($resourceAttributes['payment_source']) ? PaymentSource::from($resourceAttributes['payment_source']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'subscription' => $this->subscription->toArray(), 
        ]);
         
        if($this->payment_source instanceof PaymentSource){
            $data['payment_source'] = $this->payment_source->toArray();
        } 

        return $data;
    }
}
?>