<?php
namespace Chargebee\Actions;

use Chargebee\Responses\OmnichannelSubscriptionItemResponse\ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Actions\Contracts\OmnichannelSubscriptionItemActionsInterface;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class OmnichannelSubscriptionItemActions implements OmnichannelSubscriptionItemActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_subscription_items?lang=php#list_scheduled_changes_for_omnichannel_subscription_item
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse
    */
    public function listOmniSubItemScheduleChanges(string $id, array $params = [], array $headers = []): ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["omnichannel_subscription_items",$id,"scheduled_changes"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse::from($respObject->data, $respObject->headers);
    }

}
?>