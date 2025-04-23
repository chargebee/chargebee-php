<?php
namespace Chargebee\Actions;

use Chargebee\Responses\NonSubscriptionResponse\ProcessReceiptNonSubscriptionResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class NonSubscriptionActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/non_subscriptions?lang=php#one_time_purchase
    *   @param array{
    *     product?: array{
    *     id?: string,
    *     currency_code?: string,
    *     price?: int,
    *     type?: string,
    *     name?: string,
    *     price_in_decimal?: string,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     },
    * receipt?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ProcessReceiptNonSubscriptionResponse
    */
    public function processReceipt(string $id, array $params, array $headers = []): ProcessReceiptNonSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["non_subscriptions",$id,"one_time_purchase"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ProcessReceiptNonSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

}
?>