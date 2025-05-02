<?php

namespace Chargebee\Responses\VirtualBankAccountResponse;
use Chargebee\Resources\VirtualBankAccount\VirtualBankAccount;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveVirtualBankAccountResponse extends ResponseBase { 
    /**
    *
    * @var ?VirtualBankAccount $virtual_bank_account
    */
    public ?VirtualBankAccount $virtual_bank_account;
    

    private function __construct(
        ?VirtualBankAccount $virtual_bank_account,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->virtual_bank_account = $virtual_bank_account;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['virtual_bank_account']) ? VirtualBankAccount::from($resourceAttributes['virtual_bank_account']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->virtual_bank_account instanceof VirtualBankAccount){
            $data['virtual_bank_account'] = $this->virtual_bank_account->toArray();
        } 

        return $data;
    }
}
?>