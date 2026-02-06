<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CreditNoteResponse\ResendEinvoiceCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\SendEinvoiceCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\ImportCreditNoteCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\ListCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\VoidCreditNoteCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\CreateCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\DownloadEinvoiceCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RemoveTaxWithheldRefundCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\CreditNotesForCustomerCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RetrieveCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\DeleteCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\PdfCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RefundCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RecordRefundCreditNoteResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CreditNoteActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/record-refund-for-a-credit-note?lang=php-v4
    *   @param array{
    *     transaction?: array{
    *     id?: string,
    *     amount?: int,
    *     payment_method?: string,
    *     reference_number?: string,
    *     custom_payment_method_id?: string,
    *     date?: int,
    *     },
    * refund_reason_code?: string,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RecordRefundCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function recordRefund(string $id, array $params, array $headers = []): RecordRefundCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/import-credit-note?lang=php-v4
    *   @param array{
    *     line_items?: array<array{
    *     reference_line_item_id?: string,
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
    *     line_item_id?: string,
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
    *     allocations?: array<array{
    *     invoice_id?: string,
    *     allocated_amount?: int,
    *     allocated_at?: int,
    *     }>,
    *     linked_refunds?: array<array{
    *     id?: string,
    *     amount?: int,
    *     payment_method?: string,
    *     date?: int,
    *     reference_number?: string,
    *     }>,
    *     id?: string,
    *     customer_id?: string,
    *     subscription_id?: string,
    *     reference_invoice_id?: string,
    *     type?: string,
    *     currency_code?: string,
    *     create_reason_code?: string,
    *     date?: int,
    *     status?: string,
    *     total?: int,
    *     refunded_at?: int,
    *     voided_at?: int,
    *     sub_total?: int,
    *     round_off_amount?: int,
    *     fractional_correction?: int,
    *     vat_number_prefix?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ImportCreditNoteCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importCreditNote(array $params, array $headers = []): ImportCreditNoteCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/delete-a-credit-note?lang=php-v4
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $params = [], array $headers = []): DeleteCreditNoteResponse;

    /**
    *   
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return CreditNotesForCustomerCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function creditNotesForCustomer(string $id, array $params = [], array $headers = []): CreditNotesForCustomerCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/retrieve-credit-note-as-pdf?lang=php-v4
    *   @param array{
    *     disposition_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PdfCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function pdf(string $id, array $params = [], array $headers = []): PdfCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/send-an-einvoice-for-credit-notes?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SendEinvoiceCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function sendEinvoice(string $id, array $headers = []): SendEinvoiceCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/void-a-credit-note?lang=php-v4
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return VoidCreditNoteCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function voidCreditNote(string $id, array $params = [], array $headers = []): VoidCreditNoteCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/refund-a-credit-note?lang=php-v4
    *   @param array{
    *     refund_amount?: int,
    *     customer_notes?: string,
    *     refund_reason_code?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RefundCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function refund(string $id, array $params = [], array $headers = []): RefundCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/list-credit-notes?lang=php-v4
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
    * include_deleted?: bool,
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
    * reference_invoice_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * reason_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * create_reason_code?: array{
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
    * date?: array{
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
    * price_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * amount_allocated?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * amount_refunded?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * amount_available?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * voided_at?: array{
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
    * channel?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/create-credit-note?lang=php-v4
    *   @param array{
    *     line_items?: array<array{
    *     reference_line_item_id?: string,
    *     unit_amount?: int,
    *     unit_amount_in_decimal?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     amount?: int,
    *     date_from?: int,
    *     date_to?: int,
    *     description?: string,
    *     entity_type?: string,
    *     entity_id?: string,
    *     }>,
    *     reference_invoice_id?: string,
    *     customer_id?: string,
    *     total?: int,
    *     type?: string,
    *     reason_code?: string,
    *     create_reason_code?: string,
    *     date?: int,
    *     customer_notes?: string,
    *     currency_code?: string,
    *     comment?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/download-e-invoice-for-credit-note?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DownloadEinvoiceCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function downloadEinvoice(string $id, array $headers = []): DownloadEinvoiceCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/resend-failed-einvoice-in-credit-notes?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ResendEinvoiceCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function resendEinvoice(string $id, array $headers = []): ResendEinvoiceCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/remove-tax-withheld-refunds-from-a-credit-note?lang=php-v4
    *   @param array{
    *     tax_withheld?: array{
    *     id?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveTaxWithheldRefundCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeTaxWithheldRefund(string $id, array $params, array $headers = []): RemoveTaxWithheldRefundCreditNoteResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes/retrieve-a-credit-note?lang=php-v4
    *   @param array{
    *     line_item?: array{
    *     subscription_id?: array{
    *         is?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             },
    *     },
    * line_items_limit?: int,
    *     line_items_offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCreditNoteResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $params = [], array $headers = []): RetrieveCreditNoteResponse;

}
?>