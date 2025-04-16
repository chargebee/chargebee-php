<?php

namespace Chargebee\Resources\RecordedPurchase;

class ErrorDetail  { 
    /**
    *
    * @var ?string $error_message
    */
    public ?string $error_message;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "error_message"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $error_message,
    )
    { 
        $this->error_message = $error_message;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['error_message'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['error_message' => $this->error_message,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>