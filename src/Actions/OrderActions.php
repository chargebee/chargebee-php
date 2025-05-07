<?php
namespace Chargebee\Actions;

use Chargebee\Responses\OrderResponse\UpdateOrderResponse;
use Chargebee\Actions\Contracts\OrderActionsInterface;
use Chargebee\Responses\OrderResponse\ImportOrderOrderResponse;
use Chargebee\Responses\OrderResponse\CancelOrderResponse;
use Chargebee\Responses\OrderResponse\OrdersForInvoiceOrderResponse;
use Chargebee\Responses\OrderResponse\CreateRefundableCreditNoteOrderResponse;
use Chargebee\Responses\OrderResponse\ReopenOrderResponse;
use Chargebee\Responses\OrderResponse\RetrieveOrderResponse;
use Chargebee\Responses\OrderResponse\ListOrderResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\OrderResponse\AssignOrderNumberOrderResponse;
use Chargebee\Responses\OrderResponse\ResendOrderResponse;
use Chargebee\Responses\OrderResponse\CreateOrderResponse;
use Chargebee\Responses\OrderResponse\DeleteOrderResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class OrderActions implements OrderActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#list_orders
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_deleted?: bool,
    *     exclude_deleted_credit_notes?: bool,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * invoice_id?: array{
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
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * shipping_date?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * shipped_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * order_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * order_date?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * paid_on?: array{
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
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * resent_status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * is_resent?: array{
    *     is?: mixed,
    *     },
    * original_order_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListOrderResponse
    */
    public function all(array $params = [], array $headers = []): ListOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["orders"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#create_an_order
    *   @param array{
    *     id?: string,
    *     invoice_id?: string,
    *     status?: string,
    *     reference_id?: string,
    *     fulfillment_status?: string,
    *     note?: string,
    *     tracking_id?: string,
    *     tracking_url?: string,
    *     batch_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateOrderResponse
    */
    public function create(array $params, array $headers = []): CreateOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#import_an_order
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
    * id?: string,
    *     document_number?: string,
    *     invoice_id?: string,
    *     status?: string,
    *     subscription_id?: string,
    *     customer_id?: string,
    *     created_at?: int,
    *     order_date?: int,
    *     shipping_date?: int,
    *     reference_id?: string,
    *     fulfillment_status?: string,
    *     note?: string,
    *     tracking_id?: string,
    *     tracking_url?: string,
    *     batch_id?: string,
    *     shipment_carrier?: string,
    *     shipping_cut_off_date?: int,
    *     delivered_at?: int,
    *     shipped_at?: int,
    *     cancelled_at?: int,
    *     cancellation_reason?: string,
    *     refundable_credits_issued?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ImportOrderOrderResponse
    */
    public function importOrder(array $params, array $headers = []): ImportOrderOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders","import_order"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ImportOrderOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#assign_order_number
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AssignOrderNumberOrderResponse
    */
    public function assignOrderNumber(string $id, array $headers = []): AssignOrderNumberOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders",$id,"assign_order_number"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return AssignOrderNumberOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#resend_an_order
    *   @param array{
    *     order_line_items?: array<array{
    *     id?: string,
    *     fulfillment_quantity?: int,
    *     }>,
    *     shipping_date?: int,
    *     resend_reason?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ResendOrderResponse
    */
    public function resend(string $id, array $params = [], array $headers = []): ResendOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders",$id,"resend"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ResendOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#reopen_a_cancelled_order
    *   @param array{
    *     void_cancellation_credit_notes?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReopenOrderResponse
    */
    public function reopen(string $id, array $params = [], array $headers = []): ReopenOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders",$id,"reopen"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ReopenOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#list_orders_for_an_invoice
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OrdersForInvoiceOrderResponse
    */
    public function ordersForInvoice(string $id, array $params = [], array $headers = []): OrdersForInvoiceOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["invoices",$id,"orders"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return OrdersForInvoiceOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#cancel_an_order
    *   @param array{
    *     credit_note?: array{
    *     total?: int,
    *     },
    * cancellation_reason?: string,
    *     customer_notes?: string,
    *     comment?: string,
    *     cancelled_at?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CancelOrderResponse
    */
    public function cancel(string $id, array $params, array $headers = []): CancelOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders",$id,"cancel"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CancelOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#retrieve_an_order
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOrderResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["orders",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#update_an_order
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
    * order_line_items?: array<array{
    *     id?: string,
    *     status?: string,
    *     sku?: string,
    *     }>,
    *     reference_id?: string,
    *     batch_id?: string,
    *     note?: string,
    *     shipping_date?: int,
    *     order_date?: int,
    *     cancelled_at?: int,
    *     cancellation_reason?: string,
    *     shipped_at?: int,
    *     delivered_at?: int,
    *     tracking_url?: string,
    *     tracking_id?: string,
    *     shipment_carrier?: string,
    *     fulfillment_status?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateOrderResponse
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#delete_an_imported_order
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteOrderResponse
    */
    public function delete(string $id, array $headers = []): DeleteOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteOrderResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/orders?lang=php#create_a_refundable_credit_note
    *   @param array{
    *     credit_note?: array{
    *     reason_code?: string,
    *     total?: int,
    *     },
    * customer_notes?: string,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateRefundableCreditNoteOrderResponse
    */
    public function createRefundableCreditNote(string $id, array $params, array $headers = []): CreateRefundableCreditNoteOrderResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["orders",$id,"create_refundable_credit_note"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateRefundableCreditNoteOrderResponse::from($respObject->data, $respObject->headers);
    }

}
?>