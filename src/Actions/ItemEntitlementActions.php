<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\ItemEntitlementActionsInterface;
use Chargebee\Responses\ItemEntitlementResponse\ItemEntitlementsForItemItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\AddItemEntitlementsItemEntitlementResponse;
use Chargebee\Responses\ItemEntitlementResponse\ItemEntitlementsForFeatureItemEntitlementResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

final class ItemEntitlementActions implements ItemEntitlementActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#list_item_entitlements_for_a_feature
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ItemEntitlementsForFeatureItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function itemEntitlementsForFeature(string $id, array $params = [], array $headers = []): ItemEntitlementsForFeatureItemEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["features",$id,"item_entitlements"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ItemEntitlementsForFeatureItemEntitlementResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#upsert_or_remove_item_entitlements_for_a_feature
    *   @param array{
    *     item_entitlements?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     value?: string,
    *     }>,
    *     action?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddItemEntitlementsItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addItemEntitlements(string $id, array $params, array $headers = []): AddItemEntitlementsItemEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["features",$id,"item_entitlements"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AddItemEntitlementsItemEntitlementResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#list_item_entitlements_for_an_item
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     embed?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ItemEntitlementsForItemItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function itemEntitlementsForItem(string $id, array $params = [], array $headers = []): ItemEntitlementsForItemItemEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["items",$id,"item_entitlements"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ItemEntitlementsForItemItemEntitlementResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_entitlements?lang=php#upsert_or_remove_item_entitlements_for_an_item
    *   @param array{
    *     item_entitlements?: array<array{
    *     feature_id?: string,
    *     value?: string,
    *     }>,
    *     action?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function upsertOrRemoveItemEntitlementsForItem(string $id, array $params, array $headers = []): UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["items",$id,"item_entitlements"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse::from($respObject->data, $respObject->headers);
    }

}
?>