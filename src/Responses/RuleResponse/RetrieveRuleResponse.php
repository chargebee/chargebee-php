<?php

namespace Chargebee\Responses\RuleResponse;
use Chargebee\Resources\Rule\Rule;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveRuleResponse extends ResponseBase { 
    /**
    *
    * @var Rule $rule
    */
    public Rule $rule;
    

    private function __construct(
        Rule $rule,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->rule = $rule;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Rule::from($resourceAttributes['rule']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'rule' => $this->rule->toArray(),
        ]);
        

        return $data;
    }
}
?>