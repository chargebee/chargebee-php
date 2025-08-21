<?php

namespace Chargebee\Resources\Customer;

class EntityIdentifier  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    *
    * @var ?string $scheme
    */
    public ?string $scheme;
    
    /**
    *
    * @var ?string $standard
    */
    public ?string $standard;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "value" , "scheme" , "standard"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $value,
        ?string $scheme,
        ?string $standard,
    )
    { 
        $this->id = $id;
        $this->value = $value;
        $this->scheme = $scheme;
        $this->standard = $standard;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['scheme'] ?? null,
        $resourceAttributes['standard'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'value' => $this->value,
        'scheme' => $this->scheme,
        'standard' => $this->standard,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>