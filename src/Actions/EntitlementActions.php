<?php
namespace Chargebee\Actions;

use Chargebee\Responses\EntitlementResponse\ListEntitlementResponse;
use Chargebee\Actions\Contracts\EntitlementActionsInterface;
use Chargebee\Responses\EntitlementResponse\CreateEntitlementResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class EntitlementActions implements EntitlementActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements?lang=php#list_all_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * entity_type?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * entity_id?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * include_drafts?: bool,
    *     embed?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListEntitlementResponse
    */
    public function all(array $params = [], array $headers = []): ListEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["entitlements"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListEntitlementResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements?lang=php#upsert_or_remove_entitlements_for_a_feature
    *   @param array{
    *     entitlements?: array<array{
    *     entity_id?: string,
    *     feature_id?: string,
    *     entity_type?: string,
    *     value?: string,
    *     apply_grandfathering?: bool,
    *     }>,
    *     action?: string,
    *     change_reason?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateEntitlementResponse
    */
    public function create(array $params, array $headers = []): CreateEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["entitlements"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateEntitlementResponse::from($respObject->data, $respObject->headers);
    }

}
?>