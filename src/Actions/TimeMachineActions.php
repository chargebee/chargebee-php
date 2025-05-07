<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\TimeMachineActionsInterface;
use Chargebee\Responses\TimeMachineResponse\TravelForwardTimeMachineResponse;
use Chargebee\Responses\TimeMachineResponse\RetrieveTimeMachineResponse;
use Chargebee\Responses\TimeMachineResponse\StartAfreshTimeMachineResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class TimeMachineActions implements TimeMachineActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/time_machines?lang=php#retrieve_a_time_machine
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveTimeMachineResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveTimeMachineResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["time_machines",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveTimeMachineResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/time_machines?lang=php#travel_forward
    *   @param array{
    *     destination_time?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return TravelForwardTimeMachineResponse
    */
    public function travelForward(string $id, array $params = [], array $headers = []): TravelForwardTimeMachineResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["time_machines",$id,"travel_forward"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return TravelForwardTimeMachineResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/time_machines?lang=php#start_afresh
    *   @param array{
    *     genesis_time?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return StartAfreshTimeMachineResponse
    */
    public function startAfresh(string $id, array $params = [], array $headers = []): StartAfreshTimeMachineResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["time_machines",$id,"start_afresh"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return StartAfreshTimeMachineResponse::from($respObject->data, $respObject->headers);
    }

}
?>