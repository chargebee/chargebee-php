<?php

namespace Chargebee\Resources\Invoice;

class Einvoice  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $reference_number
    */
    public ?string $reference_number;
    
    /**
    *
    * @var ?string $status
    */
    public ?string $status;
    
    /**
    *
    * @var ?string $message
    */
    public ?string $message;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "reference_number" , "status" , "message"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $reference_number,
        ?string $status,
        ?string $message,
    )
    { 
        $this->id = $id;
        $this->reference_number = $reference_number;
        $this->status = $status;
        $this->message = $message;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['reference_number'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['message'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'reference_number' => $this->reference_number,
        'status' => $this->status,
        'message' => $this->message,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>