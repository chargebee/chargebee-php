<?php
namespace Chargebee\Responses\LedgerAccountBalanceResponse;

use Chargebee\Resources\LedgerAccountBalance\LedgerAccountBalance;

class ListLedgerAccountBalancesLedgerAccountBalanceResponseListObject
{ 
    public LedgerAccountBalance $ledger_account_balance;
    public function __construct(
        LedgerAccountBalance $ledger_account_balance,
    ) { 
        $this->ledger_account_balance = $ledger_account_balance;
    }
}
