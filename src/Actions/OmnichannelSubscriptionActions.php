<?php
namespace Chargebee\Actions;

use Chargebee\Responses\OmnichannelSubscriptionResponse\RetrieveOmnichannelSubscriptionResponse;
use Chargebee\Responses\OmnichannelSubscriptionResponse\OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse;
use Chargebee\Responses\OmnichannelSubscriptionResponse\ListOmnichannelSubscriptionResponse;
use Chargebee\Actions\Contracts\OmnichannelSubscriptionActionsInterface;
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

final class OmnichannelSubscriptionActions implements OmnichannelSubscriptionActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions?lang=php#retrieve_an_omnichannel_subscription
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveOmnichannelSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["omnichannel_subscriptions",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveOmnichannelSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions?lang=php#list_omnichannel_transactions_of_an_omnichannel_subscription
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function omnichannelTransactionsForOmnichannelSubscription(string $id, array $params = [], array $headers = []): OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["omnichannel_subscriptions",$id,"omnichannel_transactions"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscriptions?lang=php#list_omnichannel_subscriptions
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     source?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListOmnichannelSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListOmnichannelSubscriptionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["omnichannel_subscriptions"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListOmnichannelSubscriptionResponse::from($respObject->data, $respObject->headers);
    }

}
?>