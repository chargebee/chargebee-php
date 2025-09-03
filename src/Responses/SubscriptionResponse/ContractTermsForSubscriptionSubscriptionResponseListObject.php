<?php
namespace Chargebee\Responses\SubscriptionResponse;

use Chargebee\Resources\ContractTerm\ContractTerm;

class ContractTermsForSubscriptionSubscriptionResponseListObject
{ 
    public ContractTerm $contract_term;
    public function __construct(
        ContractTerm $contract_term,
    ) { 
        $this->contract_term = $contract_term;
    }
}
