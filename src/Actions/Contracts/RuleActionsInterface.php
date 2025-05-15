<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\RuleResponse\RetrieveRuleResponse;

Interface RuleActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/rules?lang=php#retrieve_rule_data
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRuleResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveRuleResponse;

}
?>