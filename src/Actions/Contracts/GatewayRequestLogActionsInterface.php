<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\GatewayRequestLogResponse\RetrieveGatewayRequestLogResponse;
use Chargebee\Responses\GatewayRequestLogResponse\ListGatewayRequestLogResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface GatewayRequestLogActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gateway_request_logs/retrieve-a-gateway-request-log?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveGatewayRequestLogResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveGatewayRequestLogResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gateway_request_logs/list-gateway-request-logs?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     log_id?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * gateway?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * status_code?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * method?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * url?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * customer_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * invoice_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * transaction_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * payment_method_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * gateway_credential_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * payment_attempt_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * payment_intent_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * operation_name?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * operation_type?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * source?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * invocation_time?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * response_received_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListGatewayRequestLogResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListGatewayRequestLogResponse;

}
?>