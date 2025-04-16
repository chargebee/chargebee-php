<?php

namespace Chargebee\Resources\PortalSession;

class LinkedCustomer  { 
    /**
    *
    * @var string $customer_id
    */
    public string $customer_id;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    *
    * @var bool $has_billing_address
    */
    public bool $has_billing_address;
    
    /**
    *
    * @var bool $has_payment_method
    */
    public bool $has_payment_method;
    
    /**
    *
    * @var bool $has_active_subscription
    */
    public bool $has_active_subscription;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "customer_id" , "email" , "has_billing_address" , "has_payment_method" , "has_active_subscription"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $customer_id,
        ?string $email,
        bool $has_billing_address,
        bool $has_payment_method,
        bool $has_active_subscription,
    )
    { 
        $this->customer_id = $customer_id;
        $this->email = $email;
        $this->has_billing_address = $has_billing_address;
        $this->has_payment_method = $has_payment_method;
        $this->has_active_subscription = $has_active_subscription;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['customer_id'] ,
        $resourceAttributes['email'] ?? null,
        $resourceAttributes['has_billing_address'] ,
        $resourceAttributes['has_payment_method'] ,
        $resourceAttributes['has_active_subscription'] ,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['customer_id' => $this->customer_id,
        'email' => $this->email,
        'has_billing_address' => $this->has_billing_address,
        'has_payment_method' => $this->has_payment_method,
        'has_active_subscription' => $this->has_active_subscription,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>