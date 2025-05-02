<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\PaymentSource\PaymentSource;

use Chargebee\ValueObjects\ResponseBase;

class DeletePaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    
    /**
    *
    * @var ?PaymentSource $payment_source
    */
    public ?PaymentSource $payment_source;
    

    private function __construct(
        ?Customer $customer,
        ?PaymentSource $payment_source,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->customer = $customer;
        $this->payment_source = $payment_source;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
            
            isset($resourceAttributes['payment_source']) ? PaymentSource::from($resourceAttributes['payment_source']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        }  
        if($this->payment_source instanceof PaymentSource){
            $data['payment_source'] = $this->payment_source->toArray();
        } 

        return $data;
    }
}
?>