<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\RecordedPurchaseActionsInterface;
use Chargebee\Responses\RecordedPurchaseResponse\RetrieveRecordedPurchaseResponse;
use Chargebee\Responses\RecordedPurchaseResponse\CreateRecordedPurchaseResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

final class RecordedPurchaseActions implements RecordedPurchaseActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#retrieve_a_recorded_purchase
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRecordedPurchaseResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveRecordedPurchaseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["recorded_purchases",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveRecordedPurchaseResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#record_a_purchase
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     },
    * apple_app_store?: array{
    *     transaction_id?: string,
    *     receipt?: string,
    *     product_id?: string,
    *     },
    * google_play_store?: array{
    *     purchase_token?: string,
    *     product_id?: string,
    *     order_id?: string,
    *     },
    * omnichannel_subscription?: array{
    *     id?: string,
    *     },
    * app_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateRecordedPurchaseResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateRecordedPurchaseResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["recorded_purchases"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateRecordedPurchaseResponse::from($respObject->data, $respObject->headers);
    }

}
?>