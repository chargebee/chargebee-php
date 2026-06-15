<?php

namespace Chargebee\Responses\PromotionalGrantResponse;
use Chargebee\Resources\GrantBlock\GrantBlock;
use Chargebee\Resources\LedgerOperation\LedgerOperation;

use Chargebee\ValueObjects\ResponseBase;

class PromotionalGrantsPromotionalGrantResponse extends ResponseBase { 
    /**
    *
    * @var ?array<LedgerOperation> $ledger_operations
    */
    public ?array $ledger_operations;
    
    /**
    *
    * @var ?array<GrantBlock> $grant_blocks
    */
    public ?array $grant_blocks;
    

    private function __construct(
        ?array $ledger_operations,
        ?array $grant_blocks,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->ledger_operations = $ledger_operations;
        $this->grant_blocks = $grant_blocks;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $ledger_operations = array_map(fn (array $result): LedgerOperation =>  LedgerOperation::from(
            $result
        ), $resourceAttributes['ledger_operations'] ?? []);
        
        $grant_blocks = array_map(fn (array $result): GrantBlock =>  GrantBlock::from(
            $result
        ), $resourceAttributes['grant_blocks'] ?? []);
        
        return new self($ledger_operations,$grant_blocks, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
            

        if($this->ledger_operations !== []) {
            $data['ledger_operations'] = array_map(
                fn (LedgerOperation $ledger_operations): array => $ledger_operations->toArray(),
                $this->ledger_operations
            );
        }
        if($this->grant_blocks !== []) {
            $data['grant_blocks'] = array_map(
                fn (GrantBlock $grant_blocks): array => $grant_blocks->toArray(),
                $this->grant_blocks
            );
        }
        return $data;
    }
}
?>