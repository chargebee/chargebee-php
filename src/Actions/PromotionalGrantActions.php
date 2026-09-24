<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\PromotionalGrantActionsInterface;
use Chargebee\Responses\PromotionalGrantResponse\PromotionalGrantsPromotionalGrantResponse;
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

final class PromotionalGrantActions implements PromotionalGrantActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_grants/create-promotional-grant?lang=php-v4
    *   @param array{
    *     subscription_id?: string,
    *     unit_id?: string,
    *     id?: string,
    *     amount?: string,
    *     effective_from?: int,
    *     expires_at?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PromotionalGrantsPromotionalGrantResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function promotionalGrants(array $params, array $headers = []): PromotionalGrantsPromotionalGrantResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["promotional_grants"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("promotionalGrant")
        ->withTelemetryOperation("promotionalGrants")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return PromotionalGrantsPromotionalGrantResponse::from($respObject->data, $respObject->headers);
    }

}
?>