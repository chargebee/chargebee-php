<?php

namespace Chargebee\Resources\Gift;

class GiftReceiver  { 
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $first_name
    */
    public ?string $first_name;
    
    /**
    *
    * @var ?string $last_name
    */
    public ?string $last_name;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "customer_id" , "subscription_id" , "first_name" , "last_name" , "email"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $customer_id,
        ?string $subscription_id,
        ?string $first_name,
        ?string $last_name,
        ?string $email,
    )
    { 
        $this->customer_id = $customer_id;
        $this->subscription_id = $subscription_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['email'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['customer_id' => $this->customer_id,
        'subscription_id' => $this->subscription_id,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>