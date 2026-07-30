<?php

namespace Chargebee\Responses\LedgerOperationResponse;
use Chargebee\Resources\LedgerEntry\LedgerEntry;
use Chargebee\Resources\GrantBlock\GrantBlock;
use Chargebee\Resources\LedgerAccountBalance\LedgerAccountBalance;
use Chargebee\Resources\LedgerOperation\LedgerOperation;

use Chargebee\ValueObjects\ResponseBase;

class CaptureLedgerOperationResponse extends ResponseBase { 
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
    
    /**
    *
    * @var ?array<GrantBlock> $grant_blocks
    */
    public ?array $grant_blocks;
    
    /**
    *
    * @var ?array<LedgerEntry> $ledger_entries
    */
    public ?array $ledger_entries;
    

    private function __construct(
        ?LedgerOperation $ledger_operation,
        ?LedgerAccountBalance $ledger_account_balance,
        ?array $grant_blocks,
        ?array $ledger_entries,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->ledger_operation = $ledger_operation;
        $this->ledger_account_balance = $ledger_account_balance;
        $this->grant_blocks = $grant_blocks;
        $this->ledger_entries = $ledger_entries;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $grant_blocks = array_map(fn (array $result): GrantBlock =>  GrantBlock::from(
            $result
        ), $resourceAttributes['grant_blocks'] ?? []);
        
        $ledger_entries = array_map(fn (array $result): LedgerEntry =>  LedgerEntry::from(
            $result
        ), $resourceAttributes['ledger_entries'] ?? []);
        
        return new self(
            isset($resourceAttributes['ledger_operation']) ? LedgerOperation::from($resourceAttributes['ledger_operation']) : null,
            
            isset($resourceAttributes['ledger_account_balance']) ? LedgerAccountBalance::from($resourceAttributes['ledger_account_balance']) : null,
            $grant_blocks,$ledger_entries, $headers, $resourceAttributes);
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

        if($this->grant_blocks !== []) {
            $data['grant_blocks'] = array_map(
                fn (GrantBlock $grant_blocks): array => $grant_blocks->toArray(),
                $this->grant_blocks
            );
        }
        if($this->ledger_entries !== []) {
            $data['ledger_entries'] = array_map(
                fn (LedgerEntry $ledger_entries): array => $ledger_entries->toArray(),
                $this->ledger_entries
            );
        }
        return $data;
    }
}
?>