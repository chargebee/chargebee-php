<?php

namespace Chargebee\Responses\GiftResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Gift\Gift;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class CreateForItemsGiftResponse extends ResponseBase { 
    /**
    *
    * @var ?Gift $gift
    */
    public ?Gift $gift;
    
    /**
    *
    * @var ?Subscription $subscription
    */
    public ?Subscription $subscription;
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    

    private function __construct(
        ?Gift $gift,
        ?Subscription $subscription,
        ?Invoice $invoice,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->gift = $gift;
        $this->subscription = $subscription;
        $this->invoice = $invoice;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['gift']) ? Gift::from($resourceAttributes['gift']) : null,
            
            isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
            
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([   
        ]);
         
        if($this->gift instanceof Gift){
            $data['gift'] = $this->gift->toArray();
        }  
        if($this->subscription instanceof Subscription){
            $data['subscription'] = $this->subscription->toArray();
        }  
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        } 

        return $data;
    }
}
?>