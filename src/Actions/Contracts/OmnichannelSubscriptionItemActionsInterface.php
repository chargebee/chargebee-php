<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OmnichannelSubscriptionItemResponse\ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listOmniSubItemScheduleChanges(string $id, array $params = [], array $headers = []): ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse;

}
?>