<?php

namespace Chargebee\Resources\SubscriptionEstimate;

class ShippingAddress  { 
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
    * @var ?string $line1
    */
    public ?string $line1;
    
    /**
    *
    * @var ?string $line2
    */
    public ?string $line2;
    
    /**
    *
    * @var ?string $line3
    */
    public ?string $line3;
    
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
    * @var ?string $validation_status
    */
    public ?string $validation_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "first_name" , "last_name" , "email" , "company" , "phone" , "line1" , "line2" , "line3" , "city" , "state_code" , "state" , "country" , "zip" , "validation_status"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $first_name,
        ?string $last_name,
        ?string $email,
        ?string $company,
        ?string $phone,
        ?string $line1,
        ?string $line2,
        ?string $line3,
        ?string $city,
        ?string $state_code,
        ?string $state,
        ?string $country,
        ?string $zip,
        ?string $validation_status,
    )
    { 
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->company = $company;
        $this->phone = $phone;
        $this->line1 = $line1;
        $this->line2 = $line2;
        $this->line3 = $line3;
        $this->city = $city;
        $this->state_code = $state_code;
        $this->state = $state;
        $this->country = $country;
        $this->zip = $zip;
        $this->validation_status = $validation_status;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['email'] ?? null,
        $resourceAttributes['company'] ?? null,
        $resourceAttributes['phone'] ?? null,
        $resourceAttributes['line1'] ?? null,
        $resourceAttributes['line2'] ?? null,
        $resourceAttributes['line3'] ?? null,
        $resourceAttributes['city'] ?? null,
        $resourceAttributes['state_code'] ?? null,
        $resourceAttributes['state'] ?? null,
        $resourceAttributes['country'] ?? null,
        $resourceAttributes['zip'] ?? null,
        $resourceAttributes['validation_status'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        'company' => $this->company,
        'phone' => $this->phone,
        'line1' => $this->line1,
        'line2' => $this->line2,
        'line3' => $this->line3,
        'city' => $this->city,
        'state_code' => $this->state_code,
        'state' => $this->state,
        'country' => $this->country,
        'zip' => $this->zip,
        'validation_status' => $this->validation_status,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>