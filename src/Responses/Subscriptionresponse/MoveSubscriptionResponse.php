<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class MoveSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var Subscription $subscription
    */
    public Subscription $subscription;
    

    private function __construct(
        Subscription $subscription,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->subscription = $subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Subscription::from($resourceAttributes['subscription']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'subscription' => $this->subscription->toArray(),
        ]);
        

        return $data;
    }
}
?>