<?php
namespace Chargebee\Actions;

use Chargebee\Responses\ItemResponse\DeleteItemResponse;
use Chargebee\Responses\ItemResponse\UpdateItemResponse;
use Chargebee\Responses\ItemResponse\CreateItemResponse;
use Chargebee\Responses\ItemResponse\RetrieveItemResponse;
use Chargebee\Responses\ItemResponse\ListItemResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class ItemActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#list_items
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     bundle_configuration?: array{
    *     type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_family_id?: array{
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
    * name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * item_applicability?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * is_giftable?: array{
    *     is?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * enabled_for_checkout?: array{
    *     is?: mixed,
    *     },
    * enabled_in_portal?: array{
    *     is?: mixed,
    *     },
    * metered?: array{
    *     is?: mixed,
    *     },
    * usage_calculation?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * channel?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_present?: mixed,
    *     },
    * include_site_level_resources?: array{
    *     is?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListItemResponse
    */
    public function all(array $params = [], array $headers = []): ListItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["items"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#create_an_item
    *   @param array{
    *     bundle_configuration?: array{
    *     type?: string,
    *     },
    * bundle_items_to_add?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     quantity?: int,
    *     price_allocation?: int,
    *     }>,
    *     id?: string,
    *     name?: string,
    *     type?: string,
    *     description?: string,
    *     item_family_id?: string,
    *     is_giftable?: bool,
    *     is_shippable?: bool,
    *     external_name?: string,
    *     enabled_in_portal?: bool,
    *     redirect_url?: string,
    *     enabled_for_checkout?: bool,
    *     item_applicability?: string,
    *     applicable_items?: array<string>,
    * unit?: string,
    *     gift_claim_redirect_url?: string,
    *     included_in_mrr?: bool,
    *     metered?: bool,
    *     usage_calculation?: string,
    *     metadata?: mixed,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateItemResponse
    */
    public function create(array $params, array $headers = []): CreateItemResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#delete_an_item
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteItemResponse
    */
    public function delete(string $id, array $headers = []): DeleteItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["items",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#retrieve_an_item
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveItemResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["items",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveItemResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#update_an_item
    *   @param array{
    *     bundle_configuration?: array{
    *     type?: string,
    *     },
    * bundle_items_to_add?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     quantity?: int,
    *     price_allocation?: int,
    *     }>,
    *     bundle_items_to_update?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     quantity?: int,
    *     price_allocation?: int,
    *     }>,
    *     bundle_items_to_remove?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     }>,
    *     name?: string,
    *     description?: string,
    *     is_shippable?: bool,
    *     external_name?: string,
    *     item_family_id?: string,
    *     enabled_in_portal?: bool,
    *     redirect_url?: string,
    *     enabled_for_checkout?: bool,
    *     item_applicability?: string,
    *     clear_applicable_items?: bool,
    *     applicable_items?: array<string>,
    * unit?: string,
    *     gift_claim_redirect_url?: string,
    *     metadata?: mixed,
    *     included_in_mrr?: bool,
    *     status?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateItemResponse
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateItemResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["items",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateItemResponse::from($respObject->data, $respObject->headers);
    }

}
?>