<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\QuoteResponse\EditUpdateSubscriptionQuoteForItemsQuoteResponse;
use Chargebee\Responses\QuoteResponse\EditCreateSubForCustomerQuoteQuoteResponse;
use Chargebee\Responses\QuoteResponse\EditCreateSubCustomerQuoteForItemsQuoteResponse;
use Chargebee\Responses\QuoteResponse\ConvertQuoteResponse;
use Chargebee\Responses\QuoteResponse\CreateSubForCustomerQuoteQuoteResponse;
use Chargebee\Responses\QuoteResponse\ListQuoteResponse;
use Chargebee\Responses\QuoteResponse\PdfQuoteResponse;
use Chargebee\Responses\QuoteResponse\CreateSubItemsForCustomerQuoteQuoteResponse;
use Chargebee\Responses\QuoteResponse\RetrieveQuoteResponse;
use Chargebee\Responses\QuoteResponse\UpdateStatusQuoteResponse;
use Chargebee\Responses\QuoteResponse\EditForChargeItemsAndChargesQuoteResponse;
use Chargebee\Responses\QuoteResponse\DeleteQuoteResponse;
use Chargebee\Responses\QuoteResponse\UpdateSubscriptionQuoteQuoteResponse;
use Chargebee\Responses\QuoteResponse\CreateForOnetimeChargesQuoteResponse;
use Chargebee\Responses\QuoteResponse\EditOneTimeQuoteQuoteResponse;
use Chargebee\Responses\QuoteResponse\CreateForChargeItemsAndChargesQuoteResponse;
use Chargebee\Responses\QuoteResponse\UpdateSubscriptionQuoteForItemsQuoteResponse;
use Chargebee\Responses\QuoteResponse\QuoteLineGroupsForQuoteQuoteResponse;
use Chargebee\Responses\QuoteResponse\EditUpdateSubscriptionQuoteQuoteResponse;
use Chargebee\Responses\QuoteResponse\ExtendExpiryDateQuoteResponse;

Interface QuoteActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#create_a_quote_for_a_new_subscription_items
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     auto_collection?: string,
    *     po_number?: string,
    *     auto_close_invoices?: bool,
    *     trial_end?: int,
    *     setup_fee?: int,
    *     start_date?: int,
    *     coupon?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
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
    *     start_date?: int,
    *     end_date?: int,
    *     ramp_tier_id?: string,
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
    *     start_date?: int,
    *     end_date?: int,
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
    *     ramp_tier_id?: string,
    *     }>,
    *     coupons?: array<array{
    *     id?: string,
    *     start_date?: int,
    *     end_date?: int,
    *     }>,
    *     name?: string,
    *     notes?: string,
    *     expires_at?: int,
    *     billing_cycles?: int,
    *     mandatory_items_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * billing_start_option?: string,
    *     net_term_days?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateSubItemsForCustomerQuoteQuoteResponse
    */
    public function createSubItemsForCustomerQuote(string $id, array $params, array $headers = []): CreateSubItemsForCustomerQuoteQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#retrieve_a_quote
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveQuoteResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#edit_create_subscription_quote_for_items
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     po_number?: string,
    *     auto_collection?: string,
    *     trial_end?: int,
    *     setup_fee?: int,
    *     start_date?: int,
    *     coupon?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
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
    *     start_date?: int,
    *     end_date?: int,
    *     ramp_tier_id?: string,
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
    *     start_date?: int,
    *     end_date?: int,
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
    *     ramp_tier_id?: string,
    *     }>,
    *     coupons?: array<array{
    *     id?: string,
    *     start_date?: int,
    *     end_date?: int,
    *     }>,
    *     notes?: string,
    *     expires_at?: int,
    *     billing_cycles?: int,
    *     mandatory_items_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * billing_start_option?: string,
    *     net_term_days?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EditCreateSubCustomerQuoteForItemsQuoteResponse
    */
    public function editCreateSubCustomerQuoteForItems(string $id, array $params, array $headers = []): EditCreateSubCustomerQuoteForItemsQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#update_quote_status
    *   @param array{
    *     status?: string,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateStatusQuoteResponse
    */
    public function updateStatus(string $id, array $params, array $headers = []): UpdateStatusQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#create_a_quote_for_update_subscription_items
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     auto_close_invoices?: bool,
    *     setup_fee?: int,
    *     start_date?: int,
    *     trial_end?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     po_number?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
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
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     registered_for_gst?: bool,
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
    *     start_date?: int,
    *     end_date?: int,
    *     ramp_tier_id?: string,
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
    *     operation_type?: string,
    *     id?: string,
    *     start_date?: int,
    *     end_date?: int,
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
    *     ramp_tier_id?: string,
    *     }>,
    *     coupons?: array<array{
    *     id?: string,
    *     start_date?: int,
    *     end_date?: int,
    *     }>,
    *     name?: string,
    *     notes?: string,
    *     expires_at?: int,
    *     mandatory_items_to_remove?: array<string>,
    * replace_items_list?: bool,
    *     billing_cycles?: int,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     change_option?: string,
    *     changes_scheduled_at?: int,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     net_term_days?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdateSubscriptionQuoteForItemsQuoteResponse
    */
    public function updateSubscriptionQuoteForItems(array $params, array $headers = []): UpdateSubscriptionQuoteForItemsQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#list_quote_line_groups
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return QuoteLineGroupsForQuoteQuoteResponse
    */
    public function quoteLineGroupsForQuote(string $id, array $params = [], array $headers = []): QuoteLineGroupsForQuoteQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#extend_expiry_date
    *   @param array{
    *     valid_till?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ExtendExpiryDateQuoteResponse
    */
    public function extendExpiryDate(string $id, array $params, array $headers = []): ExtendExpiryDateQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#edit_quote_for_charge_items_and_charges
    *   @param array{
    *     billing_address?: array{
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
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     service_period?: int,
    *     discount_amount?: int,
    *     discount_percentage?: float,
    *     }>,
    *     discounts?: array<array{
    *     percentage?: float,
    *     amount?: int,
    *     apply_on?: string,
    *     item_price_id?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     po_number?: string,
    *     notes?: string,
    *     expires_at?: int,
    *     currency_code?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EditForChargeItemsAndChargesQuoteResponse
    */
    public function editForChargeItemsAndCharges(string $id, array $params, array $headers = []): EditForChargeItemsAndChargesQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#edit_update_subscription_quote_for_items
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     setup_fee?: int,
    *     start_date?: int,
    *     trial_end?: int,
    *     coupon?: string,
    *     auto_collection?: string,
    *     offline_payment_method?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
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
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     registered_for_gst?: bool,
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
    *     start_date?: int,
    *     end_date?: int,
    *     ramp_tier_id?: string,
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
    *     operation_type?: string,
    *     id?: string,
    *     start_date?: int,
    *     end_date?: int,
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
    *     ramp_tier_id?: string,
    *     }>,
    *     coupons?: array<array{
    *     id?: string,
    *     start_date?: int,
    *     end_date?: int,
    *     }>,
    *     notes?: string,
    *     expires_at?: int,
    *     mandatory_items_to_remove?: array<string>,
    * replace_items_list?: bool,
    *     billing_cycles?: int,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     change_option?: string,
    *     changes_scheduled_at?: int,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     net_term_days?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EditUpdateSubscriptionQuoteForItemsQuoteResponse
    */
    public function editUpdateSubscriptionQuoteForItems(string $id, array $params, array $headers = []): EditUpdateSubscriptionQuoteForItemsQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#list_quotes
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
    * subscription_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * date?: array{
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
    *   @return ListQuoteResponse
    */
    public function all(array $params = [], array $headers = []): ListQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#retrieve_quote_as_pdf
    *   @param array{
    *     consolidated_view?: bool,
    *     disposition_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PdfQuoteResponse
    */
    public function pdf(string $id, array $params = [], array $headers = []): PdfQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#convert_a_quote
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     auto_collection?: string,
    *     po_number?: string,
    *     auto_close_invoices?: bool,
    *     },
    * invoice_date?: int,
    *     invoice_immediately?: bool,
    *     create_pending_invoices?: bool,
    *     first_invoice_pending?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ConvertQuoteResponse
    */
    public function convert(string $id, array $params = [], array $headers = []): ConvertQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#create_a_quote_for_charge_and_charge_items
    *   @param array{
    *     billing_address?: array{
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
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     service_period?: int,
    *     discount_amount?: int,
    *     discount_percentage?: float,
    *     }>,
    *     discounts?: array<array{
    *     percentage?: float,
    *     amount?: int,
    *     apply_on?: string,
    *     item_price_id?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     name?: string,
    *     customer_id?: string,
    *     po_number?: string,
    *     notes?: string,
    *     expires_at?: int,
    *     currency_code?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForChargeItemsAndChargesQuoteResponse
    */
    public function createForChargeItemsAndCharges(array $params, array $headers = []): CreateForChargeItemsAndChargesQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#delete_a_quote
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteQuoteResponse
    */
    public function delete(string $id, array $params = [], array $headers = []): DeleteQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#edit_quote_for_one-time_charges
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
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     service_period?: int,
    *     }>,
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     service_period?: int,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     po_number?: string,
    *     notes?: string,
    *     expires_at?: int,
    *     currency_code?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EditOneTimeQuoteQuoteResponse
    */
    public function editOneTimeQuote(string $id, array $params = [], array $headers = []): EditOneTimeQuoteQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#create_quote_for_updating_a_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     auto_close_invoices?: bool,
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
    *     po_number?: string,
    *     contract_term_billing_cycle_on_renewal?: int,
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
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
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
    *     }>,
    *     name?: string,
    *     notes?: string,
    *     expires_at?: int,
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
    * billing_cycles?: int,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     change_option?: string,
    *     changes_scheduled_at?: int,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdateSubscriptionQuoteQuoteResponse
    */
    public function updateSubscriptionQuote(array $params, array $headers = []): UpdateSubscriptionQuoteQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#create_quote_for_one-time_charges
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
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     service_period?: int,
    *     }>,
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     service_period?: int,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     name?: string,
    *     customer_id?: string,
    *     po_number?: string,
    *     notes?: string,
    *     expires_at?: int,
    *     currency_code?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForOnetimeChargesQuoteResponse
    */
    public function createForOnetimeCharges(array $params, array $headers = []): CreateForOnetimeChargesQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#create_quote_for_a_new_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     auto_collection?: string,
    *     po_number?: string,
    *     auto_close_invoices?: bool,
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
    *     contract_term_billing_cycle_on_renewal?: int,
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
    *     name?: string,
    *     notes?: string,
    *     expires_at?: int,
    *     billing_cycles?: int,
    *     mandatory_addons_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateSubForCustomerQuoteQuoteResponse
    */
    public function createSubForCustomerQuote(string $id, array $params, array $headers = []): CreateSubForCustomerQuoteQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#edit_quote_for_updating_a_subscription
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
    *     contract_term_billing_cycle_on_renewal?: int,
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
    * customer?: array{
    *     vat_number?: string,
    *     vat_number_prefix?: string,
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
    *     }>,
    *     notes?: string,
    *     expires_at?: int,
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
    * billing_cycles?: int,
    *     terms_to_charge?: int,
    *     reactivate_from?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * replace_coupon_list?: bool,
    *     change_option?: string,
    *     changes_scheduled_at?: int,
    *     force_term_reset?: bool,
    *     reactivate?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EditUpdateSubscriptionQuoteQuoteResponse
    */
    public function editUpdateSubscriptionQuote(string $id, array $params = [], array $headers = []): EditUpdateSubscriptionQuoteQuoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quotes?lang=php#edit_quote_for_a_new_subscription
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     po_number?: string,
    *     auto_collection?: string,
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
    *     contract_term_billing_cycle_on_renewal?: int,
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
    *     notes?: string,
    *     expires_at?: int,
    *     billing_cycles?: int,
    *     mandatory_addons_to_remove?: array<string>,
    * terms_to_charge?: int,
    *     billing_alignment_mode?: string,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EditCreateSubForCustomerQuoteQuoteResponse
    */
    public function editCreateSubForCustomerQuote(string $id, array $params, array $headers = []): EditCreateSubForCustomerQuoteQuoteResponse;

}
?>