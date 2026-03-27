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
    * @var ?string $message
    */
    public ?string $message;
    
    /**
    *
    * @var mixed $provider_references
    */
    public mixed $provider_references;
    
    /**
    *
    * @var ?\Chargebee\Resources\Einvoice\Enums\Status $status
    */
    public ?\Chargebee\Resources\Einvoice\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "reference_id" , "reference_number" , "message" , "provider_references"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $reference_id,
        ?string $reference_number,
        ?string $message,
        mixed $provider_references,
        ?\Chargebee\Resources\Einvoice\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->reference_id = $reference_id;
        $this->reference_number = $reference_number;
        $this->message = $message;
        $this->provider_references = $provider_references;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['reference_number'] ?? null,
        $resourceAttributes['message'] ?? null,
        $resourceAttributes['provider_references'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Einvoice\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'reference_id' => $this->reference_id,
        'reference_number' => $this->reference_number,
        'message' => $this->message,
        'provider_references' => $this->provider_references,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>