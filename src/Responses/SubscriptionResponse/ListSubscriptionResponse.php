<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Card\Card;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class ListSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var array<ListSubscriptionResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListSubscriptionResponseListObject {
                return new ListSubscriptionResponseListObject(
                    isset($result['subscription']) ? Subscription::from($result['subscription']) : null,
                
                    isset($result['customer']) ? Customer::from($result['customer']) : null,
                
                    isset($result['card']) ? Card::from($result['card']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}


class ListSubscriptionResponseListObject {
    
        public Subscription $subscription;
    
        public Customer $customer;
    
        public ?Card $card;
    
public function __construct(
    Subscription $subscription,

    Customer $customer,

    ?Card $card,
){ 
    $this->subscription = $subscription;

    $this->customer = $customer;

    $this->card = $card;

}
}

?>