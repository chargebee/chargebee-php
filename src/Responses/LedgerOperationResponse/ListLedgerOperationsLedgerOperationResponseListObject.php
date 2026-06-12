<?php
namespace Chargebee\Responses\LedgerOperationResponse;

use Chargebee\Resources\LedgerOperation\LedgerOperation;

class ListLedgerOperationsLedgerOperationResponseListObject
{ 
    public LedgerOperation $ledger_operation;
    public function __construct(
        LedgerOperation $ledger_operation,
    ) { 
        $this->ledger_operation = $ledger_operation;
    }
}
