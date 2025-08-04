<?php
namespace Chargebee\Responses\SubscriptionResponse;

use Chargebee\Resources\Subscription\Subscription;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;

class ListSubscriptionResponseListObject
{ 
    public Subscription $subscription;

    public Customer $customer;

    public ?Card $card;
    public function __construct(
        Subscription $subscription,
    
        Customer $customer,
    
        ?Card $card,
    ) { 
        $this->subscription = $subscription;
        $this->customer = $customer;
        $this->card = $card;
    }
}
