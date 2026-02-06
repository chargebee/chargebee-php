<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OmnichannelSubscriptionResponse\RetrieveOmnichannelSubscriptionResponse;
use Chargebee\Responses\OmnichannelSubscriptionResponse\OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse;
use Chargebee\Responses\OmnichannelSubscriptionResponse\ListOmnichannelSubscriptionResponse;
use Chargebee\Responses\OmnichannelSubscriptionResponse\MoveOmnichannelSubscriptionResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface OmnichannelSubscriptionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions/move-an-omnichannel-subscription?lang=php-v4
    *   @param array{
    *     to_customer_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return MoveOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function move(string $id, array $params, array $headers = []): MoveOmnichannelSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions/retrieve-an-omnichannel-subscription?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveOmnichannelSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions/list-omnichannel-transactions-of-an-omnichannel-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function omnichannelTransactionsForOmnichannelSubscription(string $id, array $params = [], array $headers = []): OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions/list-omnichannel-subscriptions?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     omnichannel_subscription_item?: array{
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     item_id_at_source?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * source?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListOmnichannelSubscriptionResponse;

}
?>