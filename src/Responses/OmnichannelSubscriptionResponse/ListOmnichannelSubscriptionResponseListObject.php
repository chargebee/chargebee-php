<?php
namespace Chargebee\Responses\OmnichannelSubscriptionResponse;

use Chargebee\Resources\OmnichannelSubscription\OmnichannelSubscription;

class ListOmnichannelSubscriptionResponseListObject
{ 
    public OmnichannelSubscription $omnichannel_subscription;
    public function __construct(
        OmnichannelSubscription $omnichannel_subscription,
    ) { 
        $this->omnichannel_subscription = $omnichannel_subscription;
    }
}
