<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EstimateResponse\CancelSubscriptionForItemsEstimateResponse;
use Chargebee\Responses\EstimateResponse\CreateSubForCustomerEstimateEstimateResponse;
use Chargebee\Responses\EstimateResponse\PaymentSchedulesEstimateResponse;
use Chargebee\Responses\EstimateResponse\GiftSubscriptionForItemsEstimateResponse;
use Chargebee\Responses\EstimateResponse\UpdateSubscriptionEstimateResponse;
use Chargebee\Responses\EstimateResponse\UpdateSubscriptionForItemsEstimateResponse;
use Chargebee\Responses\EstimateResponse\CreateSubItemEstimateEstimateResponse;
use Chargebee\Responses\EstimateResponse\CreateInvoiceForItemsEstimateResponse;
use Chargebee\Responses\EstimateResponse\CancelSubscriptionEstimateResponse;
use Chargebee\Responses\EstimateResponse\UpcomingInvoicesEstimateEstimateResponse;
use Chargebee\Responses\EstimateResponse\CreateSubscriptionEstimateResponse;
use Chargebee\Responses\EstimateResponse\RenewalEstimateEstimateResponse;
use Chargebee\Responses\EstimateResponse\RegenerateInvoiceEstimateEstimateResponse;
use Chargebee\Responses\EstimateResponse\ChangeTermEndEstimateResponse;
use Chargebee\Responses\EstimateResponse\GiftSubscriptionEstimateResponse;
use Chargebee\Responses\EstimateResponse\CreateInvoiceEstimateResponse;
use Chargebee\Responses\EstimateResponse\AdvanceInvoiceEstimateEstimateResponse;
use Chargebee\Responses\EstimateResponse\PauseSubscriptionEstimateResponse;
use Chargebee\Responses\EstimateResponse\ResumeSubscriptionEstimateResponse;
use Chargebee\Responses\EstimateResponse\CreateSubItemForCustomerEstimateEstimateResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface EstimateActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#subscription_renewal_estimate
    *   @param array{
    *     include_delayed_charges?: bool,
    *     use_existing_balances?: bool,
    *     ignore_scheduled_cancellation?: bool,
    *     ignore_scheduled_changes?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RenewalEstimateEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function renewalEstimate(string $id, array $params = [], array $headers = []): RenewalEstimateEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#estimate_for_creating_a_customer_and_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     trial_end?: int,
    *     setup_fee?: int,
    *     start_date?: int,
    *     coupon?: string,
    *     offline_payment_method?: string,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     trial_end_action?: string,
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
    * shipping_address?: array{
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     registered_for_gst?: bool,
    *     taxability?: string,
    *     entity_code?: string,
    *     exempt_number?: string,
    *     exemption_details?: array<mixed>,
    *     customer_type?: string,
    *     },
    * contract_term?: array{
    *     action_at_term_end?: string,
    *     contract_start?: int,
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
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     billing_cycles?: int,
    *     mandatory_items_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * invoice_immediately?: bool,
    *     invoice_date?: int,
    *     client_profile_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateSubItemEstimateEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createSubItemEstimate(array $params, array $headers = []): CreateSubItemEstimateEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#estimates_for_payment_schedules
    *   @param array{
    *     scheme_id?: string,
    *     amount?: int,
    *     invoice_id?: string,
    *     payment_schedule_start_date?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PaymentSchedulesEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function paymentSchedules(array $params, array $headers = []): PaymentSchedulesEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#cancel_subscription_for_items_estimate
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
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CancelSubscriptionForItemsEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function cancelSubscriptionForItems(string $id, array $params = [], array $headers = []): CancelSubscriptionForItemsEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#resume_subscription_estimate
    *   @param array{
    *     subscription?: array{
    *     resume_date?: int,
    *     },
    * resume_option?: string,
    *     charges_handling?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ResumeSubscriptionEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function resumeSubscription(string $id, array $params = [], array $headers = []): ResumeSubscriptionEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#create_invoice_for_items_estimate
    *   @param array{
    *     invoice?: array{
    *     customer_id?: string,
    *     subscription_id?: string,
    *     po_number?: string,
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
    *     notes_to_remove?: array<array{
    *     entity_type?: string,
    *     entity_id?: string,
    *     }>,
    *     discounts?: array<array{
    *     percentage?: float,
    *     amount?: int,
    *     quantity?: int,
    *     apply_on?: string,
    *     item_price_id?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     currency_code?: string,
    *     invoice_note?: string,
    *     remove_general_note?: bool,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * authorization_transaction_id?: string,
    *     payment_source_id?: string,
    *     auto_collection?: string,
    *     invoice_date?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateInvoiceForItemsEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createInvoiceForItems(array $params, array $headers = []): CreateInvoiceForItemsEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#gift_subscription_estimate_for_items
    *   @param array{
    *     gift?: array{
    *     scheduled_at?: int,
    *     auto_claim?: bool,
    *     no_expiry?: bool,
    *     claim_expiry_date?: int,
    *     },
    * gifter?: array{
    *     customer_id?: string,
    *     signature?: string,
    *     note?: string,
    *     payment_src_id?: string,
    *     },
    * gift_receiver?: array{
    *     customer_id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
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
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return GiftSubscriptionForItemsEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function giftSubscriptionForItems(array $params, array $headers = []): GiftSubscriptionForItemsEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#estimate_for_updating_a_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     setup_fee?: int,
    *     start_date?: int,
    *     trial_end?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     trial_end_action?: string,
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
    * shipping_address?: array{
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     registered_for_gst?: bool,
    *     taxability?: string,
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
    *     changes_scheduled_at?: int,
    *     change_option?: string,
    *     mandatory_items_to_remove?: array<string>,
    * replace_items_list?: bool,
    *     invoice_date?: int,
    *     billing_cycles?: int,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     prorate?: bool,
    *     end_of_term?: bool,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     include_delayed_charges?: bool,
    *     use_existing_balances?: bool,
    *     invoice_immediately?: bool,
    *     invoice_usages?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdateSubscriptionForItemsEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateSubscriptionForItems(array $params, array $headers = []): UpdateSubscriptionForItemsEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#upcoming_invoices_estimate
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpcomingInvoicesEstimateEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function upcomingInvoicesEstimate(string $id, array $headers = []): UpcomingInvoicesEstimateEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#regenerate_invoice_estimate
    *   @param array{
    *     date_from?: int,
    *     date_to?: int,
    *     prorate?: bool,
    *     invoice_immediately?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RegenerateInvoiceEstimateEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function regenerateInvoiceEstimate(string $id, array $params = [], array $headers = []): RegenerateInvoiceEstimateEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#estimate_for_creating_a_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     trial_end?: int,
    *     setup_fee?: int,
    *     start_date?: int,
    *     offline_payment_method?: string,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     trial_end_action?: string,
    *     },
    * shipping_address?: array{
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
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
    *     use_existing_balances?: bool,
    *     invoice_immediately?: bool,
    *     billing_cycles?: int,
    *     mandatory_items_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     invoice_date?: int,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateSubItemForCustomerEstimateEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createSubItemForCustomerEstimate(string $id, array $params, array $headers = []): CreateSubItemForCustomerEstimateEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#subscription_change_term_end_estimate
    *   @param array{
    *     term_ends_at?: int,
    *     prorate?: bool,
    *     invoice_immediately?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ChangeTermEndEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function changeTermEnd(string $id, array $params, array $headers = []): ChangeTermEndEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#pause_subscription_estimate
    *   @param array{
    *     subscription?: array{
    *     pause_date?: int,
    *     resume_date?: int,
    *     skip_billing_cycles?: int,
    *     },
    * pause_option?: string,
    *     unbilled_charges_handling?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PauseSubscriptionEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function pauseSubscription(string $id, array $params = [], array $headers = []): PauseSubscriptionEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#advance_invoice_estimate
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
    *   @return AdvanceInvoiceEstimateEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function advanceInvoiceEstimate(string $id, array $params = [], array $headers = []): AdvanceInvoiceEstimateEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#update_subscription_estimate
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
    *     free_period?: int,
    *     free_period_unit?: string,
    *     trial_end_action?: string,
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
    * shipping_address?: array{
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     registered_for_gst?: bool,
    *     taxability?: string,
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
    *     changes_scheduled_at?: int,
    *     change_option?: string,
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
    *     prorate?: bool,
    *     end_of_term?: bool,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     include_delayed_charges?: bool,
    *     use_existing_balances?: bool,
    *     invoice_immediately?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdateSubscriptionEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateSubscription(array $params, array $headers = []): UpdateSubscriptionEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#gift_subscription_estimate
    *   @param array{
    *     gift?: array{
    *     scheduled_at?: int,
    *     auto_claim?: bool,
    *     no_expiry?: bool,
    *     claim_expiry_date?: int,
    *     },
    * gifter?: array{
    *     customer_id?: string,
    *     signature?: string,
    *     note?: string,
    *     payment_src_id?: string,
    *     },
    * gift_receiver?: array{
    *     customer_id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
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
    * subscription?: array{
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     },
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     }>,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return GiftSubscriptionEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function giftSubscription(array $params, array $headers = []): GiftSubscriptionEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#create_subscription_for_a_customer_estimate
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
    *     offline_payment_method?: string,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     trial_end_action?: string,
    *     },
    * shipping_address?: array{
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
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
    *     use_existing_balances?: bool,
    *     invoice_immediately?: bool,
    *     billing_cycles?: int,
    *     mandatory_addons_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     invoice_date?: int,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateSubForCustomerEstimateEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createSubForCustomerEstimate(string $id, array $params, array $headers = []): CreateSubForCustomerEstimateEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#create_subscription_estimate
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
    *     offline_payment_method?: string,
    *     free_period?: int,
    *     free_period_unit?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
    *     trial_end_action?: string,
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
    * shipping_address?: array{
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     registered_for_gst?: bool,
    *     taxability?: string,
    *     entity_code?: string,
    *     exempt_number?: string,
    *     exemption_details?: array<mixed>,
    *     customer_type?: string,
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
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     billing_cycles?: int,
    *     mandatory_addons_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * invoice_immediately?: bool,
    *     invoice_date?: int,
    *     client_profile_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateSubscriptionEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createSubscription(array $params, array $headers = []): CreateSubscriptionEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#create_invoice_estimate
    *   @param array{
    *     invoice?: array{
    *     customer_id?: string,
    *     subscription_id?: string,
    *     po_number?: string,
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
    *     notes_to_remove?: array<array{
    *     entity_type?: string,
    *     entity_id?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     currency_code?: string,
    *     invoice_note?: string,
    *     remove_general_note?: bool,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * authorization_transaction_id?: string,
    *     payment_source_id?: string,
    *     auto_collection?: string,
    *     invoice_date?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateInvoiceEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createInvoice(array $params = [], array $headers = []): CreateInvoiceEstimateResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/estimates?lang=php#cancel_subscription_estimate
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
    *   @return CancelSubscriptionEstimateResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function cancelSubscription(string $id, array $params = [], array $headers = []): CancelSubscriptionEstimateResponse;

}
?>