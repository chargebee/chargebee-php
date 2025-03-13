<?php

namespace Chargebee\Responses\SubscriptionEntitlementResponse;
use Chargebee\Resources\SubscriptionEntitlement\SubscriptionEntitlement;

use Chargebee\ValueObjects\ResponseBase;

class SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var SubscriptionEntitlement $subscription_entitlement
    */
    public SubscriptionEntitlement $subscription_entitlement;
    

    private function __construct(
        SubscriptionEntitlement $subscription_entitlement,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->subscription_entitlement = $subscription_entitlement;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             SubscriptionEntitlement::from($resourceAttributes['subscription_entitlement']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'subscription_entitlement' => $this->subscription_entitlement->toArray(),
        ]);
        

        return $data;
    }
}
?>