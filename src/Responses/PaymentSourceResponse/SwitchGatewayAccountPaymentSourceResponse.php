<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\PaymentSource\PaymentSource;

use Chargebee\ValueObjects\ResponseBase;

class SwitchGatewayAccountPaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    
    /**
    *
    * @var PaymentSource $payment_source
    */
    public PaymentSource $payment_source;
    

    private function __construct(
        Customer $customer,
        PaymentSource $payment_source,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->customer = $customer;
        $this->payment_source = $payment_source;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Customer::from($resourceAttributes['customer']),
             PaymentSource::from($resourceAttributes['payment_source']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'customer' => $this->customer->toArray(), 
            'payment_source' => $this->payment_source->toArray(),
        ]);
        

        return $data;
    }
}
?>