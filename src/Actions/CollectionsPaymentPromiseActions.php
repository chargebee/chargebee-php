<?php
namespace Chargebee\Actions;

use Chargebee\Responses\CollectionsPaymentPromiseResponse\UpdateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse;
use Chargebee\Actions\Contracts\CollectionsPaymentPromiseActionsInterface;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\CreateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\RetrieveCollectionsPaymentPromiseResponse;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\CancelCollectionsPaymentPromiseResponse;
use Chargebee\Responses\CollectionsPaymentPromiseResponse\ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

final class CollectionsPaymentPromiseActions implements CollectionsPaymentPromiseActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

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
    public function listCollectionsPaymentPromises(array $params = [], array $headers = []): ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["collections_payment_promises"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("collectionsPaymentPromise")
        ->withTelemetryOperation("listCollectionsPaymentPromises")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponse::from($respObject->data, $respObject->headers);
    }

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
    public function createCollectionsPaymentPromise(array $params, array $headers = []): CreateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["collections_payment_promises"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->withTelemetryResource("collectionsPaymentPromise")
        ->withTelemetryOperation("createCollectionsPaymentPromise")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse::from($respObject->data, $respObject->headers);
    }

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
    public function cancel(string $id, array $headers = []): CancelCollectionsPaymentPromiseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["collections_payment_promises",$id,"cancel"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(false)
        ->withTelemetryResource("collectionsPaymentPromise")
        ->withTelemetryOperation("cancel")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CancelCollectionsPaymentPromiseResponse::from($respObject->data, $respObject->headers);
    }

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
    public function retrieve(string $id, array $headers = []): RetrieveCollectionsPaymentPromiseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["collections_payment_promises",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withTelemetryResource("collectionsPaymentPromise")
        ->withTelemetryOperation("retrieve")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveCollectionsPaymentPromiseResponse::from($respObject->data, $respObject->headers);
    }

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
    public function updateCollectionsPaymentPromise(string $id, array $params = [], array $headers = []): UpdateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["collections_payment_promises",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("collectionsPaymentPromise")
        ->withTelemetryOperation("updateCollectionsPaymentPromise")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse::from($respObject->data, $respObject->headers);
    }

}
?>