<?php
namespace Chargebee\Responses\CustomerResponse;

use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;

class ListCustomerResponseListObject
{ 
    public Customer $customer;

    public ?Card $card;
    public function __construct(
        Customer $customer,
    
        ?Card $card,
    ) { 
        $this->customer = $customer;
        $this->card = $card;
    }
}
