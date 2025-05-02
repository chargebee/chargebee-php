<?php

namespace Chargebee\Responses\RuleResponse;
use Chargebee\Resources\Rule\Rule;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveRuleResponse extends ResponseBase { 
    /**
    *
    * @var ?Rule $rule
    */
    public ?Rule $rule;
    

    private function __construct(
        ?Rule $rule,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->rule = $rule;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['rule']) ? Rule::from($resourceAttributes['rule']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->rule instanceof Rule){
            $data['rule'] = $this->rule->toArray();
        } 

        return $data;
    }
}
?>