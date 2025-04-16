<?php
namespace Chargebee\Actions;

use Chargebee\Responses\HostedPageResponse\ListHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\ViewVoucherHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\PreCancelHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\EventsHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\UpdatePaymentMethodHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutGiftForItemsHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutExistingHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\ExtendSubscriptionHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\AcceptQuoteHostedPageResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\HostedPageResponse\RetrieveAgreementPdfHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\ManagePaymentSourcesHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\AcknowledgeHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\UpdateCardHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutNewForItemsHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\ClaimGiftHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutOneTimeForItemsHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutOneTimeHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CollectNowHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutGiftHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutExistingForItemsHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutNewHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\RetrieveHostedPageResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class HostedPageActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_charge-items_and_one-time_charges
    *   @param array{
    *     customer?: mixed,
    *     invoice?: array{
    *     po_number?: string,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
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
    * item_prices?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
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
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     avalara_tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     date_from?: int,
    *     date_to?: int,
    *     discount_amount?: int,
    *     discount_percentage?: int,
    *     }>,
    *     discounts?: array<array{
    *     percentage?: int,
    *     amount?: int,
    *     apply_on?: string,
    *     item_price_id?: string,
    *     }>,
    *     entity_identifiers?: array<array{
    *     id?: string,
    *     scheme?: string,
    *     value?: string,
    *     operation?: string,
    *     standard?: string,
    *     }>,
    *     business_entity_id?: string,
    *     layout?: string,
    *     invoice_note?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * currency_code?: string,
    *     redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutOneTimeForItemsHostedPageResponse
    */
    public function checkoutOneTimeForItems(array $params, array $headers = []): CheckoutOneTimeForItemsHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_one_time_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutOneTimeForItemsHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#update_payment_method
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     locale?: string,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     },
    * redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     embed?: bool,
    *     iframe_messaging?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdatePaymentMethodHostedPageResponse
    */
    public function updatePaymentMethod(array $params, array $headers = []): UpdatePaymentMethodHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","update_payment_method"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdatePaymentMethodHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#update_card
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     locale?: string,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     },
    * redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     embed?: bool,
    *     iframe_messaging?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdateCardHostedPageResponse
    */
    public function updateCard(array $params, array $headers = []): UpdateCardHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","update_card"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateCardHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#extend_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     },
    * expiry?: int,
    *     billing_cycle?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ExtendSubscriptionHostedPageResponse
    */
    public function extendSubscription(array $params, array $headers = []): ExtendSubscriptionHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","extend_subscription"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ExtendSubscriptionHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#notify_an_event
    *   @param array{
    *     event_name?: string,
    *     occurred_at?: int,
    *     event_data?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return EventsHostedPageResponse
    */
    public function events(array $params, array $headers = []): EventsHostedPageResponse
    {
        $jsonKeys = [
            "eventData" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","events"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return EventsHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_gift_subscription_for_items
    *   @param array{
    *     gifter?: array{
    *     customer_id?: string,
    *     locale?: string,
    *     },
    * subscription_items?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     }>,
    *     business_entity_id?: string,
    *     redirect_url?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutGiftForItemsHostedPageResponse
    */
    public function checkoutGiftForItems(array $params = [], array $headers = []): CheckoutGiftForItemsHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_gift_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutGiftForItemsHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#list_hosted_pages
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
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * state?: array{
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
    *   
    *   @param array<string, string> $headers
    *   @return ListHostedPageResponse
    */
    public function all(array $params = [], array $headers = []): ListHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["hosted_pages"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#create_a_hosted_page_to_view_boleto_vouchers
    *   @param array{
    *     payment_voucher?: array{
    *     id?: string,
    *     },
    * customer?: array{
    *     locale?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ViewVoucherHostedPageResponse
    */
    public function viewVoucher(array $params, array $headers = []): ViewVoucherHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","view_voucher"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ViewVoucherHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#collect_now
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     locale?: string,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     },
    * redirect_url?: string,
    *     currency_code?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CollectNowHostedPageResponse
    */
    public function collectNow(array $params, array $headers = []): CollectNowHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","collect_now"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CollectNowHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#accept_a_quote
    *   @param array{
    *     quote?: array{
    *     id?: string,
    *     },
    * redirect_url?: string,
    *     layout?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AcceptQuoteHostedPageResponse
    */
    public function acceptQuote(array $params, array $headers = []): AcceptQuoteHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","accept_quote"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return AcceptQuoteHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#create_checkout_for_a_new_subscription
    *   @param array{
    *     subscription?: mixed,
    *     customer?: mixed,
    *     card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
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
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
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
    *     }>,
    *     discounts?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: int,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
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
    *     entity_identifiers?: array<array{
    *     id?: string,
    *     scheme?: string,
    *     value?: string,
    *     operation?: string,
    *     standard?: string,
    *     }>,
    *     layout?: string,
    *     business_entity_id?: string,
    *     billing_cycles?: int,
    *     mandatory_items_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     allow_offline_payment_methods?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutNewForItemsHostedPageResponse
    */
    public function checkoutNewForItems(array $params, array $headers = []): CheckoutNewForItemsHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_new_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutNewForItemsHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#claim_a_gift_subscription
    *   @param array{
    *     gift?: array{
    *     id?: string,
    *     },
    * customer?: array{
    *     locale?: string,
    *     },
    * redirect_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ClaimGiftHostedPageResponse
    */
    public function claimGift(array $params, array $headers = []): ClaimGiftHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","claim_gift"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ClaimGiftHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#create_checkout_to_update_a_subscription
    *   @param array{
    *     subscription?: mixed,
    *     customer?: mixed,
    *     card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     },
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     cancellation_cutoff_period?: int,
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
    *     }>,
    *     discounts?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: int,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
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
    *     }>,
    *     entity_identifiers?: array<array{
    *     id?: string,
    *     scheme?: string,
    *     value?: string,
    *     operation?: string,
    *     standard?: string,
    *     }>,
    *     layout?: string,
    *     mandatory_items_to_remove?: array<string>,
    * replace_items_list?: bool,
    *     invoice_date?: int,
    *     billing_cycles?: int,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     reactivate?: bool,
    *     force_term_reset?: bool,
    *     change_option?: string,
    *     changes_scheduled_at?: int,
    *     redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     allow_offline_payment_methods?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutExistingForItemsHostedPageResponse
    */
    public function checkoutExistingForItems(array $params, array $headers = []): CheckoutExistingForItemsHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_existing_for_items"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutExistingForItemsHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#create_a_pre-cancel_hosted_page
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     },
    * pass_thru_content?: string,
    *     cancel_url?: string,
    *     redirect_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PreCancelHostedPageResponse
    */
    public function preCancel(array $params, array $headers = []): PreCancelHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","pre_cancel"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return PreCancelHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#acknowledge_a_hosted_page
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AcknowledgeHostedPageResponse
    */
    public function acknowledge(string $id, array $headers = []): AcknowledgeHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages",$id,"acknowledge"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return AcknowledgeHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#retrieve_direct_debit_agreement_pdf
    *   @param array{
    *     payment_source_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return RetrieveAgreementPdfHostedPageResponse
    */
    public function retrieveAgreementPdf(array $params, array $headers = []): RetrieveAgreementPdfHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","retrieve_agreement_pdf"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveAgreementPdfHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#retrieve_a_hosted_page
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveHostedPageResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["hosted_pages",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#manage_payment_sources
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     locale?: string,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     },
    * redirect_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ManagePaymentSourcesHostedPageResponse
    */
    public function managePaymentSources(array $params, array $headers = []): ManagePaymentSourcesHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","manage_payment_sources"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ManagePaymentSourcesHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_one-time_payments
    *   @param array{
    *     customer?: mixed,
    *     invoice?: array{
    *     po_number?: string,
    *     },
    * card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
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
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     }>,
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     avalara_tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     date_from?: int,
    *     date_to?: int,
    *     }>,
    *     currency_code?: string,
    *     invoice_note?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     embed?: bool,
    *     iframe_messaging?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutOneTimeHostedPageResponse
    */
    public function checkoutOneTime(array $params = [], array $headers = []): CheckoutOneTimeHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_one_time"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutOneTimeHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_new_subscription
    *   @param array{
    *     subscription?: mixed,
    *     customer?: mixed,
    *     card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
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
    *     billing_cycles?: int,
    *     mandatory_addons_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     embed?: bool,
    *     iframe_messaging?: bool,
    *     allow_offline_payment_methods?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutNewHostedPageResponse
    */
    public function checkoutNew(array $params, array $headers = []): CheckoutNewHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_new"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutNewHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_gift_subscription
    *   @param array{
    *     gifter?: array{
    *     customer_id?: string,
    *     locale?: string,
    *     },
    * subscription?: mixed,
    *     addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     }>,
    *     redirect_url?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutGiftHostedPageResponse
    */
    public function checkoutGift(array $params, array $headers = []): CheckoutGiftHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_gift"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutGiftHostedPageResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_existing_subscription
    *   @param array{
    *     subscription?: mixed,
    *     customer?: mixed,
    *     card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
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
    *     }>,
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
    * invoice_date?: int,
    *     billing_cycles?: int,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     reactivate?: bool,
    *     force_term_reset?: bool,
    *     redirect_url?: string,
    *     cancel_url?: string,
    *     pass_thru_content?: string,
    *     embed?: bool,
    *     iframe_messaging?: bool,
    *     allow_offline_payment_methods?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutExistingHostedPageResponse
    */
    public function checkoutExisting(array $params, array $headers = []): CheckoutExistingHostedPageResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["hosted_pages","checkout_existing"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CheckoutExistingHostedPageResponse::from($respObject->data, $respObject->headers);
    }

}
?>