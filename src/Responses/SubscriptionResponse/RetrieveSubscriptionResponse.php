<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?Subscription $subscription
    */
    public ?Subscription $subscription;
    
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
        ?Subscription $subscription,
        ?Customer $customer,
        ?Card $card,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->subscription = $subscription;
        $this->customer = $customer;
        $this->card = $card;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
            
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
            
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([   
        ]);
         
        if($this->subscription instanceof Subscription){
            $data['subscription'] = $this->subscription->toArray();
        }  
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