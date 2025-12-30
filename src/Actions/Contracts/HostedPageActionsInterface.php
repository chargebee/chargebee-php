<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\HostedPageResponse\ListHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\ViewVoucherHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\PreCancelHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\EventsHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\UpdatePaymentMethodHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutGiftForItemsHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\CheckoutExistingHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\ExtendSubscriptionHostedPageResponse;
use Chargebee\Responses\HostedPageResponse\AcceptQuoteHostedPageResponse;
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
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface HostedPageActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_charge-items_and_one-time_charges
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
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     einvoicing_method?: string,
    *     is_einvoice_enabled?: bool,
    *     entity_identifier_scheme?: string,
    *     entity_identifier_standard?: string,
    *     consolidated_invoicing?: bool,
    *     },
    * invoice?: array{
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
    *     pricing_type?: string,
    *     package_size?: int,
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
    *     discounts?: array<array{
    *     percentage?: float,
    *     amount?: int,
    *     quantity?: int,
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutOneTimeForItems(array $params, array $headers = []): CheckoutOneTimeForItemsHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#update_payment_method
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updatePaymentMethod(array $params, array $headers = []): UpdatePaymentMethodHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#update_card
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
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
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return UpdateCardHostedPageResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateCard(array $params, array $headers = []): UpdateCardHostedPageResponse;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function extendSubscription(array $params, array $headers = []): ExtendSubscriptionHostedPageResponse;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function events(array $params, array $headers = []): EventsHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_gift_subscription_for_items
    *   @param array{
    *     gifter?: array{
    *     customer_id?: string,
    *     },
    * subscription_items?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
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
    *     business_entity_id?: string,
    *     redirect_url?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CheckoutGiftForItemsHostedPageResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutGiftForItems(array $params = [], array $headers = []): CheckoutGiftForItemsHostedPageResponse;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListHostedPageResponse;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function viewVoucher(array $params, array $headers = []): ViewVoucherHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#collect_now
    *   @param array{
    *     customer?: array{
    *     id?: string,
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function collectNow(array $params, array $headers = []): CollectNowHostedPageResponse;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function acceptQuote(array $params, array $headers = []): AcceptQuoteHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#create_checkout_for_a_new_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     trial_end?: int,
    *     setup_fee?: int,
    *     start_date?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     invoice_notes?: string,
    *     po_number?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     company?: string,
    *     phone?: string,
    *     locale?: string,
    *     taxability?: string,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     is_einvoice_enabled?: bool,
    *     entity_identifier_scheme?: string,
    *     entity_identifier_standard?: string,
    *     einvoicing_method?: string,
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutNewForItems(array $params, array $headers = []): CheckoutNewForItemsHostedPageResponse;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function claimGift(array $params, array $headers = []): ClaimGiftHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#create_checkout_to_update_a_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     setup_fee?: int,
    *     start_date?: int,
    *     trial_end?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     invoice_notes?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     is_einvoice_enabled?: bool,
    *     entity_identifier_scheme?: string,
    *     entity_identifier_standard?: string,
    *     },
    * card?: array{
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutExistingForItems(array $params, array $headers = []): CheckoutExistingForItemsHostedPageResponse;

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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function preCancel(array $params, array $headers = []): PreCancelHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#acknowledge_a_hosted_page
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AcknowledgeHostedPageResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function acknowledge(string $id, array $headers = []): AcknowledgeHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#retrieve_direct_debit_agreement_pdf
    *   @param array{
    *     payment_source_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return RetrieveAgreementPdfHostedPageResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveAgreementPdf(array $params, array $headers = []): RetrieveAgreementPdfHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#retrieve_a_hosted_page
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveHostedPageResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#manage_payment_sources
    *   @param array{
    *     customer?: array{
    *     id?: string,
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function managePaymentSources(array $params, array $headers = []): ManagePaymentSourcesHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_one-time_payments
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
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     consolidated_invoicing?: bool,
    *     },
    * invoice?: array{
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutOneTime(array $params = [], array $headers = []): CheckoutOneTimeHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_new_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     plan_unit_price?: int,
    *     plan_unit_price_in_decimal?: string,
    *     setup_fee?: int,
    *     trial_end?: int,
    *     start_date?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     invoice_notes?: string,
    *     affiliate_token?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     company?: string,
    *     phone?: string,
    *     locale?: string,
    *     taxability?: string,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     consolidated_invoicing?: bool,
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutNew(array $params, array $headers = []): CheckoutNewHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_gift_subscription
    *   @param array{
    *     gifter?: array{
    *     customer_id?: string,
    *     },
    * subscription?: array{
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     coupon?: string,
    *     },
    * addons?: array<array{
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutGift(array $params, array $headers = []): CheckoutGiftHostedPageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/hosted_pages?lang=php#checkout_existing_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_unit_price?: int,
    *     setup_fee?: int,
    *     plan_quantity_in_decimal?: string,
    *     plan_unit_price_in_decimal?: string,
    *     start_date?: int,
    *     trial_end?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     invoice_notes?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     },
    * card?: array{
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
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function checkoutExisting(array $params, array $headers = []): CheckoutExistingHostedPageResponse;

}
?>