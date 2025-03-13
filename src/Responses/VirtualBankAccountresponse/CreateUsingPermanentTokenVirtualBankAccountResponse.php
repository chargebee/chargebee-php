<?php

namespace Chargebee\Responses\VirtualBankAccountResponse;
use Chargebee\Resources\VirtualBankAccount\VirtualBankAccount;
use Chargebee\Resources\Customer\Customer;

use Chargebee\ValueObjects\ResponseBase;

class CreateUsingPermanentTokenVirtualBankAccountResponse extends ResponseBase { 
    /**
    *
    * @var VirtualBankAccount $virtual_bank_account
    */
    public VirtualBankAccount $virtual_bank_account;
    
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    

    private function __construct(
        VirtualBankAccount $virtual_bank_account,
        ?Customer $customer,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->virtual_bank_account = $virtual_bank_account;
        $this->customer = $customer;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             VirtualBankAccount::from($resourceAttributes['virtual_bank_account']),
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'virtual_bank_account' => $this->virtual_bank_account->toArray(), 
        ]);
         
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        } 

        return $data;
    }
}
?>