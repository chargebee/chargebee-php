<?php
namespace Chargebee\Responses\VirtualBankAccountResponse;

use Chargebee\Resources\VirtualBankAccount\VirtualBankAccount;

class ListVirtualBankAccountResponseListObject
{ 
    public VirtualBankAccount $virtual_bank_account;
    public function __construct(
        VirtualBankAccount $virtual_bank_account,
    ) { 
        $this->virtual_bank_account = $virtual_bank_account;
    }
}
