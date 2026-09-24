<?php

namespace Chargebee\Responses\BusinessRuleResponse;
use Chargebee\Resources\ApplyRule\ApplyRule;

use Chargebee\ValueObjects\ResponseBase;

class ApplyRulesBusinessRuleResponse extends ResponseBase { 
    /**
    *
    * @var ?ApplyRule $apply_rule
    */
    public ?ApplyRule $apply_rule;
    

    private function __construct(
        ?ApplyRule $apply_rule,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->apply_rule = $apply_rule;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['apply_rule']) ? ApplyRule::from($resourceAttributes['apply_rule']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->apply_rule instanceof ApplyRule){
            $data['apply_rule'] = $this->apply_rule->toArray();
        } 

        return $data;
    }
}
?>