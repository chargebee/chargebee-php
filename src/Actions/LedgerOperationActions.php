<?php
namespace Chargebee\Actions;

use Chargebee\Responses\LedgerOperationResponse\CaptureLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\CaptureAuthorizationLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\RetrieveLedgerOperationLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\AllocateLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\ReleaseAuthorizationLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\ListLedgerOperationsLedgerOperationResponse;
use Chargebee\Actions\Contracts\LedgerOperationActionsInterface;
use Chargebee\ValueObjects\Encoders\JsonParamEncoder;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\LedgerOperationResponse\AuthorizeLedgerOperationResponse;
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

final class LedgerOperationActions implements LedgerOperationActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/release-authorization?lang=php-v4
    *   @param array{
    *     authorization_id?: string,
    *     id?: string,
    *     ledger_operation_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ReleaseAuthorizationLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function releaseAuthorization(array $params, array $headers = []): ReleaseAuthorizationLedgerOperationResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ledger_operations","release_authorization"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->withTelemetryResource("ledgerOperation")
        ->withTelemetryOperation("releaseAuthorization")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ReleaseAuthorizationLedgerOperationResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/capture?lang=php-v4
    *   @param array{
    *     id?: string,
    *     subscription_id?: string,
    *     unit_id?: string,
    *     amount?: string,
    *     ledger_operation_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CaptureLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function capture(array $params, array $headers = []): CaptureLedgerOperationResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ledger_operations","capture"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->withTelemetryResource("ledgerOperation")
        ->withTelemetryOperation("capture")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CaptureLedgerOperationResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/allocate?lang=php-v4
    *   @param array{
    *     subscription_id?: string,
    *     unit_id?: string,
    *     amount?: string,
    *     expires_at?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AllocateLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function allocate(array $params, array $headers = []): AllocateLedgerOperationResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ledger_operations","allocate"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->withTelemetryResource("ledgerOperation")
        ->withTelemetryOperation("allocate")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AllocateLedgerOperationResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/authorize?lang=php-v4
    *   @param array{
    *     id?: string,
    *     subscription_id?: string,
    *     unit_id?: string,
    *     amount?: string,
    *     ledger_operation_timestamp?: int,
    *     auto_release_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AuthorizeLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function authorize(array $params, array $headers = []): AuthorizeLedgerOperationResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ledger_operations","authorize"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->withTelemetryResource("ledgerOperation")
        ->withTelemetryOperation("authorize")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AuthorizeLedgerOperationResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/list-ledger-operations?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     subscription_id?: array{
    *     is?: mixed,
    *     },
    * unit_id?: array{
    *     is?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * type?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListLedgerOperationsLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listLedgerOperations(array $params, array $headers = []): ListLedgerOperationsLedgerOperationResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["ledger_operations"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("ledgerOperation")
        ->withTelemetryOperation("listLedgerOperations")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListLedgerOperationsLedgerOperationResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/capture-authorization?lang=php-v4
    *   @param array{
    *     authorization_id?: string,
    *     id?: string,
    *     amount?: string,
    *     ledger_operation_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CaptureAuthorizationLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function captureAuthorization(array $params, array $headers = []): CaptureAuthorizationLedgerOperationResponse
    {
        $jsonKeys = [
            "metadata" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ledger_operations","capture_authorization"])
        ->withParamEncoder( new JsonParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaderOverride("Content-Type", "application/json")
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->withTelemetryResource("ledgerOperation")
        ->withTelemetryOperation("captureAuthorization")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CaptureAuthorizationLedgerOperationResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/retrieve-ledger-operation?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveLedgerOperationLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveLedgerOperation(string $id, array $headers = []): RetrieveLedgerOperationLedgerOperationResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["ledger_operations",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withTelemetryResource("ledgerOperation")
        ->withTelemetryOperation("retrieveLedgerOperation")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveLedgerOperationLedgerOperationResponse::from($respObject->data, $respObject->headers);
    }

}
?>