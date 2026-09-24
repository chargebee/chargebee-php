<?php

namespace Chargebee\Resources\Einvoice;

class Artifact  { 
    /**
    *
    * @var ?string $artifact_type
    */
    public ?string $artifact_type;
    
    /**
    *
    * @var ?string $direction
    */
    public ?string $direction;
    
    /**
    *
    * @var ?string $status
    */
    public ?string $status;
    
    /**
    *
    * @var ?string $code
    */
    public ?string $code;
    
    /**
    *
    * @var ?string $external_artifact_id
    */
    public ?string $external_artifact_id;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "artifact_type" , "direction" , "status" , "code" , "external_artifact_id" , "created_at" , "resource_version" , "updated_at" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $artifact_type,
        ?string $direction,
        ?string $status,
        ?string $code,
        ?string $external_artifact_id,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?bool $deleted,
    )
    { 
        $this->artifact_type = $artifact_type;
        $this->direction = $direction;
        $this->status = $status;
        $this->code = $code;
        $this->external_artifact_id = $external_artifact_id;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->deleted = $deleted;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['artifact_type'] ?? null,
        $resourceAttributes['direction'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['code'] ?? null,
        $resourceAttributes['external_artifact_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['artifact_type' => $this->artifact_type,
        'direction' => $this->direction,
        'status' => $this->status,
        'code' => $this->code,
        'external_artifact_id' => $this->external_artifact_id,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'deleted' => $this->deleted,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>