<?php

namespace Chargebee\Responses\PromotionalCreditResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\PromotionalCredit\PromotionalCredit;

use Chargebee\ValueObjects\ResponseBase;

class AddPromotionalCreditResponse extends ResponseBase { 
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    
    /**
    *
    * @var PromotionalCredit $promotional_credit
    */
    public PromotionalCredit $promotional_credit;
    

    private function __construct(
        Customer $customer,
        PromotionalCredit $promotional_credit,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->customer = $customer;
        $this->promotional_credit = $promotional_credit;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Customer::from($resourceAttributes['customer']),
             PromotionalCredit::from($resourceAttributes['promotional_credit']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'customer' => $this->customer->toArray(), 
            'promotional_credit' => $this->promotional_credit->toArray(),
        ]);
        

        return $data;
    }
}
?>