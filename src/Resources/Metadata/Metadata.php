<?php

namespace Chargebee\Resources\Metadata;

class Metadata  { 
    /**
    *
    * @var ?string $change_type
    */
    public ?string $change_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "change_type"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $change_type,
    )
    { 
        $this->change_type = $change_type;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['change_type'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['change_type' => $this->change_type,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>