<?php

namespace Chargebee\Resources\DraftRequest;

class DraftRequest  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $path_param
    */
    public ?string $path_param;
    
    /**
    *
    * @var ?string $request_uri
    */
    public ?string $request_uri;
    
    /**
    *
    * @var ?string $operation_id
    */
    public ?string $operation_id;
    
    /**
    *
    * @var ?int $executed_at
    */
    public ?int $executed_at;
    
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
    * @var ?DraftRevision $current_revision
    */
    public ?DraftRevision $current_revision;
    
    /**
    *
    * @var ?array<Validation> $validations
    */
    public ?array $validations;
    
    /**
    *
    * @var ?bool $has_comments
    */
    public ?bool $has_comments;
    
    /**
    *
    * @var ?bool $has_citations
    */
    public ?bool $has_citations;
    
    /**
    *
    * @var ?array<Execution> $executions
    */
    public ?array $executions;
    
    /**
    *
    * @var ?\Chargebee\Resources\DraftRequest\Enums\Status $status
    */
    public ?\Chargebee\Resources\DraftRequest\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "path_param" , "request_uri" , "operation_id" , "executed_at" , "created_at" , "resource_version" , "updated_at" , "current_revision" , "validations" , "has_comments" , "has_citations" , "executions"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $path_param,
        ?string $request_uri,
        ?string $operation_id,
        ?int $executed_at,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?DraftRevision $current_revision,
        ?array $validations,
        ?bool $has_comments,
        ?bool $has_citations,
        ?array $executions,
        ?\Chargebee\Resources\DraftRequest\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->path_param = $path_param;
        $this->request_uri = $request_uri;
        $this->operation_id = $operation_id;
        $this->executed_at = $executed_at;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->current_revision = $current_revision;
        $this->validations = $validations;
        $this->has_comments = $has_comments;
        $this->has_citations = $has_citations;
        $this->executions = $executions;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $validations = array_map(fn (array $result): Validation =>  Validation::from(
            $result
        ), $resourceAttributes['validations'] ?? []);
        
        $executions = array_map(fn (array $result): Execution =>  Execution::from(
            $result
        ), $resourceAttributes['executions'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['path_param'] ?? null,
        $resourceAttributes['request_uri'] ?? null,
        $resourceAttributes['operation_id'] ?? null,
        $resourceAttributes['executed_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        isset($resourceAttributes['current_revision']) ? DraftRevision::from($resourceAttributes['current_revision']) : null,
        $validations,
        $resourceAttributes['has_comments'] ?? null,
        $resourceAttributes['has_citations'] ?? null,
        $executions,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\DraftRequest\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'path_param' => $this->path_param,
        'request_uri' => $this->request_uri,
        'operation_id' => $this->operation_id,
        'executed_at' => $this->executed_at,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        
        
        'has_comments' => $this->has_comments,
        'has_citations' => $this->has_citations,
        
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->current_revision instanceof DraftRevision){
            $data['current_revision'] = $this->current_revision->toArray();
        }
        
        if($this->validations !== []){
            $data['validations'] = array_map(
                fn (Validation $validations): array => $validations->toArray(),
                $this->validations
            );
        }
        if($this->executions !== []){
            $data['executions'] = array_map(
                fn (Execution $executions): array => $executions->toArray(),
                $this->executions
            );
        }

        
        return $data;
    }
}
?>