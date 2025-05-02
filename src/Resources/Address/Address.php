<?php

namespace Chargebee\Resources\Address;

class Address  { 
    /**
    *
    * @var ?string $label
    */
    public ?string $label;
    
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
    *
    * @var ?string $company
    */
    public ?string $company;
    
    /**
    *
    * @var ?string $phone
    */
    public ?string $phone;
    
    /**
    *
    * @var ?string $addr
    */
    public ?string $addr;
    
    /**
    *
    * @var ?string $extended_addr
    */
    public ?string $extended_addr;
    
    /**
    *
    * @var ?string $extended_addr2
    */
    public ?string $extended_addr2;
    
    /**
    *
    * @var ?string $city
    */
    public ?string $city;
    
    /**
    *
    * @var ?string $state_code
    */
    public ?string $state_code;
    
    /**
    *
    * @var ?string $state
    */
    public ?string $state;
    
    /**
    *
    * @var ?string $country
    */
    public ?string $country;
    
    /**
    *
    * @var ?string $zip
    */
    public ?string $zip;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\ValidationStatus $validation_status
    */
    public ?\Chargebee\Enums\ValidationStatus $validation_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "label" , "first_name" , "last_name" , "email" , "company" , "phone" , "addr" , "extended_addr" , "extended_addr2" , "city" , "state_code" , "state" , "country" , "zip" , "subscription_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $label,
        ?string $first_name,
        ?string $last_name,
        ?string $email,
        ?string $company,
        ?string $phone,
        ?string $addr,
        ?string $extended_addr,
        ?string $extended_addr2,
        ?string $city,
        ?string $state_code,
        ?string $state,
        ?string $country,
        ?string $zip,
        ?string $subscription_id,
        ?\Chargebee\Enums\ValidationStatus $validation_status,
    )
    { 
        $this->label = $label;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->company = $company;
        $this->phone = $phone;
        $this->addr = $addr;
        $this->extended_addr = $extended_addr;
        $this->extended_addr2 = $extended_addr2;
        $this->city = $city;
        $this->state_code = $state_code;
        $this->state = $state;
        $this->country = $country;
        $this->zip = $zip;
        $this->subscription_id = $subscription_id; 
        $this->validation_status = $validation_status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['label'] ?? null,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['email'] ?? null,
        $resourceAttributes['company'] ?? null,
        $resourceAttributes['phone'] ?? null,
        $resourceAttributes['addr'] ?? null,
        $resourceAttributes['extended_addr'] ?? null,
        $resourceAttributes['extended_addr2'] ?? null,
        $resourceAttributes['city'] ?? null,
        $resourceAttributes['state_code'] ?? null,
        $resourceAttributes['state'] ?? null,
        $resourceAttributes['country'] ?? null,
        $resourceAttributes['zip'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        
        
        isset($resourceAttributes['validation_status']) ? \Chargebee\Enums\ValidationStatus::tryFromValue($resourceAttributes['validation_status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['label' => $this->label,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        'company' => $this->company,
        'phone' => $this->phone,
        'addr' => $this->addr,
        'extended_addr' => $this->extended_addr,
        'extended_addr2' => $this->extended_addr2,
        'city' => $this->city,
        'state_code' => $this->state_code,
        'state' => $this->state,
        'country' => $this->country,
        'zip' => $this->zip,
        'subscription_id' => $this->subscription_id,
        
        'validation_status' => $this->validation_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>