<?php

namespace Chargebee\Resources\Alert;

class Threshold  { 
    /**
    *
    * @var ?string $mode
    */
    public ?string $mode;
    
    /**
    *
    * @var ?float $value
    */
    public ?float $value;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "mode" , "value"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $mode,
        ?float $value,
    )
    { 
        $this->mode = $mode;
        $this->value = $value;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['mode'] ?? null,
        $resourceAttributes['value'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['mode' => $this->mode,
        'value' => $this->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>