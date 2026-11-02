<?php

namespace Chargebee\Resources\Transaction;

class GatewayMetadata  { 
    /**
    *
    * @var ?string $acquirer_reference_id
    */
    public ?string $acquirer_reference_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "acquirer_reference_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $acquirer_reference_id,
    )
    { 
        $this->acquirer_reference_id = $acquirer_reference_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['acquirer_reference_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['acquirer_reference_id' => $this->acquirer_reference_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>