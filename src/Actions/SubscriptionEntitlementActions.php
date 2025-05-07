<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\SubscriptionEntitlementActionsInterface;
use Chargebee\Responses\SubscriptionEntitlementResponse\SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse;
use Chargebee\Responses\SubscriptionEntitlementResponse\SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class SubscriptionEntitlementActions implements SubscriptionEntitlementActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscription_entitlements?lang=php#enable/disable_subscription_entitlements
    *   @param array{
    *     subscription_entitlements?: array<array{
    *     feature_id?: string,
    *     }>,
    *     is_enabled?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse
    */
    public function setSubscriptionEntitlementAvailability(string $id, array $params, array $headers = []): SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["subscriptions",$id,"subscription_entitlements/set_availability"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/subscription_entitlements?lang=php#list_subscription_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_drafts?: bool,
    *     embed?: string,
    *     include_scheduled_overrides?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse
    */
    public function subscriptionEntitlementsForSubscription(string $id, array $params = [], array $headers = []): SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id,"subscription_entitlements"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse::from($respObject->data, $respObject->headers);
    }

}
?>