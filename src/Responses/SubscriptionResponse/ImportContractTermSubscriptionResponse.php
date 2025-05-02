<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\ContractTerm\ContractTerm;

use Chargebee\ValueObjects\ResponseBase;

class ImportContractTermSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?ContractTerm $contract_term
    */
    public ?ContractTerm $contract_term;
    

    private function __construct(
        ?ContractTerm $contract_term,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->contract_term = $contract_term;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['contract_term']) ? ContractTerm::from($resourceAttributes['contract_term']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->contract_term instanceof ContractTerm){
            $data['contract_term'] = $this->contract_term->toArray();
        } 

        return $data;
    }
}
?>