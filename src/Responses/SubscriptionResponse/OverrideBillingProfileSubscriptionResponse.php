<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\PaymentSource\PaymentSource;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class OverrideBillingProfileSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?Subscription $subscription
    */
    public ?Subscription $subscription;
    
    /**
    *
    * @var ?PaymentSource $payment_source
    */
    public ?PaymentSource $payment_source;
    

    private function __construct(
        ?Subscription $subscription,
        ?PaymentSource $payment_source,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->subscription = $subscription;
        $this->payment_source = $payment_source;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
            
            isset($resourceAttributes['payment_source']) ? PaymentSource::from($resourceAttributes['payment_source']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->subscription instanceof Subscription){
            $data['subscription'] = $this->subscription->toArray();
        }  
        if($this->payment_source instanceof PaymentSource){
            $data['payment_source'] = $this->payment_source->toArray();
        } 

        return $data;
    }
}
?>