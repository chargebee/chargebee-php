<?php

namespace Chargebee\Responses\SubscriptionEntitlementResponse;
use Chargebee\Resources\SubscriptionEntitlement\SubscriptionEntitlement;

use Chargebee\ValueObjects\ResponseBase;

class SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var ?SubscriptionEntitlement $subscription_entitlement
    */
    public ?SubscriptionEntitlement $subscription_entitlement;
    

    private function __construct(
        ?SubscriptionEntitlement $subscription_entitlement,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->subscription_entitlement = $subscription_entitlement;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['subscription_entitlement']) ? SubscriptionEntitlement::from($resourceAttributes['subscription_entitlement']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->subscription_entitlement instanceof SubscriptionEntitlement){
            $data['subscription_entitlement'] = $this->subscription_entitlement->toArray();
        } 

        return $data;
    }
}
?>