<?php

namespace Chargebee\Responses\LedgerOperationResponse;
use Chargebee\Resources\LedgerAccountBalance\LedgerAccountBalance;
use Chargebee\Resources\LedgerOperation\LedgerOperation;

use Chargebee\ValueObjects\ResponseBase;

class AuthorizeLedgerOperationResponse extends ResponseBase { 
    /**
    *
    * @var ?LedgerOperation $ledger_operation
    */
    public ?LedgerOperation $ledger_operation;
    
    /**
    *
    * @var ?LedgerAccountBalance $ledger_account_balance
    */
    public ?LedgerAccountBalance $ledger_account_balance;
    

    private function __construct(
        ?LedgerOperation $ledger_operation,
        ?LedgerAccountBalance $ledger_account_balance,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->ledger_operation = $ledger_operation;
        $this->ledger_account_balance = $ledger_account_balance;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['ledger_operation']) ? LedgerOperation::from($resourceAttributes['ledger_operation']) : null,
            
            isset($resourceAttributes['ledger_account_balance']) ? LedgerAccountBalance::from($resourceAttributes['ledger_account_balance']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->ledger_operation instanceof LedgerOperation){
            $data['ledger_operation'] = $this->ledger_operation->toArray();
        }  
        if($this->ledger_account_balance instanceof LedgerAccountBalance){
            $data['ledger_account_balance'] = $this->ledger_account_balance->toArray();
        } 

        return $data;
    }
}
?>