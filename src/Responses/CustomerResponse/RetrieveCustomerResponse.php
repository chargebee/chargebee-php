<?php

namespace Chargebee\Responses\CustomerResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveCustomerResponse extends ResponseBase { 
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    
    /**
    *
    * @var ?Card $card
    */
    public ?Card $card;
    

    private function __construct(
        Customer $customer,
        ?Card $card,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->customer = $customer;
        $this->card = $card;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Customer::from($resourceAttributes['customer']),
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'customer' => $this->customer->toArray(), 
        ]);
         
        if($this->card instanceof Card){
            $data['card'] = $this->card->toArray();
        } 

        return $data;
    }
}
?>