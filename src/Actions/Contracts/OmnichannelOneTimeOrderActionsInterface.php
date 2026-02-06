<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OmnichannelOneTimeOrderResponse\RetrieveOmnichannelOneTimeOrderResponse;
use Chargebee\Responses\OmnichannelOneTimeOrderResponse\ListOmnichannelOneTimeOrderResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface OmnichannelOneTimeOrderActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_one_time_orders/list-omnichannel-one-time-orders?lang=php-v4
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
    *   @return ListOmnichannelOneTimeOrderResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListOmnichannelOneTimeOrderResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_one_time_orders/retrieve-an-omnichannel-one-time-order?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOmnichannelOneTimeOrderResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveOmnichannelOneTimeOrderResponse;

}
?>