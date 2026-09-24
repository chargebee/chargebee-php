<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\DisputeResponse\RetrieveDisputeResponse;
use Chargebee\Responses\DisputeResponse\ListDisputeResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface DisputeActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/disputes/retrieve-a-dispute?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveDisputeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveDisputeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/disputes/list-disputes?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * transaction_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * amount?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListDisputeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListDisputeResponse;

}
?>