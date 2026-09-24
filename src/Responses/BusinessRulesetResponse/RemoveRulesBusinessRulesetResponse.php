<?php

namespace Chargebee\Responses\BusinessRulesetResponse;
use Chargebee\Resources\BusinessRuleset\BusinessRuleset;

use Chargebee\ValueObjects\ResponseBase;

class RemoveRulesBusinessRulesetResponse extends ResponseBase { 
    /**
    *
    * @var ?BusinessRuleset $business_ruleset
    */
    public ?BusinessRuleset $business_ruleset;
    

    private function __construct(
        ?BusinessRuleset $business_ruleset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->business_ruleset = $business_ruleset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['business_ruleset']) ? BusinessRuleset::from($resourceAttributes['business_ruleset']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->business_ruleset instanceof BusinessRuleset){
            $data['business_ruleset'] = $this->business_ruleset->toArray();
        } 

        return $data;
    }
}
?>