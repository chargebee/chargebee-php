<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\BusinessRuleResponse\ApplyRulesBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\RetrieveBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\ListBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\UpdateDraftBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\ReleaseRuleBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\DeactivateRuleBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\CreateBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\DeleteDraftBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\RetrieveDraftBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\ActivateRuleBusinessRuleResponse;
use Chargebee\Responses\BusinessRuleResponse\DeleteBusinessRuleResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface BusinessRuleActionsInterface
{

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
    public function applyRules(array $params = [], array $headers = []): ApplyRulesBusinessRuleResponse;

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
    public function deleteDraft(string $id, array $headers = []): DeleteDraftBusinessRuleResponse;

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
    public function releaseRule(string $id, array $headers = []): ReleaseRuleBusinessRuleResponse;

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
    public function activateRule(string $id, array $headers = []): ActivateRuleBusinessRuleResponse;

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
    public function retrieveDraft(string $id, array $headers = []): RetrieveDraftBusinessRuleResponse;

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
    public function updateDraft(string $id, array $params, array $headers = []): UpdateDraftBusinessRuleResponse;

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
    public function delete(string $id, array $headers = []): DeleteBusinessRuleResponse;

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
    public function deactivateRule(string $id, array $headers = []): DeactivateRuleBusinessRuleResponse;

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
    public function retrieve(string $id, array $headers = []): RetrieveBusinessRuleResponse;

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
    public function all(array $params = [], array $headers = []): ListBusinessRuleResponse;

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
    public function create(array $params, array $headers = []): CreateBusinessRuleResponse;

}
?>