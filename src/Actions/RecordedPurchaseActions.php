<?php
namespace Chargebee\Actions;

use Chargebee\Responses\RecordedPurchaseResponse\RetrieveRecordedPurchaseResponse;
use Chargebee\Responses\RecordedPurchaseResponse\CreateRecordedPurchaseResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class RecordedPurchaseActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#retrieve_a_recorded_purchase
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRecordedPurchaseResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveRecordedPurchaseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["recorded_purchases",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveRecordedPurchaseResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#record_a_purchase
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     },
    * apple_app_store?: array{
    *     transaction_id?: string,
    *     receipt?: string,
    *     product_id?: string,
    *     },
    * google_play_store?: array{
    *     purchase_token?: string,
    *     },
    * app_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateRecordedPurchaseResponse
    */
    public function create(array $params, array $headers = []): CreateRecordedPurchaseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["recorded_purchases"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateRecordedPurchaseResponse::from($respObject->data, $respObject->headers);
    }

}
?>