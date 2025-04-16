<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\ContractTerm\ContractTerm;

use Chargebee\ValueObjects\ResponseBase;

class ImportContractTermSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ContractTerm $contract_term
    */
    public ContractTerm $contract_term;
    

    private function __construct(
        ContractTerm $contract_term,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->contract_term = $contract_term;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             ContractTerm::from($resourceAttributes['contract_term']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'contract_term' => $this->contract_term->toArray(),
        ]);
        

        return $data;
    }
}
?>