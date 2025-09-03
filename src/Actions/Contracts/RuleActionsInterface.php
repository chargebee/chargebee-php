<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\RuleResponse\RetrieveRuleResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface RuleActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/rules?lang=php#retrieve_rule_data
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRuleResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveRuleResponse;

}
?>