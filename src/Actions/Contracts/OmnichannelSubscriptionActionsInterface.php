<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OmnichannelSubscriptionResponse\RetrieveOmnichannelSubscriptionResponse;
use Chargebee\Responses\OmnichannelSubscriptionResponse\OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse;
use Chargebee\Responses\OmnichannelSubscriptionResponse\ListOmnichannelSubscriptionResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface OmnichannelSubscriptionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions?lang=php#retrieve_an_omnichannel_subscription
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveOmnichannelSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions?lang=php#list_omnichannel_transactions_of_an_omnichannel_subscription
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function omnichannelTransactionsForOmnichannelSubscription(string $id, array $params = [], array $headers = []): OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions?lang=php#list_omnichannel_subscriptions
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     source?: array{
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
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $params = [], array $headers = []): ListOmnichannelSubscriptionResponse;

}
?>