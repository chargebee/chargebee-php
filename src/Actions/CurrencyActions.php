<?php
namespace Chargebee\Actions;

use Chargebee\Responses\CurrencyResponse\CreateCurrencyResponse;
use Chargebee\Actions\Contracts\CurrencyActionsInterface;
use Chargebee\Responses\CurrencyResponse\ListCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\AddScheduleCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\RetrieveCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\RemoveScheduleCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\UpdateCurrencyResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class CurrencyActions implements CurrencyActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#add_schedule
    *   @param array{
    *     manual_exchange_rate?: string,
    *     schedule_at?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddScheduleCurrencyResponse
    */
    public function addSchedule(string $id, array $params, array $headers = []): AddScheduleCurrencyResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["currencies",$id,"add_schedule"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return AddScheduleCurrencyResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#add_a_new_currency
    *   @param array{
    *     currency_code?: string,
    *     forex_type?: string,
    *     manual_exchange_rate?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCurrencyResponse
    */
    public function create(array $params, array $headers = []): CreateCurrencyResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["currencies"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCurrencyResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#retrieve_a_currency
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCurrencyResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveCurrencyResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["currencies",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveCurrencyResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#update_a_currency
    *   @param array{
    *     forex_type?: string,
    *     manual_exchange_rate?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCurrencyResponse
    */
    public function update(string $id, array $params, array $headers = []): UpdateCurrencyResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["currencies",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateCurrencyResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#remove_schedule
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveScheduleCurrencyResponse
    */
    public function removeSchedule(string $id, array $headers = []): RemoveScheduleCurrencyResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["currencies",$id,"remove_schedule"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RemoveScheduleCurrencyResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#list_currencies
    *   
    *   
    *   @param array<string, string> $headers
    *   @return ListCurrencyResponse
    */
    public function all(array $headers = []): ListCurrencyResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["currencies","list"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListCurrencyResponse::from($respObject->data, $respObject->headers);
    }

}
?>