<?php

namespace Chargebee\Resources\DraftEstimate;

class DraftEstimate  { 
    /**
    *
    * @var ?int $http_status
    */
    public ?int $http_status;
    
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
    *
    * @var ?\Chargebee\Resources\DraftEstimate\Enums\Status $status
    */
    public ?\Chargebee\Resources\DraftEstimate\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "http_status" , "created_at" , "result" , "error_detail" , "revision_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $http_status,
        ?int $created_at,
        mixed $result,
        mixed $error_detail,
        ?int $revision_version,
        ?\Chargebee\Resources\DraftEstimate\Enums\Status $status,
    )
    { 
        $this->http_status = $http_status;
        $this->created_at = $created_at;
        $this->result = $result;
        $this->error_detail = $error_detail;
        $this->revision_version = $revision_version;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['http_status'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['result'] ?? null,
        $resourceAttributes['error_detail'] ?? null,
        $resourceAttributes['revision_version'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\DraftEstimate\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['http_status' => $this->http_status,
        'created_at' => $this->created_at,
        'result' => $this->result,
        'error_detail' => $this->error_detail,
        'revision_version' => $this->revision_version,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>