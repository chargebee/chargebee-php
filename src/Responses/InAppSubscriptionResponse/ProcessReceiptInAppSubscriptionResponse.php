<?php

namespace Chargebee\Responses\InAppSubscriptionResponse;
use Chargebee\Resources\InAppSubscription\InAppSubscription;

use Chargebee\ValueObjects\ResponseBase;

class ProcessReceiptInAppSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var InAppSubscription $in_app_subscription
    */
    public InAppSubscription $in_app_subscription;
    

    private function __construct(
        InAppSubscription $in_app_subscription,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->in_app_subscription = $in_app_subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             InAppSubscription::from($resourceAttributes['in_app_subscription']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'in_app_subscription' => $this->in_app_subscription->toArray(),
        ]);
        

        return $data;
    }
}
?>