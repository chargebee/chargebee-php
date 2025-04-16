<?php
namespace Chargebee\Actions;

use Chargebee\Responses\RampResponse\DeleteRampResponse;
use Chargebee\Responses\RampResponse\RetrieveRampResponse;
use Chargebee\Responses\RampResponse\UpdateRampResponse;
use Chargebee\Responses\RampResponse\ListRampResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\RampResponse\CreateForSubscriptionRampResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class RampActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#retrieve_a_ramp
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRampResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveRampResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["ramps",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveRampResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#create_a_ramp
    *   @param array{
    *     items_to_add?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     items_to_update?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     item_tiers?: array<array{
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     }>,
    *     coupons_to_add?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     discounts_to_add?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: int,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     }>,
    *     effective_from?: int,
    *     description?: string,
    *     coupons_to_remove?: array<string>,
    * discounts_to_remove?: array<string>,
    * items_to_remove?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateForSubscriptionRampResponse
    */
    public function createForSubscription(string $id, array $params, array $headers = []): CreateForSubscriptionRampResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"create_ramp"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateForSubscriptionRampResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#list_ramps
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_deleted?: bool,
    *     status?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * subscription_id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * effective_from?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListRampResponse
    */
    public function all(array $params, array $headers = []): ListRampResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["ramps"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListRampResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#update_a_subscription_ramp
    *   @param array{
    *     items_to_add?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     items_to_update?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     item_tiers?: array<array{
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     }>,
    *     coupons_to_add?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     discounts_to_add?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: int,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     }>,
    *     effective_from?: int,
    *     description?: string,
    *     coupons_to_remove?: array<string>,
    * discounts_to_remove?: array<string>,
    * items_to_remove?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateRampResponse
    */
    public function update(string $id, array $params, array $headers = []): UpdateRampResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ramps",$id,"update"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateRampResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#delete_a_ramp
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteRampResponse
    */
    public function delete(string $id, array $headers = []): DeleteRampResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ramps",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteRampResponse::from($respObject->data, $respObject->headers);
    }

}
?>