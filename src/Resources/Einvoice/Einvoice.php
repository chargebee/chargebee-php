<?php

namespace Chargebee\Resources\Einvoice;

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
    * @var ?string $message
    */
    public ?string $message;
    
    /**
    *
    * @var ?\Chargebee\Resources\Einvoice\Enums\Status $status
    */
    public ?\Chargebee\Resources\Einvoice\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "reference_number" , "message"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $reference_number,
        ?string $message,
        ?\Chargebee\Resources\Einvoice\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->reference_number = $reference_number;
        $this->message = $message;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['reference_number'] ?? null,
        $resourceAttributes['message'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Einvoice\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'reference_number' => $this->reference_number,
        'message' => $this->message,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>