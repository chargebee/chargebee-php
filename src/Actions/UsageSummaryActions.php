<?php
namespace Chargebee\Actions;

use Chargebee\Responses\UsageSummaryResponse\RetrieveUsageSummaryForSubscriptionUsageSummaryResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Actions\Contracts\UsageSummaryActionsInterface;
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

final class UsageSummaryActions implements UsageSummaryActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_summaries/retrieve-usage-summary-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: string,
    *     window_size?: string,
    *     timeframe_start?: int,
    *     timeframe_end?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return RetrieveUsageSummaryForSubscriptionUsageSummaryResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveUsageSummaryForSubscription(string $id, array $params, array $headers = []): RetrieveUsageSummaryForSubscriptionUsageSummaryResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["subscriptions",$id,"usage_summary"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveUsageSummaryForSubscriptionUsageSummaryResponse::from($respObject->data, $respObject->headers);
    }

}
?>