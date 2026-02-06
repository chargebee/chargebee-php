<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\OfferEventActionsInterface;
use Chargebee\ValueObjects\Encoders\JsonParamEncoder;
use Chargebee\Responses\OfferEventResponse\OfferEventsOfferEventResponse;
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

final class OfferEventActions implements OfferEventActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_events/create-an-offer-event?lang=php-v4
    *   @param array{
    *     personalized_offer_id?: string,
    *     type?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return OfferEventsOfferEventResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerEvents(array $params, array $headers = []): OfferEventsOfferEventResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["offer_events"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain("grow")
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return OfferEventsOfferEventResponse::from($respObject->data, $respObject->headers);
    }

}
?>