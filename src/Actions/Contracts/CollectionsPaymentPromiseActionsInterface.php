<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CollectionsPaymentPromiseResponse\UpdateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\CreateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\RetrieveCollectionsPaymentPromiseResponse;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\CancelCollectionsPaymentPromiseResponse;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CollectionsPaymentPromiseActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/collections_payment_promises/list-collections-payment-promises?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     customer_id?: array{
    *     is?: mixed,
    *     },
    * invoice_id?: array{
    *     is?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listCollectionsPaymentPromises(array $params = [], array $headers = []): ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/collections_payment_promises/create-a-collections-payment-promise?lang=php-v4
    *   @param array{
    *     customer_id?: string,
    *     invoice_id?: string,
    *     amount?: int,
    *     currency_code?: string,
    *     promised_on?: int,
    *     reason?: string,
    *     promised_by?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createCollectionsPaymentPromise(array $params, array $headers = []): CreateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/collections_payment_promises/cancel-a-collections-payment-promise?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CancelCollectionsPaymentPromiseResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function cancel(string $id, array $headers = []): CancelCollectionsPaymentPromiseResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/collections_payment_promises/retrieve-a-payment-promise?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCollectionsPaymentPromiseResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveCollectionsPaymentPromiseResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/collections_payment_promises/update-a-collections-payment-promise?lang=php-v4
    *   @param array{
    *     promised_on?: int,
    *     reason?: string,
    *     promised_by?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateCollectionsPaymentPromise(string $id, array $params = [], array $headers = []): UpdateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse;

}
?>