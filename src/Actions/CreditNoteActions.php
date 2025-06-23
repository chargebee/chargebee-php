<?php
namespace Chargebee\Actions;

use Chargebee\Responses\CreditNoteResponse\ResendEinvoiceCreditNoteResponse;
use Chargebee\Actions\Contracts\CreditNoteActionsInterface;
use Chargebee\Responses\CreditNoteResponse\SendEinvoiceCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\ListCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\ImportCreditNoteCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\VoidCreditNoteCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\CreateCreditNoteResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\CreditNoteResponse\DownloadEinvoiceCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RemoveTaxWithheldRefundCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\CreditNotesForCustomerCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RetrieveCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\DeleteCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\PdfCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RefundCreditNoteResponse;
use Chargebee\Responses\CreditNoteResponse\RecordRefundCreditNoteResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class CreditNoteActions implements CreditNoteActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#void_a_credit_note
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return VoidCreditNoteCreditNoteResponse
    */
    public function voidCreditNote(string $id, array $params = [], array $headers = []): VoidCreditNoteCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"void"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return VoidCreditNoteCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#refund_a_credit_note
    *   @param array{
    *     refund_amount?: int,
    *     customer_notes?: string,
    *     refund_reason_code?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RefundCreditNoteResponse
    */
    public function refund(string $id, array $params = [], array $headers = []): RefundCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"refund"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RefundCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#list_credit_notes
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
    */
    public function all(array $params = [], array $headers = []): ListCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["credit_notes"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#create_credit_note
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
    */
    public function create(array $params, array $headers = []): CreateCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#record_refund_for_a_credit_note
    *   @param array{
    *     transaction?: array{
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
    */
    public function recordRefund(string $id, array $params, array $headers = []): RecordRefundCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"record_refund"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RecordRefundCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#import_credit_note
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
    */
    public function importCreditNote(array $params, array $headers = []): ImportCreditNoteCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes","import_credit_note"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ImportCreditNoteCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#delete_a_credit_note
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCreditNoteResponse
    */
    public function delete(string $id, array $params = [], array $headers = []): DeleteCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#list_credit_notes_for_a_customer
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreditNotesForCustomerCreditNoteResponse
    */
    public function creditNotesForCustomer(string $id, array $params = [], array $headers = []): CreditNotesForCustomerCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers",$id,"credit_notes"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreditNotesForCustomerCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#download_e-invoice_for_credit_note
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DownloadEinvoiceCreditNoteResponse
    */
    public function downloadEinvoice(string $id, array $headers = []): DownloadEinvoiceCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["credit_notes",$id,"download_einvoice"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DownloadEinvoiceCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#retrieve_credit_note_as_pdf
    *   @param array{
    *     disposition_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PdfCreditNoteResponse
    */
    public function pdf(string $id, array $params = [], array $headers = []): PdfCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"pdf"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return PdfCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#resend_failed_einvoice_in_credit_notes
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ResendEinvoiceCreditNoteResponse
    */
    public function resendEinvoice(string $id, array $headers = []): ResendEinvoiceCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"resend_einvoice"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ResendEinvoiceCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#remove_tax_withheld_refunds_from_a_credit_note
    *   @param array{
    *     tax_withheld?: array{
    *     id?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveTaxWithheldRefundCreditNoteResponse
    */
    public function removeTaxWithheldRefund(string $id, array $params, array $headers = []): RemoveTaxWithheldRefundCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"remove_tax_withheld_refund"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveTaxWithheldRefundCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#retrieve_a_credit_note
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
    *   @return RetrieveCreditNoteResponse
    */
    public function retrieve(string $id, array $params = [], array $headers = []): RetrieveCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["credit_notes",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_notes?lang=php#send_an_einvoice_for_credit_notes
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SendEinvoiceCreditNoteResponse
    */
    public function sendEinvoice(string $id, array $headers = []): SendEinvoiceCreditNoteResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_notes",$id,"send_einvoice"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return SendEinvoiceCreditNoteResponse::from($respObject->data, $respObject->headers);
    }

}
?>