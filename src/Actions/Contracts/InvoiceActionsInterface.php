<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\InvoiceResponse\StopDunningInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\AddChargeInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\AddChargeItemInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\DeleteInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ApplyPaymentsInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\WriteOffInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RecordTaxWithheldInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\CollectPaymentInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RecordRefundInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\DeleteLineItemsInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ApplyCreditsInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\DownloadEinvoiceInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\PaymentSchedulesInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\CreateForChargeItemsAndChargesInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ListInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ChargeInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RecordPaymentInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ResumeDunningInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\AddAddonChargeInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\CloseInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\PdfInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\VoidInvoiceInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\CreateInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\UpdateDetailsInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RemovePaymentInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\SendEinvoiceInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\PauseDunningInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\SyncUsagesInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ChargeAddonInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\InvoicesForCustomerInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ResendEinvoiceInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RetrieveInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\InvoicesForSubscriptionInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ApplyPaymentScheduleSchemeInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ListPaymentReferenceNumbersInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RemoveTaxWithheldInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\CreateForChargeItemInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RemoveCreditNoteInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\ImportInvoiceInvoiceResponse;
use Chargebee\Responses\InvoiceResponse\RefundInvoiceResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface InvoiceActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#delete_line_items
    *   @param array{
    *     line_items?: array<array{
    *     id?: string,
    *     }>,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteLineItemsInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deleteLineItems(string $id, array $params = [], array $headers = []): DeleteLineItemsInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#remove_credit_note_from_an_invoice
    *   @param array{
    *     credit_note?: array{
    *     id?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveCreditNoteInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeCreditNote(string $id, array $params, array $headers = []): RemoveCreditNoteInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#remove_payment_from_an_invoice
    *   @param array{
    *     transaction?: array{
    *     id?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemovePaymentInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removePayment(string $id, array $params, array $headers = []): RemovePaymentInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#stop_dunning_for_invoice
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return StopDunningInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function stopDunning(string $id, array $params = [], array $headers = []): StopDunningInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#apply_payments_for_an_invoice
    *   @param array{
    *     transactions?: array<array{
    *     id?: string,
    *     amount?: int,
    *     }>,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ApplyPaymentsInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function applyPayments(string $id, array $params = [], array $headers = []): ApplyPaymentsInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#apply_payment_schedule_scheme_to_an_invoice
    *   @param array{
    *     scheme_id?: string,
    *     amount?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ApplyPaymentScheduleSchemeInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function applyPaymentScheduleScheme(string $id, array $params, array $headers = []): ApplyPaymentScheduleSchemeInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#void_an_invoice
    *   @param array{
    *     comment?: string,
    *     void_reason_code?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return VoidInvoiceInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function voidInvoice(string $id, array $params = [], array $headers = []): VoidInvoiceInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#add_one-time_charge_to_a_pending_invoice
    *   @param array{
    *     line_item?: array{
    *     date_from?: int,
    *     date_to?: int,
    *     },
    * amount?: int,
    *     description?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     avalara_tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     comment?: string,
    *     subscription_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddChargeInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addCharge(string $id, array $params, array $headers = []): AddChargeInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#send_an_einvoice_for_invoices
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SendEinvoiceInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function sendEinvoice(string $id, array $headers = []): SendEinvoiceInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#retrieve_payment_schedules_for_an_invoice
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PaymentSchedulesInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function paymentSchedules(string $id, array $headers = []): PaymentSchedulesInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#write_off_an_invoice
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return WriteOffInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function writeOff(string $id, array $params = [], array $headers = []): WriteOffInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#add_a_charge-item_to_a_pending_invoice
    *   @param array{
    *     item_price?: array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     },
    * item_tiers?: array<array{
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     comment?: string,
    *     subscription_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddChargeItemInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addChargeItem(string $id, array $params, array $headers = []): AddChargeItemInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#pause_dunning_for_invoice
    *   @param array{
    *     expected_payment_date?: int,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PauseDunningInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function pauseDunning(string $id, array $params, array $headers = []): PauseDunningInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#list_invoices
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     einvoice?: array{
    *     status?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * paid_on_after?: int,
    *     include_deleted?: bool,
    *     id?: array{
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
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * recurring?: array{
    *     is?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * price_type?: array{
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
    * paid_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
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
    * amount_paid?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * amount_adjusted?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * credits_applied?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * amount_due?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * dunning_status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     is_present?: mixed,
    *     },
    * payment_owner?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * channel?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * voided_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * void_reason_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#create_an_invoice
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
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     notes_to_remove?: array<array{
    *     entity_type?: string,
    *     entity_id?: string,
    *     }>,
    *     customer_id?: string,
    *     subscription_id?: string,
    *     currency_code?: string,
    *     invoice_date?: int,
    *     invoice_note?: string,
    *     remove_general_note?: bool,
    *     po_number?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * authorization_transaction_id?: string,
    *     payment_source_id?: string,
    *     auto_collection?: string,
    *     token_id?: string,
    *     replace_primary_payment_source?: bool,
    *     retain_payment_source?: bool,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params = [], array $headers = []): CreateInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#close_a_pending_invoice
    *   @param array{
    *     notes_to_remove?: array<array{
    *     entity_type?: string,
    *     entity_id?: string,
    *     }>,
    *     comment?: string,
    *     invoice_note?: string,
    *     remove_general_note?: bool,
    *     invoice_date?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CloseInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function close(string $id, array $params = [], array $headers = []): CloseInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#apply_credits_for_an_invoice
    *   @param array{
    *     credit_notes?: array<array{
    *     id?: string,
    *     }>,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ApplyCreditsInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function applyCredits(string $id, array $params = [], array $headers = []): ApplyCreditsInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#retrieve_an_invoice
    *   @param array{
    *     line_item?: array{
    *     subscription_id?: array{
    *         is?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             },
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $params = [], array $headers = []): RetrieveInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#create_invoice_for_a_charge-item
    *   @param array{
    *     item_price?: array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     },
    * item_tiers?: array<array{
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     customer_id?: string,
    *     subscription_id?: string,
    *     po_number?: string,
    *     coupon?: string,
    *     payment_source_id?: string,
    *     payment_initiator?: string,
    *     invoice_date?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForChargeItemInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createForChargeItem(array $params, array $headers = []): CreateForChargeItemInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#create_invoice_for_items_and_one-time_charges
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
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     discounts?: array<array{
    *     percentage?: float,
    *     amount?: int,
    *     quantity?: int,
    *     apply_on?: string,
    *     item_price_id?: string,
    *     }>,
    *     customer_id?: string,
    *     subscription_id?: string,
    *     currency_code?: string,
    *     invoice_note?: string,
    *     remove_general_note?: bool,
    *     po_number?: string,
    *     coupon?: string,
    *     coupon_ids?: array<string>,
    * authorization_transaction_id?: string,
    *     payment_source_id?: string,
    *     auto_collection?: string,
    *     invoice_date?: int,
    *     token_id?: string,
    *     replace_primary_payment_source?: bool,
    *     retain_payment_source?: bool,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForChargeItemsAndChargesInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createForChargeItemsAndCharges(array $params, array $headers = []): CreateForChargeItemsAndChargesInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#update_invoice_details
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
    * statement_descriptor?: array{
    *     descriptor?: string,
    *     },
    * vat_number?: string,
    *     vat_number_prefix?: string,
    *     po_number?: string,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateDetailsInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateDetails(string $id, array $params = [], array $headers = []): UpdateDetailsInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#list_invoices_for_a_customer
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return InvoicesForCustomerInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function invoicesForCustomer(string $id, array $params = [], array $headers = []): InvoicesForCustomerInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#record_an_invoice_payment
    *   @param array{
    *     transaction?: array{
    *     amount?: int,
    *     payment_method?: string,
    *     reference_number?: string,
    *     custom_payment_method_id?: string,
    *     id_at_gateway?: string,
    *     status?: string,
    *     date?: int,
    *     error_code?: string,
    *     error_text?: string,
    *     },
    * comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RecordPaymentInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function recordPayment(string $id, array $params, array $headers = []): RecordPaymentInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#delete_an_invoice
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $params = [], array $headers = []): DeleteInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#import_invoice
    *   @param array{
    *     credit_note?: array{
    *     id?: string,
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
    * line_items?: array<array{
    *     id?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     subscription_id?: string,
    *     description?: string,
    *     unit_amount?: int,
    *     quantity?: int,
    *     amount?: int,
    *     unit_amount_in_decimal?: string,
    *     quantity_in_decimal?: string,
    *     amount_in_decimal?: string,
    *     entity_type?: string,
    *     entity_id?: string,
    *     item_level_discount1_entity_id?: string,
    *     item_level_discount1_amount?: int,
    *     item_level_discount2_entity_id?: string,
    *     item_level_discount2_amount?: int,
    *     tax1_name?: string,
    *     tax1_amount?: int,
    *     tax2_name?: string,
    *     tax2_amount?: int,
    *     tax3_name?: string,
    *     tax3_amount?: int,
    *     tax4_name?: string,
    *     tax4_amount?: int,
    *     tax5_name?: string,
    *     tax5_amount?: int,
    *     tax6_name?: string,
    *     tax6_amount?: int,
    *     tax7_name?: string,
    *     tax7_amount?: int,
    *     tax8_name?: string,
    *     tax8_amount?: int,
    *     tax9_name?: string,
    *     tax9_amount?: int,
    *     tax10_name?: string,
    *     tax10_amount?: int,
    *     created_at?: int,
    *     }>,
    *     payment_reference_numbers?: array<array{
    *     id?: string,
    *     type?: string,
    *     number?: string,
    *     }>,
    *     line_item_tiers?: array<array{
    *     line_item_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     quantity_used?: int,
    *     unit_amount?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     quantity_used_in_decimal?: string,
    *     unit_amount_in_decimal?: string,
    *     }>,
    *     discounts?: array<array{
    *     entity_type?: string,
    *     entity_id?: string,
    *     description?: string,
    *     amount?: int,
    *     }>,
    *     taxes?: array<array{
    *     name?: string,
    *     rate?: float,
    *     amount?: int,
    *     description?: string,
    *     juris_type?: string,
    *     juris_name?: string,
    *     juris_code?: string,
    *     }>,
    *     payments?: array<array{
    *     id?: string,
    *     amount?: int,
    *     payment_method?: string,
    *     date?: int,
    *     reference_number?: string,
    *     }>,
    *     notes?: array<array{
    *     entity_type?: string,
    *     entity_id?: string,
    *     note?: string,
    *     }>,
    *     line_item_addresses?: array<array{
    *     line_item_id?: string,
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
    *     }>,
    *     id?: string,
    *     currency_code?: string,
    *     customer_id?: string,
    *     subscription_id?: string,
    *     po_number?: string,
    *     price_type?: string,
    *     tax_override_reason?: string,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     date?: int,
    *     total?: int,
    *     round_off?: int,
    *     status?: string,
    *     voided_at?: int,
    *     void_reason_code?: string,
    *     is_written_off?: bool,
    *     write_off_amount?: int,
    *     write_off_date?: int,
    *     due_date?: int,
    *     net_term_days?: int,
    *     has_advance_charges?: bool,
    *     use_for_proration?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ImportInvoiceInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importInvoice(array $params, array $headers = []): ImportInvoiceInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#resume_dunning_for_invoice
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ResumeDunningInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function resumeDunning(string $id, array $params = [], array $headers = []): ResumeDunningInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#record_tax_withheld_for_an_invoice
    *   @param array{
    *     tax_withheld?: array{
    *     amount?: int,
    *     reference_number?: string,
    *     date?: int,
    *     description?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RecordTaxWithheldInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function recordTaxWithheld(string $id, array $params, array $headers = []): RecordTaxWithheldInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#resend_failed_einvoice_in_invoices
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ResendEinvoiceInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function resendEinvoice(string $id, array $headers = []): ResendEinvoiceInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#remove_tax_withheld_for_an_invoice
    *   @param array{
    *     tax_withheld?: array{
    *     id?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveTaxWithheldInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeTaxWithheld(string $id, array $params, array $headers = []): RemoveTaxWithheldInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#list_payment_reference_numbers
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     payment_reference_number?: array{
    *     number?: array{
    *         in?: string,
    *             is?: string,
    *             },
    *     },
    * id?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListPaymentReferenceNumbersInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listPaymentReferenceNumbers(array $params = [], array $headers = []): ListPaymentReferenceNumbersInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#collect_payment_for_an_invoice
    *   @param array{
    *     amount?: int,
    *     authorization_transaction_id?: string,
    *     payment_source_id?: string,
    *     comment?: string,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CollectPaymentInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function collectPayment(string $id, array $params = [], array $headers = []): CollectPaymentInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#sync_usages
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SyncUsagesInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function syncUsages(string $id, array $headers = []): SyncUsagesInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#refund_an_invoice
    *   @param array{
    *     credit_note?: array{
    *     reason_code?: string,
    *     create_reason_code?: string,
    *     },
    * refund_amount?: int,
    *     comment?: string,
    *     customer_notes?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RefundInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function refund(string $id, array $params = [], array $headers = []): RefundInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#record_refund_for_an_invoice
    *   @param array{
    *     transaction?: array{
    *     amount?: int,
    *     payment_method?: string,
    *     reference_number?: string,
    *     custom_payment_method_id?: string,
    *     date?: int,
    *     },
    * credit_note?: array{
    *     reason_code?: string,
    *     create_reason_code?: string,
    *     },
    * comment?: string,
    *     customer_notes?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RecordRefundInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function recordRefund(string $id, array $params, array $headers = []): RecordRefundInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#retrieve_invoice_as_pdf
    *   @param array{
    *     disposition_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PdfInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function pdf(string $id, array $params = [], array $headers = []): PdfInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#list_invoices_for_a_subscription
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return InvoicesForSubscriptionInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function invoicesForSubscription(string $id, array $params = [], array $headers = []): InvoicesForSubscriptionInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#download_e-invoice
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DownloadEinvoiceInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function downloadEinvoice(string $id, array $headers = []): DownloadEinvoiceInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#create_invoice_for_a_non-recurring_addon
    *   @param array{
    *     customer_id?: string,
    *     subscription_id?: string,
    *     addon_id?: string,
    *     addon_quantity?: int,
    *     addon_unit_price?: int,
    *     addon_quantity_in_decimal?: string,
    *     addon_unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     coupon_ids?: array<string>,
    * coupon?: string,
    *     po_number?: string,
    *     invoice_date?: int,
    *     payment_source_id?: string,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ChargeAddonInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function chargeAddon(array $params, array $headers = []): ChargeAddonInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#add_non-recurring_addon_to_a_pending_invoice
    *   @param array{
    *     line_item?: array{
    *     date_from?: int,
    *     date_to?: int,
    *     },
    * addon_id?: string,
    *     addon_quantity?: int,
    *     addon_unit_price?: int,
    *     addon_quantity_in_decimal?: string,
    *     addon_unit_price_in_decimal?: string,
    *     comment?: string,
    *     subscription_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddAddonChargeInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addAddonCharge(string $id, array $params, array $headers = []): AddAddonChargeInvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/invoices?lang=php#create_invoice_for_a_one-time_charge
    *   @param array{
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     customer_id?: string,
    *     subscription_id?: string,
    *     currency_code?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     coupon_ids?: array<string>,
    * coupon?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     po_number?: string,
    *     invoice_date?: int,
    *     payment_source_id?: string,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ChargeInvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function charge(array $params, array $headers = []): ChargeInvoiceResponse;

}
?>