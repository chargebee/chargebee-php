<?php

namespace Chargebee\Resources\PaymentSource;

class CustVoucherSource  { 
    /**
    *
    * @var string $last4
    */
    public string $last4;
    
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
    protected static array $knownFields = [ "last4" , "first_name" , "last_name" , "email"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $last4,
        ?string $first_name,
        ?string $last_name,
        ?string $email,
    )
    { 
        $this->last4 = $last4;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['last4'] ,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['email'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['last4' => $this->last4,
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