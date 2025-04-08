<?php

namespace Chargebee\Responses\CustomerResponse;
use Chargebee\Resources\Customer\Customer;

use Chargebee\ValueObjects\ResponseBase;

class AddPromotionalCreditsCustomerResponse extends ResponseBase { 
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    

    private function __construct(
        Customer $customer,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->customer = $customer;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Customer::from($resourceAttributes['customer']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'customer' => $this->customer->toArray(),
        ]);
        

        return $data;
    }
}
?>