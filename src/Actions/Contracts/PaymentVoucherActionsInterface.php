<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PaymentVoucherResponse\PaymentVouchersForCustomerPaymentVoucherResponse;
use Chargebee\Responses\PaymentVoucherResponse\RetrievePaymentVoucherResponse;
use Chargebee\Responses\PaymentVoucherResponse\PaymentVouchersForInvoicePaymentVoucherResponse;
use Chargebee\Responses\PaymentVoucherResponse\CreatePaymentVoucherResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PaymentVoucherActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_vouchers?lang=php#list_vouchers_for_a_customer
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PaymentVouchersForCustomerPaymentVoucherResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function paymentVouchersForCustomer(string $id, array $params = [], array $headers = []): PaymentVouchersForCustomerPaymentVoucherResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_vouchers?lang=php#list_vouchers_for_an_invoice
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PaymentVouchersForInvoicePaymentVoucherResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function paymentVouchersForInvoice(string $id, array $params = [], array $headers = []): PaymentVouchersForInvoicePaymentVoucherResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_vouchers?lang=php#retrieve_voucher_data
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentVoucherResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrievePaymentVoucherResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_vouchers?lang=php#create_a_voucher_for_the_customer_to_initiate_payment
    *   @param array{
    *     voucher_payment_source?: array{
    *     voucher_type?: string,
    *     },
    * invoice_allocations?: array<array{
    *     invoice_id?: string,
    *     }>,
    *     customer_id?: string,
    *     payment_source_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePaymentVoucherResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreatePaymentVoucherResponse;

}
?>