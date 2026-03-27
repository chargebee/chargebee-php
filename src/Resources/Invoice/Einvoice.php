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
    * @var ?string $reference_id
    */
    public ?string $reference_id;
    
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
    *
    * @var mixed $provider_references
    */
    public mixed $provider_references;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "reference_id" , "reference_number" , "status" , "message" , "provider_references"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $reference_id,
        ?string $reference_number,
        ?string $status,
        ?string $message,
        mixed $provider_references,
    )
    { 
        $this->id = $id;
        $this->reference_id = $reference_id;
        $this->reference_number = $reference_number;
        $this->status = $status;
        $this->message = $message;
        $this->provider_references = $provider_references;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['reference_number'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['message'] ?? null,
        $resourceAttributes['provider_references'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'reference_id' => $this->reference_id,
        'reference_number' => $this->reference_number,
        'status' => $this->status,
        'message' => $this->message,
        'provider_references' => $this->provider_references,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>