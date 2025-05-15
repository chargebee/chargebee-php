<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\PaymentScheduleSchemeActionsInterface;
use Chargebee\Responses\PaymentScheduleSchemeResponse\DeletePaymentScheduleSchemeResponse;
use Chargebee\Responses\PaymentScheduleSchemeResponse\RetrievePaymentScheduleSchemeResponse;
use Chargebee\Responses\PaymentScheduleSchemeResponse\CreatePaymentScheduleSchemeResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class PaymentScheduleSchemeActions implements PaymentScheduleSchemeActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes?lang=php#retrieve_a_payment_schedule_scheme
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentScheduleSchemeResponse
    */
    public function retrieve(string $id, array $headers = []): RetrievePaymentScheduleSchemeResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["payment_schedule_schemes",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrievePaymentScheduleSchemeResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes?lang=php#create_a_payment_schedule_scheme
    *   @param array{
    *     flexible_schedules?: array<array{
    *     period?: int,
    *     amount_percentage?: int,
    *     }>,
    *     number_of_schedules?: int,
    *     period_unit?: string,
    *     period?: int,
    *     name?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePaymentScheduleSchemeResponse
    */
    public function create(array $params, array $headers = []): CreatePaymentScheduleSchemeResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_schedule_schemes"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreatePaymentScheduleSchemeResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes?lang=php#delete_a_payment_schedule_scheme
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeletePaymentScheduleSchemeResponse
    */
    public function delete(string $id, array $headers = []): DeletePaymentScheduleSchemeResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_schedule_schemes",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeletePaymentScheduleSchemeResponse::from($respObject->data, $respObject->headers);
    }

}
?>