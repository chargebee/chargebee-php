<?php

namespace Chargebee\Responses\CustomerResponse;
use Chargebee\Resources\Customer\Customer;

use Chargebee\ValueObjects\ResponseBase;

class ChangeBillingDateCustomerResponse extends ResponseBase { 
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    

    private function __construct(
        ?Customer $customer,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->customer = $customer;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        } 

        return $data;
    }
}
?>