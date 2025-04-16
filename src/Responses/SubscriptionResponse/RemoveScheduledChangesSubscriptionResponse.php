<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;
use Chargebee\Resources\Subscription\Subscription;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class RemoveScheduledChangesSubscriptionResponse extends ResponseBase { 
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
    * @var ?array<CreditNote> $credit_notes
    */
    public ?array $credit_notes;
    

    private function __construct(
        Subscription $subscription,
        Customer $customer,
        ?Card $card,
        ?array $credit_notes,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->subscription = $subscription;
        $this->customer = $customer;
        $this->card = $card;
        $this->credit_notes = $credit_notes;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $credit_notes = array_map(fn (array $result): CreditNote =>  CreditNote::from(
            $result
        ), $resourceAttributes['credit_notes'] ?? []);
        
        return new self(
             Subscription::from($resourceAttributes['subscription']),
             Customer::from($resourceAttributes['customer']),
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
            $credit_notes, $headers);
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

        if($this->credit_notes !== []) {
            $data['credit_notes'] = array_map(
                fn (CreditNote $credit_notes): array => $credit_notes->toArray(),
                $this->credit_notes
            );
        }
        return $data;
    }
}
?>