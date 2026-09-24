<?php

namespace Chargebee\Responses\BusinessRuleResponse;
use Chargebee\Resources\BusinessRule\BusinessRule;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveBusinessRuleResponse extends ResponseBase { 
    /**
    *
    * @var ?BusinessRule $business_rule
    */
    public ?BusinessRule $business_rule;
    

    private function __construct(
        ?BusinessRule $business_rule,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->business_rule = $business_rule;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['business_rule']) ? BusinessRule::from($resourceAttributes['business_rule']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->business_rule instanceof BusinessRule){
            $data['business_rule'] = $this->business_rule->toArray();
        } 

        return $data;
    }
}
?>