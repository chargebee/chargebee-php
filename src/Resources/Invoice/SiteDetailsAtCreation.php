<?php

namespace Chargebee\Resources\Invoice;

class SiteDetailsAtCreation  { 
    /**
    *
    * @var ?string $timezone
    */
    public ?string $timezone;
    
    /**
    *
    * @var mixed $organization_address
    */
    public mixed $organization_address;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "timezone" , "organization_address"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $timezone,
        mixed $organization_address,
    )
    { 
        $this->timezone = $timezone;
        $this->organization_address = $organization_address;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['timezone'] ?? null,
        $resourceAttributes['organization_address'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['timezone' => $this->timezone,
        'organization_address' => $this->organization_address,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>