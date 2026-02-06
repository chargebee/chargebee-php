<?php
namespace Chargebee\Actions;

use Chargebee\Responses\OfferFulfillmentResponse\OfferFulfillmentsUpdateOfferFulfillmentResponse;
use Chargebee\Actions\Contracts\OfferFulfillmentActionsInterface;
use Chargebee\Responses\OfferFulfillmentResponse\OfferFulfillmentsGetOfferFulfillmentResponse;
use Chargebee\Responses\OfferFulfillmentResponse\OfferFulfillmentsOfferFulfillmentResponse;
use Chargebee\ValueObjects\Encoders\JsonParamEncoder;
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

final class OfferFulfillmentActions implements OfferFulfillmentActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_fulfillments/create-an-offer-fulfillment?lang=php-v4
    *   @param array{
    *     personalized_offer_id?: string,
    *     option_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return OfferFulfillmentsOfferFulfillmentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerFulfillments(array $params, array $headers = []): OfferFulfillmentsOfferFulfillmentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["offer_fulfillments"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain("grow")
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return OfferFulfillmentsOfferFulfillmentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_fulfillments/retrieve-an-offer-fulfillment?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OfferFulfillmentsGetOfferFulfillmentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerFulfillmentsGet(string $id, array $headers = []): OfferFulfillmentsGetOfferFulfillmentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["offer_fulfillments",$id])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain("grow")
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return OfferFulfillmentsGetOfferFulfillmentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_fulfillments/update-an-offer-fulfillment?lang=php-v4
    *   @param array{
    *     id?: string,
    *     status?: string,
    *     failure_reason?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OfferFulfillmentsUpdateOfferFulfillmentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerFulfillmentsUpdate(string $id, array $params, array $headers = []): OfferFulfillmentsUpdateOfferFulfillmentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["offer_fulfillments",$id])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain("grow")
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return OfferFulfillmentsUpdateOfferFulfillmentResponse::from($respObject->data, $respObject->headers);
    }

}
?>