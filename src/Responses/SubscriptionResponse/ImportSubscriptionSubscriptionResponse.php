<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Card\Card;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class ImportSubscriptionSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var Subscription $subscription
    */
    public Subscription $subscription;
    
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
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    

    private function __construct(
        Subscription $subscription,
        Customer $customer,
        ?Card $card,
        ?Invoice $invoice,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->subscription = $subscription;
        $this->customer = $customer;
        $this->card = $card;
        $this->invoice = $invoice;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Subscription::from($resourceAttributes['subscription']),
             Customer::from($resourceAttributes['customer']),
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
            
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'subscription' => $this->subscription->toArray(), 
            'customer' => $this->customer->toArray(),  
        ]);
         
        if($this->card instanceof Card){
            $data['card'] = $this->card->toArray();
        }  
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        } 

        return $data;
    }
}
?>