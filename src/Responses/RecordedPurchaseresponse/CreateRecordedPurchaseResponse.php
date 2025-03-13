<?php

namespace Chargebee\Responses\RecordedPurchaseResponse;
use Chargebee\Resources\RecordedPurchase\RecordedPurchase;
use Chargebee\Resources\Customer\Customer;

use Chargebee\ValueObjects\ResponseBase;

class CreateRecordedPurchaseResponse extends ResponseBase { 
    /**
    *
    * @var RecordedPurchase $recorded_purchase
    */
    public RecordedPurchase $recorded_purchase;
    
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    

    private function __construct(
        RecordedPurchase $recorded_purchase,
        Customer $customer,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->recorded_purchase = $recorded_purchase;
        $this->customer = $customer;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             RecordedPurchase::from($resourceAttributes['recorded_purchase']),
             Customer::from($resourceAttributes['customer']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'recorded_purchase' => $this->recorded_purchase->toArray(), 
            'customer' => $this->customer->toArray(),
        ]);
        

        return $data;
    }
}
?>