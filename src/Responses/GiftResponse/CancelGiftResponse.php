<?php

namespace Chargebee\Responses\GiftResponse;
use Chargebee\Resources\Gift\Gift;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class CancelGiftResponse extends ResponseBase { 
    /**
    *
    * @var Gift $gift
    */
    public Gift $gift;
    
    /**
    *
    * @var Subscription $subscription
    */
    public Subscription $subscription;
    

    private function __construct(
        Gift $gift,
        Subscription $subscription,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->gift = $gift;
        $this->subscription = $subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Gift::from($resourceAttributes['gift']),
             Subscription::from($resourceAttributes['subscription']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'gift' => $this->gift->toArray(), 
            'subscription' => $this->subscription->toArray(),
        ]);
        

        return $data;
    }
}
?>