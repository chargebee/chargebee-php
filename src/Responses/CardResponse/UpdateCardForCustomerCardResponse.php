<?php

namespace Chargebee\Responses\CardResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;

use Chargebee\ValueObjects\ResponseBase;

class UpdateCardForCustomerCardResponse extends ResponseBase { 
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    
    /**
    *
    * @var Card $card
    */
    public Card $card;
    

    private function __construct(
        Customer $customer,
        Card $card,
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
             Card::from($resourceAttributes['card']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'customer' => $this->customer->toArray(), 
            'card' => $this->card->toArray(),
        ]);
        

        return $data;
    }
}
?>