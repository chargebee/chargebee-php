<?php
namespace Chargebee\Responses\SubscriptionResponse;

use Chargebee\Resources\Subscription\Subscription;

class SubscriptionsForCustomerSubscriptionResponseListObject
{ 
    public Subscription $subscription;
    public function __construct(
        Subscription $subscription,
    ) { 
        $this->subscription = $subscription;
    }
}
