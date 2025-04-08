<?php

namespace Chargebee\Responses\GiftResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Gift\Gift;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class CreateGiftResponse extends ResponseBase { 
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
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    

    private function __construct(
        Gift $gift,
        Subscription $subscription,
        ?Invoice $invoice,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->gift = $gift;
        $this->subscription = $subscription;
        $this->invoice = $invoice;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Gift::from($resourceAttributes['gift']),
             Subscription::from($resourceAttributes['subscription']),
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
             $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'gift' => $this->gift->toArray(), 
            'subscription' => $this->subscription->toArray(), 
        ]);
         
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        } 

        return $data;
    }
}
?>