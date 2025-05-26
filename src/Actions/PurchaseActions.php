<?php
namespace Chargebee\Actions;

use Chargebee\Responses\PurchaseResponse\CreatePurchaseResponse;
use Chargebee\Responses\PurchaseResponse\EstimatePurchaseResponse;
use Chargebee\Actions\Contracts\PurchaseActionsInterface;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class PurchaseActions implements PurchaseActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/purchases?lang=php#create_a_purchase
    *   @param array{
    *     invoice_info?: array{
    *     po_number?: string,
    *     notes?: string,
    *     },
    * payment_schedule?: array{
    *     scheme_id?: string,
    *     amount?: int,
    *     },
    * statement_descriptor?: array{
    *     descriptor?: string,
    *     },
    * payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_info?: mixed,
    *     additional_information?: mixed,
    *     },
    * purchase_items?: array<array{
    *     index?: int,
    *     item_price_id?: string,
    *     quantity?: int,
    *     unit_amount?: int,
    *     unit_amount_in_decimal?: string,
    *     quantity_in_decimal?: string,
    *     }>,
    *     item_tiers?: array<array{
    *     index?: int,
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     }>,
    *     shipping_addresses?: array<array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state?: string,
    *     state_code?: string,
    *     country?: string,
    *     zip?: string,
    *     validation_status?: string,
    *     }>,
    *     discounts?: array<array{
    *     index?: int,
    *     coupon_id?: string,
    *     percentage?: float,
    *     amount?: int,
    *     included_in_mrr?: bool,
    *     }>,
    *     subscription_info?: array<array{
    *     index?: int,
    *     subscription_id?: string,
    *     billing_cycles?: int,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     meta_data?: mixed,
    *     }>,
    *     contract_terms?: array<array{
    *     index?: int,
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     }>,
    *     customer_id?: string,
    *     payment_source_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePurchaseResponse
    */
    public function create(array $params, array $headers = []): CreatePurchaseResponse
    {
        $jsonKeys = [
            "additionalInformation" => 1,
            "metaData" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["purchases"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreatePurchaseResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/purchases?lang=php#estimates_for_purchase
    *   @param array{
    *     customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     registered_for_gst?: bool,
    *     taxability?: string,
    *     entity_code?: string,
    *     exempt_number?: string,
    *     locale?: string,
    *     exemption_details?: array<mixed>,
    *     customer_type?: string,
    *     },
    * billing_address?: array{
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * purchase_items?: array<array{
    *     index?: int,
    *     item_price_id?: string,
    *     quantity?: int,
    *     unit_amount?: int,
    *     unit_amount_in_decimal?: string,
    *     quantity_in_decimal?: string,
    *     }>,
    *     item_tiers?: array<array{
    *     index?: int,
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     }>,
    *     shipping_addresses?: array<array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state?: string,
    *     state_code?: string,
    *     country?: string,
    *     zip?: string,
    *     validation_status?: string,
    *     }>,
    *     discounts?: array<array{
    *     index?: int,
    *     coupon_id?: string,
    *     percentage?: float,
    *     amount?: int,
    *     included_in_mrr?: bool,
    *     }>,
    *     subscription_info?: array<array{
    *     index?: int,
    *     subscription_id?: string,
    *     billing_cycles?: int,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     }>,
    *     contract_terms?: array<array{
    *     index?: int,
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     }>,
    *     client_profile_id?: string,
    *     customer_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return EstimatePurchaseResponse
    */
    public function estimate(array $params, array $headers = []): EstimatePurchaseResponse
    {
        $jsonKeys = [
            "exemptionDetails" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["purchases","estimate"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return EstimatePurchaseResponse::from($respObject->data, $respObject->headers);
    }

}
?>