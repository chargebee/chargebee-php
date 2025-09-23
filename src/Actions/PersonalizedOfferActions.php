<?php
namespace Chargebee\Actions;

use Chargebee\Responses\PersonalizedOfferResponse\PersonalizedOffersPersonalizedOfferResponse;
use Chargebee\Actions\Contracts\PersonalizedOfferActionsInterface;
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

final class PersonalizedOfferActions implements PersonalizedOfferActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/personalized_offers?lang=php#list_personalized_offers
    *   @param array{
    *     request_context?: array{
    *     user_agent?: string,
    *     locale?: string,
    *     timezone?: string,
    *     url?: string,
    *     referrer_url?: string,
    *     },
    * first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     roles?: array<string>,
    * external_user_id?: string,
    *     subscription_id?: string,
    *     customer_id?: string,
    *     custom?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PersonalizedOffersPersonalizedOfferResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function personalizedOffers(array $params, array $headers = []): PersonalizedOffersPersonalizedOfferResponse
    {
        $jsonKeys = [
            "custom" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["personalized_offers"])
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
        return PersonalizedOffersPersonalizedOfferResponse::from($respObject->data, $respObject->headers);
    }

}
?>