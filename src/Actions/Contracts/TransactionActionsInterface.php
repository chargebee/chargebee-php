<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\TransactionResponse\ListTransactionResponse;
use Chargebee\Responses\TransactionResponse\RefundTransactionResponse;
use Chargebee\Responses\TransactionResponse\TransactionsForSubscriptionTransactionResponse;
use Chargebee\Responses\TransactionResponse\ReconcileTransactionResponse;
use Chargebee\Responses\TransactionResponse\CreateAuthorizationTransactionResponse;
use Chargebee\Responses\TransactionResponse\DeleteOfflineTransactionTransactionResponse;
use Chargebee\Responses\TransactionResponse\TransactionsForCustomerTransactionResponse;
use Chargebee\Responses\TransactionResponse\RecordRefundTransactionResponse;
use Chargebee\Responses\TransactionResponse\PaymentsForInvoiceTransactionResponse;
use Chargebee\Responses\TransactionResponse\VoidTransactionTransactionResponse;
use Chargebee\Responses\TransactionResponse\SyncTransactionTransactionResponse;
use Chargebee\Responses\TransactionResponse\RetrieveTransactionResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface TransactionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#list_transactions
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
    *     is_present?: mixed,
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
    * payment_source_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * payment_method?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * gateway?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * gateway_account_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * id_at_gateway?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * reference_number?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * type?: array{
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
    * amount?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * amount_capturable?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * status?: array{
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
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#reconcile_transaction
    *   @param array{
    *     id_at_gateway?: string,
    *     customer_id?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReconcileTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function reconcile(string $id, array $params = [], array $headers = []): ReconcileTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#retrieve_a_transaction
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#refund_a_payment
    *   @param array{
    *     amount?: int,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RefundTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function refund(string $id, array $params = [], array $headers = []): RefundTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#list_transactions_for_a_customer
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return TransactionsForCustomerTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function transactionsForCustomer(string $id, array $params = [], array $headers = []): TransactionsForCustomerTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#record_an_offline_refund
    *   @param array{
    *     amount?: int,
    *     payment_method?: string,
    *     date?: int,
    *     reference_number?: string,
    *     custom_payment_method_id?: string,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RecordRefundTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function recordRefund(string $id, array $params, array $headers = []): RecordRefundTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#list_transactions_for_a_subscription
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return TransactionsForSubscriptionTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function transactionsForSubscription(string $id, array $params = [], array $headers = []): TransactionsForSubscriptionTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#void_an_authorization_transaction
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return VoidTransactionTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function voidTransaction(string $id, array $headers = []): VoidTransactionTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#sync_transaction_status
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SyncTransactionTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function syncTransaction(string $id, array $headers = []): SyncTransactionTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#create_an_authorization_payment
    *   @param array{
    *     customer_id?: string,
    *     payment_source_id?: string,
    *     currency_code?: string,
    *     amount?: int,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateAuthorizationTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createAuthorization(array $params, array $headers = []): CreateAuthorizationTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#list_payments_for_an_invoice
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return PaymentsForInvoiceTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function paymentsForInvoice(string $id, array $params = [], array $headers = []): PaymentsForInvoiceTransactionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/transactions?lang=php#delete_an_offline_transaction
    *   @param array{
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteOfflineTransactionTransactionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deleteOfflineTransaction(string $id, array $params = [], array $headers = []): DeleteOfflineTransactionTransactionResponse;

}
?>