<?php
namespace Chargebee\Actions;

use Chargebee\Responses\QuoteEntitlementResponse\ListQuoteEntitlementsQuoteEntitlementResponse;
use Chargebee\Actions\Contracts\QuoteEntitlementActionsInterface;
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

final class QuoteEntitlementActions implements QuoteEntitlementActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quote_entitlements/list-quote-entitlements?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     entity_id?: array{
    *     is?: mixed,
    *     },
    * start_date?: array{
    *     on?: mixed,
    *     },
    * end_date?: array{
    *     on?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListQuoteEntitlementsQuoteEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listQuoteEntitlements(string $id, array $params = [], array $headers = []): ListQuoteEntitlementsQuoteEntitlementResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["quotes",$id,"quote_entitlements"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("quoteEntitlement")
        ->withTelemetryOperation("listQuoteEntitlements")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListQuoteEntitlementsQuoteEntitlementResponse::from($respObject->data, $respObject->headers);
    }

}
?>