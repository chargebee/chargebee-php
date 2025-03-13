<?php
namespace Chargebee\Actions;

use Chargebee\Responses\UsageEventResponse\BatchIngestUsageEventResponse;
use Chargebee\Responses\UsageEventResponse\CreateUsageEventResponse;
use Chargebee\ValueObjects\Encoders\JsonParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class UsageEventActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_events?lang=php#create_a_usage_event
    *   @param array{
    *     deduplication_id?: string,
    *     subscription_id?: string,
    *     usage_timestamp?: int,
    *     properties?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsageEventResponse
    */
    public function create(array $params, array $headers = []): CreateUsageEventResponse
    {
        $jsonKeys = [
            "properties" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["usage_events"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain("ingest")
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateUsageEventResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_events?lang=php#ingest_usages_in_batch
    *   @param array{
    *     events?: array<array{
    *     deduplication_id?: string,
    *     subscription_id?: string,
    *     usage_timestamp?: int,
    *     properties?: mixed,
    *     }>,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return BatchIngestUsageEventResponse
    */
    public function batchIngest(array $params, array $headers = []): BatchIngestUsageEventResponse
    {
        $jsonKeys = [
            "properties" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["batch","usage_events"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain("ingest")
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return BatchIngestUsageEventResponse::from($respObject->data, $respObject->headers);
    }

}
?>