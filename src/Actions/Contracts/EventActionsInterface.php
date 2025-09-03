<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EventResponse\RetrieveEventResponse;
use Chargebee\Responses\EventResponse\ListEventResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface EventActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/events?lang=php#list_events
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     start_time?: int,
    *     end_time?: int,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * webhook_status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * event_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * source?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * occurred_at?: array{
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
    *   @return ListEventResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListEventResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/events?lang=php#retrieve_an_event
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveEventResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveEventResponse;

}
?>