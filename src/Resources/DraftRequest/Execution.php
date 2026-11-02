<?php

namespace Chargebee\Resources\DraftRequest;

class Execution  { 
    /**
    *
    * @var ?string $status
    */
    public ?string $status;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var mixed $result
    */
    public mixed $result;
    
    /**
    *
    * @var mixed $error_detail
    */
    public mixed $error_detail;
    
    /**
    *
    * @var ?int $revision_version
    */
    public ?int $revision_version;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "status" , "created_at" , "result" , "error_detail" , "revision_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $status,
        ?int $created_at,
        mixed $result,
        mixed $error_detail,
        ?int $revision_version,
    )
    { 
        $this->status = $status;
        $this->created_at = $created_at;
        $this->result = $result;
        $this->error_detail = $error_detail;
        $this->revision_version = $revision_version;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['status'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['result'] ?? null,
        $resourceAttributes['error_detail'] ?? null,
        $resourceAttributes['revision_version'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['status' => $this->status,
        'created_at' => $this->created_at,
        'result' => $this->result,
        'error_detail' => $this->error_detail,
        'revision_version' => $this->revision_version,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>