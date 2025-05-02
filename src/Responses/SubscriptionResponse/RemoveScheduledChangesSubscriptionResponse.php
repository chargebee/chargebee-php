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
    
    /**
    *
    * @var ?array<CreditNote> $credit_notes
    */
    public ?array $credit_notes;
    

    private function __construct(
        ?Subscription $subscription,
        ?Customer $customer,
        ?Card $card,
        ?array $credit_notes,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
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
            isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
            
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
            
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
            $credit_notes, $headers, $resourceAttributes);
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