<?php
namespace Chargebee\Actions;

use Chargebee\Responses\OmnichannelOneTimeOrderResponse\RetrieveOmnichannelOneTimeOrderResponse;
use Chargebee\Responses\OmnichannelOneTimeOrderResponse\ListOmnichannelOneTimeOrderResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Actions\Contracts\OmnichannelOneTimeOrderActionsInterface;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class OmnichannelOneTimeOrderActions implements OmnichannelOneTimeOrderActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_one_time_orders?lang=php#list_omnichannel_one_time_orders
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
    */
    public function all(array $params = [], array $headers = []): ListOmnichannelOneTimeOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["omnichannel_one_time_orders"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListOmnichannelOneTimeOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_one_time_orders?lang=php#retrieve_an_omnichannel_one_time_order
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOmnichannelOneTimeOrderResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveOmnichannelOneTimeOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["omnichannel_one_time_orders",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveOmnichannelOneTimeOrderResponse::from($respObject->data, $respObject->headers);
    }

}
?>