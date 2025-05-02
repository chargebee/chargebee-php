<?php

namespace Chargebee\Responses\CustomerResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;

use Chargebee\ValueObjects\ResponseBase;

class UpdateContactCustomerResponse extends ResponseBase { 
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    
    /**
    *
    * @var ?Card $card
    */
    public ?Card $card;
    

    private function __construct(
        ?Customer $customer,
        ?Card $card,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->customer = $customer;
        $this->card = $card;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
            
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        }  
        if($this->card instanceof Card){
            $data['card'] = $this->card->toArray();
        } 

        return $data;
    }
}
?>