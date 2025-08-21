<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\CustomerEntitlementActionsInterface;
use Chargebee\Responses\CustomerEntitlementResponse\EntitlementsForCustomerCustomerEntitlementResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class CustomerEntitlementActions implements CustomerEntitlementActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customer_entitlements?lang=php#list_customer_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     consolidate_entitlements?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EntitlementsForCustomerCustomerEntitlementResponse
    */
    public function entitlementsForCustomer(string $id, array $params = [], array $headers = []): EntitlementsForCustomerCustomerEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers",$id,"customer_entitlements"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return EntitlementsForCustomerCustomerEntitlementResponse::from($respObject->data, $respObject->headers);
    }

}
?>