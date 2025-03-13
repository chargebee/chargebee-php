<?php
namespace Chargebee\Actions;

use Chargebee\Responses\CouponResponse\DeleteCouponResponse;
use Chargebee\Responses\CouponResponse\CopyCouponResponse;
use Chargebee\Responses\CouponResponse\UpdateCouponResponse;
use Chargebee\Responses\CouponResponse\UpdateForItemsCouponResponse;
use Chargebee\Responses\CouponResponse\RetrieveCouponResponse;
use Chargebee\Responses\CouponResponse\CreateForItemsCouponResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\CouponResponse\UnarchiveCouponResponse;
use Chargebee\Responses\CouponResponse\ListCouponResponse;
use Chargebee\Responses\CouponResponse\CreateCouponResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class CouponActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#list_coupons
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     addon?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * plan?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
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
    * name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * discount_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * duration_type?: array{
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
    * apply_on?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * created_at?: array{
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
    * currency_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCouponResponse
    */
    public function all(array $params = [], array $headers = []): ListCouponResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["coupons"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#create_a_coupon
    *   @param array{
    *     id?: string,
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: int,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     plan_constraint?: string,
    *     addon_constraint?: string,
    *     plan_ids?: array<string>,
    * addon_ids?: array<string>,
    * status?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCouponResponse
    */
    public function create(array $params, array $headers = []): CreateCouponResponse
    {
        $jsonKeys = [
            "metaData" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["coupons"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#update_a_coupon_for_items
    *   @param array{
    *     item_constraints?: array<array{
    *     constraint?: string,
    *     item_type?: string,
    *     item_price_ids?: mixed,
    *     }>,
    *     item_constraint_criteria?: array<array{
    *     item_type?: string,
    *     item_family_ids?: mixed,
    *     currencies?: mixed,
    *     item_price_periods?: mixed,
    *     }>,
    *     coupon_constraints?: array<array{
    *     entity_type?: string,
    *     type?: string,
    *     value?: string,
    *     }>,
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: int,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_from?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateForItemsCouponResponse
    */
    public function updateForItems(string $id, array $params, array $headers = []): UpdateForItemsCouponResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "itemPriceIds" => 1,
            "itemFamilyIds" => 1,
            "currencies" => 1,
            "itemPricePeriods" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["coupons",$id,"update_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateForItemsCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#unarchive_a_coupon
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UnarchiveCouponResponse
    */
    public function unarchive(string $id, array $headers = []): UnarchiveCouponResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["coupons",$id,"unarchive"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UnarchiveCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#delete_a_coupon
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCouponResponse
    */
    public function delete(string $id, array $headers = []): DeleteCouponResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["coupons",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#copy_a_coupon
    *   @param array{
    *     from_site?: string,
    *     id_at_from_site?: string,
    *     id?: string,
    *     for_site_merging?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CopyCouponResponse
    */
    public function copy(array $params, array $headers = []): CopyCouponResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["coupons","copy"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CopyCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#retrieve_a_coupon
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCouponResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveCouponResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["coupons",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#update_a_coupon
    *   @param array{
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: int,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     plan_constraint?: string,
    *     addon_constraint?: string,
    *     plan_ids?: array<string>,
    * addon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCouponResponse
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateCouponResponse
    {
        $jsonKeys = [
            "metaData" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["coupons",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateCouponResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons?lang=php#create_a_coupon_for_items
    *   @param array{
    *     item_constraints?: array<array{
    *     constraint?: string,
    *     item_type?: string,
    *     item_price_ids?: mixed,
    *     }>,
    *     item_constraint_criteria?: array<array{
    *     item_type?: string,
    *     item_family_ids?: mixed,
    *     currencies?: mixed,
    *     item_price_periods?: mixed,
    *     }>,
    *     coupon_constraints?: array<array{
    *     entity_type?: string,
    *     type?: string,
    *     value?: string,
    *     }>,
    *     id?: string,
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: int,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_from?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForItemsCouponResponse
    */
    public function createForItems(array $params, array $headers = []): CreateForItemsCouponResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "itemPriceIds" => 1,
            "itemFamilyIds" => 1,
            "currencies" => 1,
            "itemPricePeriods" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["coupons","create_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateForItemsCouponResponse::from($respObject->data, $respObject->headers);
    }

}
?>