<?php
namespace Chargebee\Actions;

use Chargebee\Responses\CreditUnitResponse\CreateCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\ReactivateCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\ListCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\UpdateCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\ArchiveCreditUnitResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Actions\Contracts\CreditUnitActionsInterface;
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

final class CreditUnitActions implements CreditUnitActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/list-credit-units?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     status?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListCreditUnitResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["credit_units"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("creditUnit")
        ->withTelemetryOperation("list")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListCreditUnitResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/create-a-credit-unit?lang=php-v4
    *   @param array{
    *     id?: string,
    *     name?: string,
    *     is_unlimited?: bool,
    *     overdraft_amount?: string,
    *     external_name?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateCreditUnitResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_units"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("creditUnit")
        ->withTelemetryOperation("create")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCreditUnitResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/archive-a-credit-unit?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ArchiveCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function archive(string $id, array $headers = []): ArchiveCreditUnitResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_units",$id,"archive_command"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->withTelemetryResource("creditUnit")
        ->withTelemetryOperation("archive")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ArchiveCreditUnitResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/update-a-credit-unit?lang=php-v4
    *   @param array{
    *     name?: string,
    *     external_name?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateCreditUnitResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_units",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("creditUnit")
        ->withTelemetryOperation("update")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateCreditUnitResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/reactivate-a-credit-unit?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReactivateCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function reactivate(string $id, array $headers = []): ReactivateCreditUnitResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["credit_units",$id,"reactivate_command"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->withTelemetryResource("creditUnit")
        ->withTelemetryOperation("reactivate")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ReactivateCreditUnitResponse::from($respObject->data, $respObject->headers);
    }

}
?>