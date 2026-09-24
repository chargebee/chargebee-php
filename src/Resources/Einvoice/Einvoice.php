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
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
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
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var mixed $provider_references
    */
    public mixed $provider_references;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?array<Artifact> $artifacts
    */
    public ?array $artifacts;
    
    /**
    *
    * @var ?\Chargebee\Resources\Einvoice\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Resources\Einvoice\Enums\EntityType $entity_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Einvoice\Enums\Status $status
    */
    public ?\Chargebee\Resources\Einvoice\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "entity_id" , "reference_id" , "reference_number" , "message" , "created_at" , "resource_version" , "updated_at" , "deleted" , "provider_references" , "business_entity_id" , "artifacts"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $entity_id,
        ?string $reference_id,
        ?string $reference_number,
        ?string $message,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?bool $deleted,
        mixed $provider_references,
        ?string $business_entity_id,
        ?array $artifacts,
        ?\Chargebee\Resources\Einvoice\Enums\EntityType $entity_type,
        ?\Chargebee\Resources\Einvoice\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->entity_id = $entity_id;
        $this->reference_id = $reference_id;
        $this->reference_number = $reference_number;
        $this->message = $message;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->deleted = $deleted;
        $this->provider_references = $provider_references;
        $this->business_entity_id = $business_entity_id;
        $this->artifacts = $artifacts;  
        $this->entity_type = $entity_type;
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $artifacts = array_map(fn (array $result): Artifact =>  Artifact::from(
            $result
        ), $resourceAttributes['artifacts'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['reference_number'] ?? null,
        $resourceAttributes['message'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['provider_references'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $artifacts,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\Einvoice\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Einvoice\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'entity_id' => $this->entity_id,
        'reference_id' => $this->reference_id,
        'reference_number' => $this->reference_number,
        'message' => $this->message,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'deleted' => $this->deleted,
        'provider_references' => $this->provider_references,
        'business_entity_id' => $this->business_entity_id,
        
        
        'entity_type' => $this->entity_type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->artifacts !== []){
            $data['artifacts'] = array_map(
                fn (Artifact $artifacts): array => $artifacts->toArray(),
                $this->artifacts
            );
        }

        
        return $data;
    }
}
?>