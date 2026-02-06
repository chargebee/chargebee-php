<?php
namespace Chargebee\Actions;

use Chargebee\Responses\EntitlementOverrideResponse\AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse;
use Chargebee\Responses\EntitlementOverrideResponse\ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Actions\Contracts\EntitlementOverrideActionsInterface;
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

final class EntitlementOverrideActions implements EntitlementOverrideActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlement_overrides/list-entitlement-overrides-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     embed?: string,
    *     include_drafts?: bool,
    *     include_scheduled_overrides?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listEntitlementOverrideForSubscription(string $id, array $params = [], array $headers = []): ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id,"entitlement_overrides"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlement_overrides/upsert-or-remove-entitlement-overrides-for-a-subscription?lang=php-v4
    *   @param array{
    *     entitlement_overrides?: array<array{
    *     feature_id?: string,
    *     entity_id?: string,
    *     entity_type?: string,
    *     value?: string,
    *     expires_at?: int,
    *     effective_from?: int,
    *     is_enabled?: bool,
    *     }>,
    *     action?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addEntitlementOverrideForSubscription(string $id, array $params, array $headers = []): AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"entitlement_overrides"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse::from($respObject->data, $respObject->headers);
    }

}
?>