<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\BusinessRulesetResponse\DeactivateBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\UpdateBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\AddRulesBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\RetrieveBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\ListRulesBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\CreateBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\DeleteBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\RemoveRulesBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\ListBusinessRulesetResponse;
use Chargebee\Responses\BusinessRulesetResponse\ActivateBusinessRulesetResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface BusinessRulesetActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/retrieve-a-business-ruleset?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/update-a-business-ruleset?lang=php-v4
    *   @param array{
    *     name?: string,
    *     description?: string,
    *     execute_mode?: string,
    *     rules?: array<mixed>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params, array $headers = []): UpdateBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/remove-business-rules-from-a-ruleset?lang=php-v4
    *   @param array{
    *     rules?: array<mixed>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveRulesBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeRules(string $id, array $params = [], array $headers = []): RemoveRulesBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/delete-a-business-ruleset?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/deactivate-a-business-ruleset?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeactivateBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deactivate(string $id, array $headers = []): DeactivateBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/list-rules-in-a-business-ruleset?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     active?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListRulesBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listRules(string $id, array $params = [], array $headers = []): ListRulesBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/list-business-rulesets?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     active?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/create-a-business-ruleset?lang=php-v4
    *   @param array{
    *     id?: string,
    *     name?: string,
    *     description?: string,
    *     execute_mode?: string,
    *     rules?: array<mixed>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/activate-a-business-ruleset?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ActivateBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function activate(string $id, array $headers = []): ActivateBusinessRulesetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_rulesets/add-business-rules-to-a-ruleset?lang=php-v4
    *   @param array{
    *     rules?: array<mixed>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddRulesBusinessRulesetResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addRules(string $id, array $params = [], array $headers = []): AddRulesBusinessRulesetResponse;

}
?>