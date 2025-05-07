<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OmnichannelSubscriptionItemResponse\ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse;

Interface OmnichannelSubscriptionItemActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscription_items?lang=php#list_scheduled_changes_for_omnichannel_subscription_item
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse
    */
    public function listOmniSubItemScheduleChanges(string $id, array $params = [], array $headers = []): ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse;

}
?>