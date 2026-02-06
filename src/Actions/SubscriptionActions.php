<?php
namespace Chargebee\Actions;

use Chargebee\Responses\SubscriptionResponse\CancelForItemsSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ChargeAddonAtTermEndSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\CreateSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\SubscriptionsForCustomerSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\PauseSubscriptionResponse;
use Chargebee\Actions\Contracts\SubscriptionActionsInterface;
use Chargebee\Responses\SubscriptionResponse\MoveSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\OverrideBillingProfileSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RegenerateInvoiceSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RemoveScheduledCancellationSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RetrieveSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\UpdateForItemsSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ListDiscountsSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RemoveScheduledPauseSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ChargeFutureRenewalsSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RemoveCouponsSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\CreateWithItemsSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\DeleteSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ContractTermsForSubscriptionSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\CreateForCustomerSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ChangeTermEndSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\AddChargeAtTermEndSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ResumeSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ImportUnbilledChargesSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\CancelSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\UpdateSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RemoveScheduledResumptionSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ListSubscriptionResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\SubscriptionResponse\ReactivateSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RetrieveAdvanceInvoiceScheduleSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ImportContractTermSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RetrieveWithScheduledChangesSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RemoveScheduledChangesSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ImportSubscriptionSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\RemoveAdvanceInvoiceScheduleSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ImportForItemsSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\EditAdvanceInvoiceScheduleSubscriptionResponse;
use Chargebee\Responses\SubscriptionResponse\ImportForCustomerSubscriptionResponse;
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

final class SubscriptionActions implements SubscriptionActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/remove-an-advance-invoice-schedules?lang=php-v4
    *   @param array{
    *     specific_dates_schedule?: array<array{
    *     id?: string,
    *     }>,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveAdvanceInvoiceScheduleSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeAdvanceInvoiceSchedule(string $id, array $params = [], array $headers = []): RemoveAdvanceInvoiceScheduleSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"remove_advance_invoice_schedule"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveAdvanceInvoiceScheduleSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/update-subscription-for-items?lang=php-v4
    *   @param array{
    *     card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     tmp_token?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     number?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     cvv?: string,
    *     preferred_scheme?: string,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_zip?: string,
    *     billing_country?: string,
    *     ip_address?: string,
    *     additional_information?: mixed,
    *     },
    * payment_method?: array{
    *     type?: string,
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     tmp_token?: string,
    *     issuing_country?: string,
    *     additional_information?: mixed,
    *     },
    * payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_information?: mixed,
    *     },
    * billing_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * statement_descriptor?: array{
    *     descriptor?: string,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     entity_identifier_scheme?: string,
    *     is_einvoice_enabled?: bool,
    *     einvoicing_method?: string,
    *     entity_identifier_standard?: string,
    *     business_customer_without_vat_number?: bool,
    *     registered_for_gst?: bool,
    *     },
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     contract_start?: int,
    *     },
    * billing_override?: array{
    *     max_excess_payment_usage?: int,
    *     max_refundable_credits_usage?: int,
    *     },
    * subscription_items?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     trial_end?: int,
    *     service_period_days?: int,
    *     charge_on_event?: string,
    *     charge_once?: bool,
    *     charge_on_option?: string,
    *     item_type?: string,
    *     proration_type?: string,
    *     usage_accumulation_reset_frequency?: string,
    *     }>,
    *     discounts?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: float,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     quantity?: int,
    *     operation_type?: string,
    *     id?: string,
    *     }>,
    *     item_tiers?: array<array{
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     mandatory_items_to_remove?: array<string>,
    * replace_items_list?: bool,
    *     setup_fee?: int,
    *     net_term_days?: int,
    *     invoice_date?: int,
    *     start_date?: int,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     coupon?: string,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     prorate?: bool,
    *     end_of_term?: bool,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     token_id?: string,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     invoice_immediately?: bool,
    *     override_relationship?: bool,
    *     changes_scheduled_at?: int,
    *     change_option?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     create_pending_invoices?: bool,
    *     auto_close_invoices?: bool,
    *     trial_end_action?: string,
    *     payment_initiator?: string,
    *     invoice_usages?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateForItemsSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateForItems(string $id, array $params, array $headers = []): UpdateForItemsSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"update_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateForItemsSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/remove-coupons?lang=php-v4
    *   @param array{
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveCouponsSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeCoupons(string $id, array $params = [], array $headers = []): RemoveCouponsSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"remove_coupons"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveCouponsSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/resume-a-subscription?lang=php-v4
    *   @param array{
    *     payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_information?: mixed,
    *     },
    * resume_option?: string,
    *     resume_date?: int,
    *     charges_handling?: string,
    *     unpaid_invoices_handling?: string,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ResumeSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function resume(string $id, array $params = [], array $headers = []): ResumeSubscriptionResponse
    {
        $jsonKeys = [
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"resume"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ResumeSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/cancel-subscription-for-items?lang=php-v4
    *   @param array{
    *     cancel_option?: string,
    *     end_of_term?: bool,
    *     cancel_at?: int,
    *     credit_option_for_current_term_charges?: string,
    *     unbilled_charges_option?: string,
    *     account_receivables_handling?: string,
    *     refundable_credits_handling?: string,
    *     contract_term_cancel_option?: string,
    *     invoice_date?: int,
    *     subscription_items?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     service_period_days?: int,
    *     }>,
    *     cancel_reason_code?: string,
    *     decommissioned?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CancelForItemsSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function cancelForItems(string $id, array $params = [], array $headers = []): CancelForItemsSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"cancel_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CancelForItemsSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/regenerate-an-invoice?lang=php-v4
    *   @param array{
    *     date_from?: int,
    *     date_to?: int,
    *     prorate?: bool,
    *     invoice_immediately?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RegenerateInvoiceSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function regenerateInvoice(string $id, array $params = [], array $headers = []): RegenerateInvoiceSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"regenerate_invoice"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RegenerateInvoiceSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/list-subscriptions?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_deleted?: bool,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * plan_id?: array{
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
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * cancel_reason?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     is_present?: mixed,
    *     },
    * cancel_reason_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * remaining_billing_cycles?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     is_present?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * activated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     is_present?: mixed,
    *     },
    * next_billing_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * cancelled_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * has_scheduled_changes?: array{
    *     is?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * offline_payment_method?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * auto_close_invoices?: array{
    *     is?: mixed,
    *     },
    * override_relationship?: array{
    *     is?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     },
    * channel?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/create-a-subscription?lang=php-v4
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     company?: string,
    *     phone?: string,
    *     locale?: string,
    *     taxability?: string,
    *     entity_code?: string,
    *     exempt_number?: string,
    *     net_term_days?: int,
    *     taxjar_exemption_category?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     allow_direct_debit?: bool,
    *     consolidated_invoicing?: bool,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     entity_identifier_scheme?: string,
    *     entity_identifier_standard?: string,
    *     is_einvoice_enabled?: bool,
    *     einvoicing_method?: string,
    *     registered_for_gst?: bool,
    *     business_customer_without_vat_number?: bool,
    *     exemption_details?: array<mixed>,
    *     customer_type?: string,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     tmp_token?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     number?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     cvv?: string,
    *     preferred_scheme?: string,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_zip?: string,
    *     billing_country?: string,
    *     ip_address?: string,
    *     additional_information?: mixed,
    *     },
    * bank_account?: array{
    *     gateway_account_id?: string,
    *     iban?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     company?: string,
    *     email?: string,
    *     phone?: string,
    *     bank_name?: string,
    *     account_number?: string,
    *     routing_number?: string,
    *     bank_code?: string,
    *     account_type?: string,
    *     account_holder_type?: string,
    *     echeck_type?: string,
    *     issuing_country?: string,
    *     swedish_identity_number?: string,
    *     billing_address?: mixed,
    *     },
    * payment_method?: array{
    *     type?: string,
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     tmp_token?: string,
    *     issuing_country?: string,
    *     additional_information?: mixed,
    *     },
    * payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_information?: mixed,
    *     },
    * billing_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * statement_descriptor?: array{
    *     descriptor?: string,
    *     },
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * entity_identifiers?: array<array{
    *     id?: string,
    *     scheme?: string,
    *     value?: string,
    *     standard?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     trial_end?: int,
    *     }>,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     service_period_in_days?: int,
    *     on_event?: string,
    *     charge_once?: bool,
    *     charge_on?: string,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     id?: string,
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     plan_unit_price?: int,
    *     plan_unit_price_in_decimal?: string,
    *     setup_fee?: int,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     mandatory_addons_to_remove?: array<string>,
    * start_date?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     offline_payment_method?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * token_id?: string,
    *     affiliate_token?: string,
    *     created_from_ip?: string,
    *     invoice_notes?: string,
    *     invoice_date?: int,
    *     meta_data?: mixed,
    *     invoice_immediately?: bool,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     trial_end_action?: string,
    *     client_profile_id?: string,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "exemptionDetails" => 1,
            "additionalInformation" => 1,
            "billingAddress" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/move-a-subscription?lang=php-v4
    *   @param array{
    *     to_customer_id?: string,
    *     copy_payment_source?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return MoveSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function move(string $id, array $params, array $headers = []): MoveSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"move"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return MoveSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/list-subscriptions-for-a-customer?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return SubscriptionsForCustomerSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function subscriptionsForCustomer(string $id, array $params = [], array $headers = []): SubscriptionsForCustomerSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers",$id,"subscriptions"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return SubscriptionsForCustomerSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/create-subscription-for-customer?lang=php-v4
    *   @param array{
    *     shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
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
    *     additional_information?: mixed,
    *     },
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     trial_end?: int,
    *     }>,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     service_period_in_days?: int,
    *     on_event?: string,
    *     charge_once?: bool,
    *     charge_on?: string,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     id?: string,
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     plan_unit_price?: int,
    *     plan_unit_price_in_decimal?: string,
    *     setup_fee?: int,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     mandatory_addons_to_remove?: array<string>,
    * start_date?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     offline_payment_method?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * payment_source_id?: string,
    *     override_relationship?: bool,
    *     invoice_notes?: string,
    *     invoice_date?: int,
    *     meta_data?: mixed,
    *     invoice_immediately?: bool,
    *     replace_primary_payment_source?: bool,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     trial_end_action?: string,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateForCustomerSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createForCustomer(string $id, array $params, array $headers = []): CreateForCustomerSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"subscriptions"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateForCustomerSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/import-subscription-for-items?lang=php-v4
    *   @param array{
    *     contract_term?: array{
    *     id?: string,
    *     created_at?: int,
    *     contract_start?: int,
    *     billing_cycle?: int,
    *     total_amount_raised?: int,
    *     total_amount_raised_before_tax?: int,
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * transaction?: array{
    *     amount?: int,
    *     payment_method?: string,
    *     reference_number?: string,
    *     date?: int,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * subscription_items?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     trial_end?: int,
    *     service_period_days?: int,
    *     charge_on_event?: string,
    *     charge_once?: bool,
    *     item_type?: string,
    *     }>,
    *     discounts?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: float,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     quantity?: int,
    *     }>,
    *     charged_items?: array<array{
    *     item_price_id?: string,
    *     last_charged_at?: int,
    *     }>,
    *     item_tiers?: array<array{
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     exhausted_coupon_ids?: array<string>,
    * id?: string,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     setup_fee?: int,
    *     net_term_days?: int,
    *     start_date?: int,
    *     auto_collection?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * payment_source_id?: string,
    *     status?: string,
    *     current_term_end?: int,
    *     current_term_start?: int,
    *     trial_start?: int,
    *     cancelled_at?: int,
    *     started_at?: int,
    *     activated_at?: int,
    *     pause_date?: int,
    *     resume_date?: int,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     create_current_term_invoice?: bool,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     cancel_reason_code?: string,
    *     create_pending_invoices?: bool,
    *     auto_close_invoices?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportForItemsSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importForItems(string $id, array $params, array $headers = []): ImportForItemsSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"import_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ImportForItemsSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/retrieve-advance-invoice?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveAdvanceInvoiceScheduleSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveAdvanceInvoiceSchedule(string $id, array $headers = []): RetrieveAdvanceInvoiceScheduleSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id,"retrieve_advance_invoice_schedule"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveAdvanceInvoiceScheduleSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/remove-scheduled-cancellation?lang=php-v4
    *   @param array{
    *     contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * billing_cycles?: int,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveScheduledCancellationSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeScheduledCancellation(string $id, array $params = [], array $headers = []): RemoveScheduledCancellationSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"remove_scheduled_cancellation"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveScheduledCancellationSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/retrieve-with-scheduled-changes?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveWithScheduledChangesSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveWithScheduledChanges(string $id, array $headers = []): RetrieveWithScheduledChangesSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id,"retrieve_with_scheduled_changes"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveWithScheduledChangesSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/reactivate-a-subscription?lang=php-v4
    *   @param array{
    *     contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
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
    *     additional_information?: mixed,
    *     },
    * trial_end?: int,
    *     billing_cycles?: int,
    *     trial_period_days?: int,
    *     reactivate_from?: int,
    *     invoice_immediately?: bool,
    *     billing_alignment_mode?: string,
    *     terms_to_charge?: int,
    *     invoice_date?: int,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReactivateSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function reactivate(string $id, array $params = [], array $headers = []): ReactivateSubscriptionResponse
    {
        $jsonKeys = [
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"reactivate"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ReactivateSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/charge-future-renewals?lang=php-v4
    *   @param array{
    *     fixed_interval_schedule?: array{
    *     number_of_occurrences?: int,
    *     days_before_renewal?: int,
    *     end_schedule_on?: string,
    *     end_date?: int,
    *     },
    * specific_dates_schedule?: array<array{
    *     terms_to_charge?: int,
    *     date?: int,
    *     }>,
    *     terms_to_charge?: int,
    *     invoice_immediately?: bool,
    *     schedule_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ChargeFutureRenewalsSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function chargeFutureRenewals(string $id, array $params = [], array $headers = []): ChargeFutureRenewalsSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"charge_future_renewals"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ChargeFutureRenewalsSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/add-charge-at-term-end?lang=php-v4
    *   @param array{
    *     amount?: int,
    *     description?: string,
    *     amount_in_decimal?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     date_from?: int,
    *     date_to?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddChargeAtTermEndSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addChargeAtTermEnd(string $id, array $params, array $headers = []): AddChargeAtTermEndSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"add_charge_at_term_end"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AddChargeAtTermEndSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/remove-scheduled-changes?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveScheduledChangesSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeScheduledChanges(string $id, array $headers = []): RemoveScheduledChangesSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"remove_scheduled_changes"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveScheduledChangesSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/change-term-end?lang=php-v4
    *   @param array{
    *     term_ends_at?: int,
    *     prorate?: bool,
    *     invoice_immediately?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ChangeTermEndSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function changeTermEnd(string $id, array $params, array $headers = []): ChangeTermEndSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"change_term_end"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ChangeTermEndSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/delete-a-subscription?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/create-subscription-for-items?lang=php-v4
    *   @param array{
    *     shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
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
    *     additional_information?: mixed,
    *     },
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     contract_start?: int,
    *     cancellation_cutoff_period?: int,
    *     },
    * billing_override?: array{
    *     max_excess_payment_usage?: int,
    *     max_refundable_credits_usage?: int,
    *     },
    * subscription_items?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     trial_end?: int,
    *     service_period_days?: int,
    *     charge_on_event?: string,
    *     charge_once?: bool,
    *     item_type?: string,
    *     charge_on_option?: string,
    *     usage_accumulation_reset_frequency?: string,
    *     }>,
    *     discounts?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: float,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     quantity?: int,
    *     }>,
    *     item_tiers?: array<array{
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     id?: string,
    *     business_entity_id?: string,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     setup_fee?: int,
    *     mandatory_items_to_remove?: array<string>,
    * net_term_days?: int,
    *     start_date?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     offline_payment_method?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * payment_source_id?: string,
    *     override_relationship?: bool,
    *     invoice_notes?: string,
    *     invoice_date?: int,
    *     meta_data?: mixed,
    *     invoice_immediately?: bool,
    *     replace_primary_payment_source?: bool,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     create_pending_invoices?: bool,
    *     auto_close_invoices?: bool,
    *     first_invoice_pending?: bool,
    *     trial_end_action?: string,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateWithItemsSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createWithItems(string $id, array $params, array $headers = []): CreateWithItemsSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"subscription_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateWithItemsSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/import-unbilled-charges?lang=php-v4
    *   @param array{
    *     unbilled_charges?: array<array{
    *     id?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     entity_type?: string,
    *     entity_id?: string,
    *     description?: string,
    *     unit_amount?: int,
    *     quantity?: int,
    *     amount?: int,
    *     unit_amount_in_decimal?: string,
    *     quantity_in_decimal?: string,
    *     amount_in_decimal?: string,
    *     discount_amount?: int,
    *     use_for_proration?: bool,
    *     is_advance_charge?: bool,
    *     }>,
    *     discounts?: array<array{
    *     unbilled_charge_id?: string,
    *     entity_type?: string,
    *     entity_id?: string,
    *     description?: string,
    *     amount?: int,
    *     }>,
    *     tiers?: array<array{
    *     unbilled_charge_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     quantity_used?: int,
    *     unit_amount?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     quantity_used_in_decimal?: string,
    *     unit_amount_in_decimal?: string,
    *     }>,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportUnbilledChargesSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importUnbilledCharges(string $id, array $params, array $headers = []): ImportUnbilledChargesSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"import_unbilled_charges"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ImportUnbilledChargesSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/remove-scheduled-resumption?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveScheduledResumptionSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeScheduledResumption(string $id, array $headers = []): RemoveScheduledResumptionSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"remove_scheduled_resumption"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveScheduledResumptionSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/retrieve-a-subscription?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/update-a-subscription?lang=php-v4
    *   @param array{
    *     card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     tmp_token?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     number?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     cvv?: string,
    *     preferred_scheme?: string,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_zip?: string,
    *     billing_country?: string,
    *     ip_address?: string,
    *     additional_information?: mixed,
    *     },
    * payment_method?: array{
    *     type?: string,
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     tmp_token?: string,
    *     issuing_country?: string,
    *     additional_information?: mixed,
    *     },
    * payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_information?: mixed,
    *     },
    * billing_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * statement_descriptor?: array{
    *     descriptor?: string,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     entity_identifier_scheme?: string,
    *     is_einvoice_enabled?: bool,
    *     einvoicing_method?: string,
    *     entity_identifier_standard?: string,
    *     business_customer_without_vat_number?: bool,
    *     registered_for_gst?: bool,
    *     },
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     billing_cycles?: int,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     trial_end?: int,
    *     proration_type?: string,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_unit_price?: int,
    *     setup_fee?: int,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     service_period_in_days?: int,
    *     charge_on?: string,
    *     on_event?: string,
    *     charge_once?: bool,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     }>,
    *     replace_addon_list?: bool,
    *     mandatory_addons_to_remove?: array<string>,
    * plan_quantity_in_decimal?: string,
    *     plan_unit_price_in_decimal?: string,
    *     invoice_date?: int,
    *     start_date?: int,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     coupon?: string,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     prorate?: bool,
    *     end_of_term?: bool,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     token_id?: string,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     invoice_immediately?: bool,
    *     override_relationship?: bool,
    *     changes_scheduled_at?: int,
    *     change_option?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     trial_end_action?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/import-contract-term?lang=php-v4
    *   @param array{
    *     contract_term?: array{
    *     id?: string,
    *     created_at?: int,
    *     contract_start?: int,
    *     contract_end?: int,
    *     status?: string,
    *     total_amount_raised?: int,
    *     total_amount_raised_before_tax?: int,
    *     total_contract_value?: int,
    *     total_contract_value_before_tax?: int,
    *     billing_cycle?: int,
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * contract_term_billing_cycle_on_renewal?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportContractTermSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importContractTerm(string $id, array $params = [], array $headers = []): ImportContractTermSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"import_contract_term"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ImportContractTermSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/override-billing-profile?lang=php-v4
    *   @param array{
    *     payment_source_id?: string,
    *     auto_collection?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OverrideBillingProfileSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function overrideBillingProfile(string $id, array $params = [], array $headers = []): OverrideBillingProfileSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"override_billing_profile"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return OverrideBillingProfileSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/remove-scheduled-pause?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveScheduledPauseSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeScheduledPause(string $id, array $headers = []): RemoveScheduledPauseSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"remove_scheduled_pause"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveScheduledPauseSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/edit-advance-invoice-schedule?lang=php-v4
    *   @param array{
    *     fixed_interval_schedule?: array{
    *     number_of_occurrences?: int,
    *     days_before_renewal?: int,
    *     end_schedule_on?: string,
    *     end_date?: int,
    *     },
    * specific_dates_schedule?: array<array{
    *     id?: string,
    *     terms_to_charge?: int,
    *     date?: int,
    *     }>,
    *     terms_to_charge?: int,
    *     schedule_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EditAdvanceInvoiceScheduleSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function editAdvanceInvoiceSchedule(string $id, array $params = [], array $headers = []): EditAdvanceInvoiceScheduleSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"edit_advance_invoice_schedule"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return EditAdvanceInvoiceScheduleSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/list-discounts-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListDiscountsSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listDiscounts(string $id, array $params = [], array $headers = []): ListDiscountsSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id,"discounts"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListDiscountsSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/list-contract-terms-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ContractTermsForSubscriptionSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function contractTermsForSubscription(string $id, array $params = [], array $headers = []): ContractTermsForSubscriptionSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id,"contract_terms"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ContractTermsForSubscriptionSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/pause-a-subscription?lang=php-v4
    *   @param array{
    *     pause_option?: string,
    *     pause_date?: int,
    *     unbilled_charges_handling?: string,
    *     invoice_dunning_handling?: string,
    *     skip_billing_cycles?: int,
    *     resume_date?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PauseSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function pause(string $id, array $params = [], array $headers = []): PauseSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"pause"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return PauseSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/import-subscription-for-customer?lang=php-v4
    *   @param array{
    *     contract_term?: array{
    *     id?: string,
    *     created_at?: int,
    *     contract_start?: int,
    *     billing_cycle?: int,
    *     total_amount_raised?: int,
    *     total_amount_raised_before_tax?: int,
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * transaction?: array{
    *     amount?: int,
    *     payment_method?: string,
    *     reference_number?: string,
    *     date?: int,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     }>,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     service_period_in_days?: int,
    *     on_event?: string,
    *     charge_once?: bool,
    *     }>,
    *     charged_event_based_addons?: array<array{
    *     id?: string,
    *     last_charged_at?: int,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     id?: string,
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     plan_unit_price?: int,
    *     plan_unit_price_in_decimal?: string,
    *     setup_fee?: int,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     start_date?: int,
    *     auto_collection?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * payment_source_id?: string,
    *     status?: string,
    *     current_term_end?: int,
    *     current_term_start?: int,
    *     trial_start?: int,
    *     cancelled_at?: int,
    *     started_at?: int,
    *     activated_at?: int,
    *     pause_date?: int,
    *     resume_date?: int,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     create_current_term_invoice?: bool,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportForCustomerSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importForCustomer(string $id, array $params, array $headers = []): ImportForCustomerSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"import_subscription"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ImportForCustomerSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/import-a-subscription?lang=php-v4
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     company?: string,
    *     phone?: string,
    *     locale?: string,
    *     taxability?: string,
    *     entity_code?: string,
    *     exempt_number?: string,
    *     net_term_days?: int,
    *     taxjar_exemption_category?: string,
    *     customer_type?: string,
    *     auto_collection?: string,
    *     allow_direct_debit?: bool,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     },
    * contract_term?: array{
    *     id?: string,
    *     created_at?: int,
    *     contract_start?: int,
    *     billing_cycle?: int,
    *     total_amount_raised?: int,
    *     total_amount_raised_before_tax?: int,
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     tmp_token?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     number?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     cvv?: string,
    *     preferred_scheme?: string,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_zip?: string,
    *     billing_country?: string,
    *     additional_information?: mixed,
    *     },
    * payment_method?: array{
    *     type?: string,
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     issuing_country?: string,
    *     additional_information?: mixed,
    *     },
    * billing_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * transaction?: array{
    *     amount?: int,
    *     payment_method?: string,
    *     reference_number?: string,
    *     date?: int,
    *     },
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     }>,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     service_period_in_days?: int,
    *     on_event?: string,
    *     charge_once?: bool,
    *     }>,
    *     charged_event_based_addons?: array<array{
    *     id?: string,
    *     last_charged_at?: int,
    *     }>,
    *     coupons?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     id?: string,
    *     client_profile_id?: string,
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     plan_unit_price?: int,
    *     plan_unit_price_in_decimal?: string,
    *     setup_fee?: int,
    *     trial_end?: int,
    *     billing_cycles?: int,
    *     start_date?: int,
    *     auto_collection?: string,
    *     po_number?: string,
    *     coupon_ids?: array<string>,
    * contract_term_billing_cycle_on_renewal?: int,
    *     status?: string,
    *     current_term_end?: int,
    *     current_term_start?: int,
    *     trial_start?: int,
    *     cancelled_at?: int,
    *     started_at?: int,
    *     activated_at?: int,
    *     pause_date?: int,
    *     resume_date?: int,
    *     create_current_term_invoice?: bool,
    *     affiliate_token?: string,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ImportSubscriptionSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importSubscription(array $params, array $headers = []): ImportSubscriptionSubscriptionResponse
    {
        $jsonKeys = [
            "metaData" => 0,
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions","import_subscription"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ImportSubscriptionSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/cancel-a-subscription?lang=php-v4
    *   @param array{
    *     cancel_option?: string,
    *     end_of_term?: bool,
    *     cancel_at?: int,
    *     credit_option_for_current_term_charges?: string,
    *     unbilled_charges_option?: string,
    *     account_receivables_handling?: string,
    *     refundable_credits_handling?: string,
    *     contract_term_cancel_option?: string,
    *     invoice_date?: int,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     service_period_in_days?: int,
    *     }>,
    *     cancel_reason_code?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CancelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function cancel(string $id, array $params = [], array $headers = []): CancelSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"cancel"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CancelSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscriptions/charge-addon-at-term-end?lang=php-v4
    *   @param array{
    *     addon_id?: string,
    *     addon_quantity?: int,
    *     addon_unit_price?: int,
    *     addon_quantity_in_decimal?: string,
    *     addon_unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ChargeAddonAtTermEndSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function chargeAddonAtTermEnd(string $id, array $params, array $headers = []): ChargeAddonAtTermEndSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"charge_addon_at_term_end"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ChargeAddonAtTermEndSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

}
?>