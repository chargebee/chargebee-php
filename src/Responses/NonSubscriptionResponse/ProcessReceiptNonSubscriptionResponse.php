<?php

namespace Chargebee\Responses\NonSubscriptionResponse;
use Chargebee\Resources\NonSubscription\NonSubscription;

use Chargebee\ValueObjects\ResponseBase;

class ProcessReceiptNonSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var NonSubscription $non_subscription
    */
    public NonSubscription $non_subscription;
    

    private function __construct(
        NonSubscription $non_subscription,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->non_subscription = $non_subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             NonSubscription::from($resourceAttributes['non_subscription']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'non_subscription' => $this->non_subscription->toArray(),
        ]);
        

        return $data;
    }
}
?>