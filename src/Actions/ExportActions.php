<?php
namespace Chargebee\Actions;

use Chargebee\Responses\ExportResponse\RevenueRecognitionExportResponse;
use Chargebee\Responses\ExportResponse\CustomersExportResponse;
use Chargebee\Responses\ExportResponse\AddonsExportResponse;
use Chargebee\Responses\ExportResponse\ItemFamiliesExportResponse;
use Chargebee\Responses\ExportResponse\DifferentialPricesExportResponse;
use Chargebee\Responses\ExportResponse\CreditNotesExportResponse;
use Chargebee\Responses\ExportResponse\CouponsExportResponse;
use Chargebee\Responses\ExportResponse\SubscriptionsExportResponse;
use Chargebee\Responses\ExportResponse\OrdersExportResponse;
use Chargebee\Responses\ExportResponse\PlansExportResponse;
use Chargebee\Responses\ExportResponse\AttachedItemsExportResponse;
use Chargebee\Responses\ExportResponse\RetrieveExportResponse;
use Chargebee\Responses\ExportResponse\PriceVariantsExportResponse;
use Chargebee\Responses\ExportResponse\InvoicesExportResponse;
use Chargebee\Responses\ExportResponse\ItemPricesExportResponse;
use Chargebee\Responses\ExportResponse\TransactionsExportResponse;
use Chargebee\Responses\ExportResponse\ItemsExportResponse;
use Chargebee\Responses\ExportResponse\DeferredRevenueExportResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class ExportActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_customers
    *   @param array{
    *     customer?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     first_name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     last_name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     email?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     company?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     phone?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     auto_collection?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     taxability?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     offline_payment_method?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     auto_close_invoices?: array{
    *         is?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * relationship?: array{
    *     parent_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     payment_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     invoice_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * export_type?: string,
    *     business_entity_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CustomersExportResponse
    */
    public function customers(array $params = [], array $headers = []): CustomersExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","customers"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CustomersExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_attached_items
    *   @param array{
    *     attached_item?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     item_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     charge_on_event?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     parent_item_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * item_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AttachedItemsExportResponse
    */
    public function attachedItems(array $params = [], array $headers = []): AttachedItemsExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","attached_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return AttachedItemsExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_transactions
    *   @param array{
    *     transaction?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     subscription_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     payment_source_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     payment_method?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     gateway?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     gateway_account_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     id_at_gateway?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     reference_number?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     date?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     amount?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_capturable?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return TransactionsExportResponse
    */
    public function transactions(array $params = [], array $headers = []): TransactionsExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","transactions"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return TransactionsExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_differential_price
    *   @param array{
    *     differential_price?: array{
    *     item_price_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     parent_item_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * item_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return DifferentialPricesExportResponse
    */
    public function differentialPrices(array $params = [], array $headers = []): DifferentialPricesExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","differential_prices"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DifferentialPricesExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_item_families
    *   @param array{
    *     item_family?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_present?: mixed,
    *     },
    * include_site_level_resources?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ItemFamiliesExportResponse
    */
    public function itemFamilies(array $params = [], array $headers = []): ItemFamiliesExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","item_families"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ItemFamiliesExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_invoices
    *   @param array{
    *     invoice?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     subscription_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     recurring?: array{
    *         is?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     price_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     date?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     paid_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     total?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_paid?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_adjusted?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     credits_applied?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_due?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     dunning_status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             is_present?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * payment_owner?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return InvoicesExportResponse
    */
    public function invoices(array $params = [], array $headers = []): InvoicesExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","invoices"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return InvoicesExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#retrieve_an_export
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveExportResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["exports",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_price_variants
    *   @param array{
    *     price_variant?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_present?: mixed,
    *     },
    * include_site_level_resources?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PriceVariantsExportResponse
    */
    public function priceVariants(array $params = [], array $headers = []): PriceVariantsExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","price_variants"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return PriceVariantsExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_items
    *   @param array{
    *     item?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     item_family_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     item_applicability?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     is_giftable?: array{
    *         is?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     enabled_for_checkout?: array{
    *         is?: string,
    *             },
    *     enabled_in_portal?: array{
    *         is?: string,
    *             },
    *     metered?: array{
    *         is?: string,
    *             },
    *     usage_calculation?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     item_grouping_category?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_present?: mixed,
    *     },
    * include_site_level_resources?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ItemsExportResponse
    */
    public function items(array $params = [], array $headers = []): ItemsExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ItemsExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_deferred_revenue_reports
    *   @param array{
    *     invoice?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     recurring?: array{
    *         is?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     price_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     date?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     paid_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     total?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_paid?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_adjusted?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     credits_applied?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_due?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     dunning_status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             is_present?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * subscription?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     cancel_reason?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             is_present?: string,
    *             },
    *     remaining_billing_cycles?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             is_present?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     activated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             is_present?: string,
    *             },
    *     next_billing_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     cancelled_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     has_scheduled_changes?: array{
    *         is?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     offline_payment_method?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     auto_close_invoices?: array{
    *         is?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     plan_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * customer?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     first_name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     last_name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     email?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     company?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     phone?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     auto_collection?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     taxability?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     offline_payment_method?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     auto_close_invoices?: array{
    *         is?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * relationship?: array{
    *     parent_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     payment_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     invoice_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * report_by?: string,
    *     currency_code?: string,
    *     report_from_month?: int,
    *     report_from_year?: int,
    *     report_to_month?: int,
    *     report_to_year?: int,
    *     include_discounts?: bool,
    *     payment_owner?: array{
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
    * item_price_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * cancel_reason_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return DeferredRevenueExportResponse
    */
    public function deferredRevenue(array $params, array $headers = []): DeferredRevenueExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","deferred_revenue"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeferredRevenueExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_revenue_recognition_reports
    *   @param array{
    *     invoice?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     recurring?: array{
    *         is?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     price_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     date?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     paid_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     total?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_paid?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_adjusted?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     credits_applied?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_due?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     dunning_status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             is_present?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * subscription?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     cancel_reason?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             is_present?: string,
    *             },
    *     remaining_billing_cycles?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             is_present?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     activated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             is_present?: string,
    *             },
    *     next_billing_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     cancelled_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     has_scheduled_changes?: array{
    *         is?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     offline_payment_method?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     auto_close_invoices?: array{
    *         is?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     plan_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * customer?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     first_name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     last_name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     email?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     company?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     phone?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             },
    *     auto_collection?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     taxability?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     offline_payment_method?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     auto_close_invoices?: array{
    *         is?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * relationship?: array{
    *     parent_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     payment_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     invoice_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * report_by?: string,
    *     currency_code?: string,
    *     report_from_month?: int,
    *     report_from_year?: int,
    *     report_to_month?: int,
    *     report_to_year?: int,
    *     include_discounts?: bool,
    *     payment_owner?: array{
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
    * item_price_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * cancel_reason_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return RevenueRecognitionExportResponse
    */
    public function revenueRecognition(array $params, array $headers = []): RevenueRecognitionExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","revenue_recognition"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RevenueRecognitionExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_credit_notes
    *   @param array{
    *     credit_note?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     subscription_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     reference_invoice_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     reason_code?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     create_reason_code?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     date?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     total?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     price_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     amount_allocated?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_refunded?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     amount_available?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     voided_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreditNotesExportResponse
    */
    public function creditNotes(array $params = [], array $headers = []): CreditNotesExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","credit_notes"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreditNotesExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_coupons
    *   @param array{
    *     coupon?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     discount_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     duration_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     apply_on?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     plan_constraint?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     addon_constraint?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
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
    *   @return CouponsExportResponse
    */
    public function coupons(array $params = [], array $headers = []): CouponsExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","coupons"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CouponsExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_orders
    *   @param array{
    *     order?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     subscription_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             is_present?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     price_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     order_date?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     shipping_date?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     shipped_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     delivered_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     cancelled_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     amount_paid?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     refundable_credits?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     refundable_credits_issued?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     resent_status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     is_resent?: array{
    *         is?: string,
    *             },
    *     original_order_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * total?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return OrdersExportResponse
    */
    public function orders(array $params = [], array $headers = []): OrdersExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","orders"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return OrdersExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_item_prices
    *   @param array{
    *     item_price?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     pricing_model?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     item_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     price_variant_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     trial_period?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     trial_period_unit?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     period_unit?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     period?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * item_family_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * currency_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
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
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ItemPricesExportResponse
    */
    public function itemPrices(array $params = [], array $headers = []): ItemPricesExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","item_prices"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ItemPricesExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_subscriptions
    *   @param array{
    *     subscription?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     cancel_reason?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             is_present?: string,
    *             },
    *     remaining_billing_cycles?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             is_present?: string,
    *             },
    *     created_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     activated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             is_present?: string,
    *             },
    *     next_billing_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     cancelled_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     has_scheduled_changes?: array{
    *         is?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     offline_payment_method?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     auto_close_invoices?: array{
    *         is?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     plan_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * export_type?: string,
    *     item_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_price_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * cancel_reason_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return SubscriptionsExportResponse
    */
    public function subscriptions(array $params = [], array $headers = []): SubscriptionsExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","subscriptions"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return SubscriptionsExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_addons
    *   @param array{
    *     addon?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     charge_type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     price?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     period?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     period_unit?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
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
    *   @return AddonsExportResponse
    */
    public function addons(array $params = [], array $headers = []): AddonsExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","addons"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return AddonsExportResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/exports?lang=php#export_plans
    *   @param array{
    *     plan?: array{
    *     id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     name?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     price?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     period?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             },
    *     period_unit?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     trial_period?: array{
    *         is?: string,
    *             is_not?: string,
    *             lt?: string,
    *             lte?: string,
    *             gt?: string,
    *             gte?: string,
    *             between?: string,
    *             is_present?: string,
    *             },
    *     trial_period_unit?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     addon_applicability?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     giftable?: array{
    *         is?: string,
    *             },
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     updated_at?: array{
    *         after?: string,
    *             before?: string,
    *             on?: string,
    *             between?: string,
    *             },
    *     channel?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
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
    *   @return PlansExportResponse
    */
    public function plans(array $params = [], array $headers = []): PlansExportResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["exports","plans"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return PlansExportResponse::from($respObject->data, $respObject->headers);
    }

}
?>