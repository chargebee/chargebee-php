<?php
namespace Chargebee\Responses\OmnichannelSubscriptionItemResponse;

use Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\OmnichannelSubscriptionItemScheduledChange;

class ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponseListObject
{ 
    public OmnichannelSubscriptionItemScheduledChange $omnichannel_subscription_item_scheduled_change;
    public function __construct(
        OmnichannelSubscriptionItemScheduledChange $omnichannel_subscription_item_scheduled_change,
    ) { 
        $this->omnichannel_subscription_item_scheduled_change = $omnichannel_subscription_item_scheduled_change;
    }
}
