<?php

namespace Chargebee\Responses\LedgerOperationResponse;
use Chargebee\Resources\LedgerOperation\LedgerOperation;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveLedgerOperationLedgerOperationResponse extends ResponseBase { 
    /**
    *
    * @var ?LedgerOperation $ledger_operation
    */
    public ?LedgerOperation $ledger_operation;
    

    private function __construct(
        ?LedgerOperation $ledger_operation,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->ledger_operation = $ledger_operation;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['ledger_operation']) ? LedgerOperation::from($resourceAttributes['ledger_operation']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->ledger_operation instanceof LedgerOperation){
            $data['ledger_operation'] = $this->ledger_operation->toArray();
        } 

        return $data;
    }
}
?>