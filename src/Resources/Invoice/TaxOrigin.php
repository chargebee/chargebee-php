<?php

namespace Chargebee\Resources\Invoice;

class TaxOrigin  { 
    /**
    *
    * @var ?string $country
    */
    public ?string $country;
    
    /**
    *
    * @var ?string $registration_number
    */
    public ?string $registration_number;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "country" , "registration_number"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $country,
        ?string $registration_number,
    )
    { 
        $this->country = $country;
        $this->registration_number = $registration_number;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['country'] ?? null,
        $resourceAttributes['registration_number'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['country' => $this->country,
        'registration_number' => $this->registration_number,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>