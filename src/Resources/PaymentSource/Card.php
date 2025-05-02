<?php

namespace Chargebee\Resources\PaymentSource;

class Card  { 
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
    * @var ?string $iin
    */
    public ?string $iin;
    
    /**
    *
    * @var ?string $last4
    */
    public ?string $last4;
    
    /**
    *
    * @var ?string $brand
    */
    public ?string $brand;
    
    /**
    *
    * @var ?string $funding_type
    */
    public ?string $funding_type;
    
    /**
    *
    * @var ?int $expiry_month
    */
    public ?int $expiry_month;
    
    /**
    *
    * @var ?int $expiry_year
    */
    public ?int $expiry_year;
    
    /**
    *
    * @var ?string $billing_addr1
    */
    public ?string $billing_addr1;
    
    /**
    *
    * @var ?string $billing_addr2
    */
    public ?string $billing_addr2;
    
    /**
    *
    * @var ?string $billing_city
    */
    public ?string $billing_city;
    
    /**
    *
    * @var ?string $billing_state_code
    */
    public ?string $billing_state_code;
    
    /**
    *
    * @var ?string $billing_state
    */
    public ?string $billing_state;
    
    /**
    *
    * @var ?string $billing_country
    */
    public ?string $billing_country;
    
    /**
    *
    * @var ?string $billing_zip
    */
    public ?string $billing_zip;
    
    /**
    *
    * @var ?string $masked_number
    */
    public ?string $masked_number;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "first_name" , "last_name" , "iin" , "last4" , "brand" , "funding_type" , "expiry_month" , "expiry_year" , "billing_addr1" , "billing_addr2" , "billing_city" , "billing_state_code" , "billing_state" , "billing_country" , "billing_zip" , "masked_number"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $first_name,
        ?string $last_name,
        ?string $iin,
        ?string $last4,
        ?string $brand,
        ?string $funding_type,
        ?int $expiry_month,
        ?int $expiry_year,
        ?string $billing_addr1,
        ?string $billing_addr2,
        ?string $billing_city,
        ?string $billing_state_code,
        ?string $billing_state,
        ?string $billing_country,
        ?string $billing_zip,
        ?string $masked_number,
    )
    { 
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->iin = $iin;
        $this->last4 = $last4;
        $this->brand = $brand;
        $this->funding_type = $funding_type;
        $this->expiry_month = $expiry_month;
        $this->expiry_year = $expiry_year;
        $this->billing_addr1 = $billing_addr1;
        $this->billing_addr2 = $billing_addr2;
        $this->billing_city = $billing_city;
        $this->billing_state_code = $billing_state_code;
        $this->billing_state = $billing_state;
        $this->billing_country = $billing_country;
        $this->billing_zip = $billing_zip;
        $this->masked_number = $masked_number;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['iin'] ?? null,
        $resourceAttributes['last4'] ?? null,
        $resourceAttributes['brand'] ?? null,
        $resourceAttributes['funding_type'] ?? null,
        $resourceAttributes['expiry_month'] ?? null,
        $resourceAttributes['expiry_year'] ?? null,
        $resourceAttributes['billing_addr1'] ?? null,
        $resourceAttributes['billing_addr2'] ?? null,
        $resourceAttributes['billing_city'] ?? null,
        $resourceAttributes['billing_state_code'] ?? null,
        $resourceAttributes['billing_state'] ?? null,
        $resourceAttributes['billing_country'] ?? null,
        $resourceAttributes['billing_zip'] ?? null,
        $resourceAttributes['masked_number'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'iin' => $this->iin,
        'last4' => $this->last4,
        'brand' => $this->brand,
        'funding_type' => $this->funding_type,
        'expiry_month' => $this->expiry_month,
        'expiry_year' => $this->expiry_year,
        'billing_addr1' => $this->billing_addr1,
        'billing_addr2' => $this->billing_addr2,
        'billing_city' => $this->billing_city,
        'billing_state_code' => $this->billing_state_code,
        'billing_state' => $this->billing_state,
        'billing_country' => $this->billing_country,
        'billing_zip' => $this->billing_zip,
        'masked_number' => $this->masked_number,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>