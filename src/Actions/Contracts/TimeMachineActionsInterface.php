<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\TimeMachineResponse\TravelForwardTimeMachineResponse;
use Chargebee\Responses\TimeMachineResponse\RetrieveTimeMachineResponse;
use Chargebee\Responses\TimeMachineResponse\StartAfreshTimeMachineResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface TimeMachineActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/time_machines?lang=php#retrieve_a_time_machine
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveTimeMachineResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveTimeMachineResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/time_machines?lang=php#travel_forward
    *   @param array{
    *     destination_time?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return TravelForwardTimeMachineResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function travelForward(string $id, array $params = [], array $headers = []): TravelForwardTimeMachineResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/time_machines?lang=php#start_afresh
    *   @param array{
    *     genesis_time?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return StartAfreshTimeMachineResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function startAfresh(string $id, array $params = [], array $headers = []): StartAfreshTimeMachineResponse;

}
?>