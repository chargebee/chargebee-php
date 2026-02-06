<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\RuleResponse\RetrieveRuleResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface RuleActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/rules/retrieve-rule-data?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRuleResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveRuleResponse;

}
?>