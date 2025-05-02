<?php

namespace Chargebee\Resources\PriceVariant;

class Attribute  { 
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "name" , "value"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $name,
        ?string $value,
    )
    { 
        $this->name = $name;
        $this->value = $value;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['name'] ?? null,
        $resourceAttributes['value'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['name' => $this->name,
        'value' => $this->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>