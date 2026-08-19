<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\MeterResponse\ListMeterResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface MeterActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/meters/list-all-available-meters?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     name?: array{
    *     is?: mixed,
    *     starts_with?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListMeterResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListMeterResponse;

}
?>