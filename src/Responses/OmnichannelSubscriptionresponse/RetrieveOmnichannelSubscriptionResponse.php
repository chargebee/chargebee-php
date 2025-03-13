<?php

namespace Chargebee\Responses\OmnichannelSubscriptionResponse;
use Chargebee\Resources\OmnichannelSubscription\OmnichannelSubscription;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveOmnichannelSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var OmnichannelSubscription $omnichannel_subscription
    */
    public OmnichannelSubscription $omnichannel_subscription;
    

    private function __construct(
        OmnichannelSubscription $omnichannel_subscription,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->omnichannel_subscription = $omnichannel_subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             OmnichannelSubscription::from($resourceAttributes['omnichannel_subscription']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'omnichannel_subscription' => $this->omnichannel_subscription->toArray(),
        ]);
        

        return $data;
    }
}
?>