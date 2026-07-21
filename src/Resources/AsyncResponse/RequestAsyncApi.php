<?php

namespace Chargebee\Resources\AsyncResponse;

class RequestAsyncApi  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $resource
    */
    public ?string $resource;
    
    /**
    *
    * @var ?string $operation_type
    */
    public ?string $operation_type;
    
    /**
    *
    * @var ?string $method
    */
    public ?string $method;
    
    /**
    *
    * @var ?string $uri
    */
    public ?string $uri;
    
    /**
    *
    * @var ?string $idempotency_key
    */
    public ?string $idempotency_key;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "resource" , "operation_type" , "method" , "uri" , "idempotency_key"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $resource,
        ?string $operation_type,
        ?string $method,
        ?string $uri,
        ?string $idempotency_key,
    )
    { 
        $this->id = $id;
        $this->resource = $resource;
        $this->operation_type = $operation_type;
        $this->method = $method;
        $this->uri = $uri;
        $this->idempotency_key = $idempotency_key;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['resource'] ?? null,
        $resourceAttributes['operation_type'] ?? null,
        $resourceAttributes['method'] ?? null,
        $resourceAttributes['uri'] ?? null,
        $resourceAttributes['idempotency_key'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'resource' => $this->resource,
        'operation_type' => $this->operation_type,
        'method' => $this->method,
        'uri' => $this->uri,
        'idempotency_key' => $this->idempotency_key,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>