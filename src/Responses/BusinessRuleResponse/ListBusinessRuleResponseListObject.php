<?php
namespace Chargebee\Responses\BusinessRuleResponse;

use Chargebee\Resources\BusinessRule\BusinessRule;

class ListBusinessRuleResponseListObject
{ 
    public BusinessRule $business_rule;
    public function __construct(
        BusinessRule $business_rule,
    ) { 
        $this->business_rule = $business_rule;
    }
}
