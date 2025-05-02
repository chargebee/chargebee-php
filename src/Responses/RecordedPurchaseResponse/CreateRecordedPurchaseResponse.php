<?php

namespace Chargebee\Responses\RecordedPurchaseResponse;
use Chargebee\Resources\RecordedPurchase\RecordedPurchase;
use Chargebee\Resources\Customer\Customer;

use Chargebee\ValueObjects\ResponseBase;

class CreateRecordedPurchaseResponse extends ResponseBase { 
    /**
    *
    * @var ?RecordedPurchase $recorded_purchase
    */
    public ?RecordedPurchase $recorded_purchase;
    
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    

    private function __construct(
        ?RecordedPurchase $recorded_purchase,
        ?Customer $customer,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->recorded_purchase = $recorded_purchase;
        $this->customer = $customer;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['recorded_purchase']) ? RecordedPurchase::from($resourceAttributes['recorded_purchase']) : null,
            
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->recorded_purchase instanceof RecordedPurchase){
            $data['recorded_purchase'] = $this->recorded_purchase->toArray();
        }  
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        } 

        return $data;
    }
}
?>