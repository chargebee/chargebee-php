<?php

namespace Chargebee\Responses\InAppSubscriptionResponse;
use Chargebee\Resources\InAppSubscription\InAppSubscription;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveStoreSubsInAppSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var array<InAppSubscription> $in_app_subscriptions
    */
    public array $in_app_subscriptions;
    

    private function __construct(
        array $in_app_subscriptions,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->in_app_subscriptions = $in_app_subscriptions;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $in_app_subscriptions = array_map(fn (array $result): InAppSubscription =>  InAppSubscription::from(
            $result
        ), $resourceAttributes['in_app_subscriptions'] );
        
        return new self($in_app_subscriptions, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
        

        if($this->in_app_subscriptions !== []) {
            $data['in_app_subscriptions'] = array_map(
                fn (InAppSubscription $in_app_subscriptions): array => $in_app_subscriptions->toArray(),
                $this->in_app_subscriptions
            );
        }
        return $data;
    }
}
?>