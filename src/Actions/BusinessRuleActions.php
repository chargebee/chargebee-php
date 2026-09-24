<?php
namespace Chargebee\Actions;

use Chargebee\Responses\BusinessRuleResponse\ApplyRulesBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\ListBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\UpdateDraftBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\ReleaseRuleBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\CreateBusinessRuleResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\BusinessRuleResponse\DeleteBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\RetrieveBusinessRuleResponse;
use Chargebee\Actions\Contracts\BusinessRuleActionsInterface;
use Chargebee\Responses\BusinessRuleResponse\DeactivateRuleBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\DeleteDraftBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\RetrieveDraftBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\ActivateRuleBusinessRuleResponse;
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

final class BusinessRuleActions implements BusinessRuleActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/apply-business-rules?lang=php-v4
    *   @param array{
    *     evaluate?: bool,
    *     rule_id?: string,
    *     ruleset_id?: string,
    *     skip_failed_rules?: bool,
    *     structured_expression?: mixed,
    *     context?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ApplyRulesBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function applyRules(array $params = [], array $headers = []): ApplyRulesBusinessRuleResponse
    {
        $jsonKeys = [
            "structuredExpression" => 0,
            "context" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules","apply_rules"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("applyRules")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ApplyRulesBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/delete-a-business-rule-draft?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteDraftBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deleteDraft(string $id, array $headers = []): DeleteDraftBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules",$id,"delete_draft"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("deleteDraft")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteDraftBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/release-a-business-rule?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReleaseRuleBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function releaseRule(string $id, array $headers = []): ReleaseRuleBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules",$id,"release"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("releaseRule")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ReleaseRuleBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/activate-a-business-rule?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ActivateRuleBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function activateRule(string $id, array $headers = []): ActivateRuleBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules",$id,"activate"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("activateRule")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ActivateRuleBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/retrieve-a-business-rule-draft?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveDraftBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveDraft(string $id, array $headers = []): RetrieveDraftBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["business_rules",$id,"draft"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("retrieveDraft")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveDraftBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/update-a-business-rule-draft?lang=php-v4
    *   @param array{
    *     name?: string,
    *     description?: string,
    *     tags?: array<mixed>,
    * structured_expression?: mixed,
    *     actions_on_success?: array<mixed>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateDraftBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateDraft(string $id, array $params, array $headers = []): UpdateDraftBusinessRuleResponse
    {
        $jsonKeys = [
            "tags" => 0,
            "structuredExpression" => 0,
            "actionsOnSuccess" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules",$id,"draft"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("updateDraft")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateDraftBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/delete-a-business-rule?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("delete")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/deactivate-a-business-rule?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeactivateRuleBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deactivateRule(string $id, array $headers = []): DeactivateRuleBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules",$id,"deactivate"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("deactivateRule")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeactivateRuleBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/retrieve-a-business-rule?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["business_rules",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("retrieve")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/list-business-rules?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     draft?: array{
    *     is?: mixed,
    *     },
    * active?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListBusinessRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["business_rules"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("list")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rules/create-a-business-rule?lang=php-v4
    *   @param array{
    *     id?: string,
    *     name?: string,
    *     description?: string,
    *     tags?: array<mixed>,
    * structured_expression?: mixed,
    *     actions_on_success?: array<mixed>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateBusinessRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateBusinessRuleResponse
    {
        $jsonKeys = [
            "tags" => 0,
            "structuredExpression" => 0,
            "actionsOnSuccess" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_rules"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->withTelemetryResource("businessRule")
        ->withTelemetryOperation("create")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateBusinessRuleResponse::from($respObject->data, $respObject->headers);
    }

}
?>