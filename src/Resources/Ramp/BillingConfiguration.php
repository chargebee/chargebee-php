<?php

namespace Chargebee\Resources\Ramp;

class BillingConfiguration  { 
    /**
    *
    * @var ?string $po_number
    */
    public ?string $po_number;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "po_number"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $po_number,
    )
    { 
        $this->po_number = $po_number;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['po_number'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['po_number' => $this->po_number,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>