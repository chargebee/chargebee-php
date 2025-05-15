<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\TimeMachineResponse\TravelForwardTimeMachineResponse;
use Chargebee\Responses\TimeMachineResponse\RetrieveTimeMachineResponse;
use Chargebee\Responses\TimeMachineResponse\StartAfreshTimeMachineResponse;

Interface TimeMachineActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/time_machines?lang=php#retrieve_a_time_machine
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveTimeMachineResponse
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
    */
    public function startAfresh(string $id, array $params = [], array $headers = []): StartAfreshTimeMachineResponse;

}
?>