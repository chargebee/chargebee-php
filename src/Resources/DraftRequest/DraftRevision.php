<?php

namespace Chargebee\Resources\DraftRequest;

class DraftRevision  { 
    /**
    *
    * @var ?int $version
    */
    public ?int $version;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var mixed $payload
    */
    public mixed $payload;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "version" , "created_at" , "payload"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $version,
        ?int $created_at,
        mixed $payload,
    )
    { 
        $this->version = $version;
        $this->created_at = $created_at;
        $this->payload = $payload;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['version'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['payload'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['version' => $this->version,
        'created_at' => $this->created_at,
        'payload' => $this->payload,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>