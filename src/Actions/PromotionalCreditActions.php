<?php
namespace Chargebee\Actions;

use Chargebee\Responses\PromotionalCreditResponse\RetrievePromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\AddPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\ListPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\DeductPromotionalCreditResponse;
use Chargebee\Actions\Contracts\PromotionalCreditActionsInterface;
use Chargebee\Responses\PromotionalCreditResponse\SetPromotionalCreditResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class PromotionalCreditActions implements PromotionalCreditActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#retrieve_a_promotional_credit
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePromotionalCreditResponse
    */
    public function retrieve(string $id, array $headers = []): RetrievePromotionalCreditResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["promotional_credits",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrievePromotionalCreditResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#list_promotional_credits
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListPromotionalCreditResponse
    */
    public function all(array $params = [], array $headers = []): ListPromotionalCreditResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["promotional_credits"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListPromotionalCreditResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#deduct_promotional_credits
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return DeductPromotionalCreditResponse
    */
    public function deduct(array $params, array $headers = []): DeductPromotionalCreditResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["promotional_credits","deduct"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeductPromotionalCreditResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#set_promotional_credits
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return SetPromotionalCreditResponse
    */
    public function set(array $params, array $headers = []): SetPromotionalCreditResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["promotional_credits","set"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return SetPromotionalCreditResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#add_promotional_credits
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AddPromotionalCreditResponse
    */
    public function add(array $params, array $headers = []): AddPromotionalCreditResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["promotional_credits","add"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return AddPromotionalCreditResponse::from($respObject->data, $respObject->headers);
    }

}
?>