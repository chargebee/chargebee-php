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

final class PaymentIntentActions implements PaymentIntentActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents?lang=php#retrieve_a_payment_intent
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentIntentResponse
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
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrievePaymentIntentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents?lang=php#update_a_payment_intent
    *   @param array{
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePaymentIntentResponse
    */
    public function update(string $id, array $params = [], array $headers = []): UpdatePaymentIntentResponse
    {
        $jsonKeys = [
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
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdatePaymentIntentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents?lang=php#create_a_payment_intent
    *   @param array{
    *     business_entity_id?: string,
    *     customer_id?: string,
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePaymentIntentResponse
    */
    public function create(array $params, array $headers = []): CreatePaymentIntentResponse
    {
        $jsonKeys = [
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
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreatePaymentIntentResponse::from($respObject->data, $respObject->headers);
    }

}
?>