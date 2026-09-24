<?php
namespace Chargebee\Responses\BusinessRulesetResponse;

use Chargebee\Resources\BusinessRuleset\BusinessRuleset;

class ListBusinessRulesetResponseListObject
{ 
    public BusinessRuleset $business_ruleset;
    public function __construct(
        BusinessRuleset $business_ruleset,
    ) { 
        $this->business_ruleset = $business_ruleset;
    }
}
