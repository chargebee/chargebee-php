<?php

namespace Chargebee\Responses\BusinessRulesetResponse;
use Chargebee\Resources\BusinessRulesetRule\BusinessRulesetRule;

use Chargebee\ValueObjects\ResponseBase;

class ListRulesBusinessRulesetResponse extends ResponseBase { 
    /**
    *
    * @var ?BusinessRulesetRule $business_ruleset_rule
    */
    public ?BusinessRulesetRule $business_ruleset_rule;
    

    private function __construct(
        ?BusinessRulesetRule $business_ruleset_rule,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->business_ruleset_rule = $business_ruleset_rule;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['business_ruleset_rule']) ? BusinessRulesetRule::from($resourceAttributes['business_ruleset_rule']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->business_ruleset_rule instanceof BusinessRulesetRule){
            $data['business_ruleset_rule'] = $this->business_ruleset_rule->toArray();
        } 

        return $data;
    }
}
?>