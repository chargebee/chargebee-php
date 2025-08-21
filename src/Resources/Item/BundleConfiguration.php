<?php

namespace Chargebee\Resources\Item;

class BundleConfiguration  { 
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "type"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $type,
    )
    { 
        $this->type = $type;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['type'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['type' => $this->type,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>