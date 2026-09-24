<?php
namespace Chargebee\Actions;

use Chargebee\Responses\PaymentIntentResponse\UpdatePaymentIntentResponse;
use Chargebee\Responses\PaymentIntentResponse\RetrievePaymentIntentResponse;
use Chargebee\Responses\PaymentIntentResponse\CreatePaymentIntentResponse;
use Chargebee\Actions\Contracts\PaymentIntentActionsInterface;
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

final class PaymentIntentActions implements PaymentIntentActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents/retrieve-a-payment-intent?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentIntentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePaymentIntentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["payment_intents",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withTelemetryResource("paymentIntent")
        ->withTelemetryOperation("retrieve")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrievePaymentIntentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents/update-a-payment-intent?lang=php-v4
    *   @param array{
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     payment_method_options?: mixed,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePaymentIntentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdatePaymentIntentResponse
    {
        $jsonKeys = [
            "paymentMethodOptions" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_intents",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("paymentIntent")
        ->withTelemetryOperation("update")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdatePaymentIntentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents/create-a-payment-intent?lang=php-v4
    *   @param array{
    *     business_entity_id?: string,
    *     brand_id?: string,
    *     customer_id?: string,
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     defer_payment_method_type?: bool,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     payment_method_options?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePaymentIntentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreatePaymentIntentResponse
    {
        $jsonKeys = [
            "paymentMethodOptions" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_intents"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("paymentIntent")
        ->withTelemetryOperation("create")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreatePaymentIntentResponse::from($respObject->data, $respObject->headers);
    }

}
?>