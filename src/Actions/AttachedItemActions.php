<?php
namespace Chargebee\Actions;

use Chargebee\Responses\AttachedItemResponse\ListAttachedItemResponse;
use Chargebee\Actions\Contracts\AttachedItemActionsInterface;
use Chargebee\Responses\AttachedItemResponse\RetrieveAttachedItemResponse;
use Chargebee\Responses\AttachedItemResponse\DeleteAttachedItemResponse;
use Chargebee\Responses\AttachedItemResponse\CreateAttachedItemResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\AttachedItemResponse\UpdateAttachedItemResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class AttachedItemActions implements AttachedItemActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#retrieve_an_attached_item_
    *   @param array{
    *     parent_item_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveAttachedItemResponse
    */
    public function retrieve(string $id, array $params, array $headers = []): RetrieveAttachedItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["attached_items",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveAttachedItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#update_an_attached_item
    *   @param array{
    *     parent_item_id?: string,
    *     type?: string,
    *     billing_cycles?: int,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     charge_on_event?: string,
    *     charge_once?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateAttachedItemResponse
    */
    public function update(string $id, array $params, array $headers = []): UpdateAttachedItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["attached_items",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateAttachedItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#list_attached_items
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * charge_on_event?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListAttachedItemResponse
    */
    public function all(string $id, array $params = [], array $headers = []): ListAttachedItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["items",$id,"attached_items"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListAttachedItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#create_an_attached_item
    *   @param array{
    *     item_id?: string,
    *     type?: string,
    *     billing_cycles?: int,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     charge_on_event?: string,
    *     charge_once?: bool,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateAttachedItemResponse
    */
    public function create(string $id, array $params, array $headers = []): CreateAttachedItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["items",$id,"attached_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateAttachedItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#delete_an_attached_item
    *   @param array{
    *     parent_item_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteAttachedItemResponse
    */
    public function delete(string $id, array $params, array $headers = []): DeleteAttachedItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["attached_items",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteAttachedItemResponse::from($respObject->data, $respObject->headers);
    }

}
?>