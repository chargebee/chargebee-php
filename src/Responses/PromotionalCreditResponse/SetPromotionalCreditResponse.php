<?php

namespace Chargebee\Responses\PromotionalCreditResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\PromotionalCredit\PromotionalCredit;

use Chargebee\ValueObjects\ResponseBase;

class SetPromotionalCreditResponse extends ResponseBase { 
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    
    /**
    *
    * @var ?PromotionalCredit $promotional_credit
    */
    public ?PromotionalCredit $promotional_credit;
    

    private function __construct(
        ?Customer $customer,
        ?PromotionalCredit $promotional_credit,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->customer = $customer;
        $this->promotional_credit = $promotional_credit;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
            
            isset($resourceAttributes['promotional_credit']) ? PromotionalCredit::from($resourceAttributes['promotional_credit']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        }  
        if($this->promotional_credit instanceof PromotionalCredit){
            $data['promotional_credit'] = $this->promotional_credit->toArray();
        } 

        return $data;
    }
}
?>