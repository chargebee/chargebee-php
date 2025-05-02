<?php

namespace Chargebee\Responses\CustomerResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Transaction\Transaction;

use Chargebee\ValueObjects\ResponseBase;

class RecordExcessPaymentCustomerResponse extends ResponseBase { 
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    
    /**
    *
    * @var ?Transaction $transaction
    */
    public ?Transaction $transaction;
    

    private function __construct(
        ?Customer $customer,
        ?Transaction $transaction,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->customer = $customer;
        $this->transaction = $transaction;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
            
            isset($resourceAttributes['transaction']) ? Transaction::from($resourceAttributes['transaction']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        }  
        if($this->transaction instanceof Transaction){
            $data['transaction'] = $this->transaction->toArray();
        } 

        return $data;
    }
}
?>