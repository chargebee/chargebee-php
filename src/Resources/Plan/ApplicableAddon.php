<?php

namespace Chargebee\Resources\Plan;

class ApplicableAddon  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
    )
    { 
        $this->id = $id;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>