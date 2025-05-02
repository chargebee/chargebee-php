<?php

namespace Chargebee\Resources\Invoice;

class StatementDescriptor  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $descriptor
    */
    public ?string $descriptor;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "descriptor"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $descriptor,
    )
    { 
        $this->id = $id;
        $this->descriptor = $descriptor;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['descriptor'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'descriptor' => $this->descriptor,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>