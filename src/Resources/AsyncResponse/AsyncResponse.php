<?php

namespace Chargebee\Resources\AsyncResponse;

class AsyncResponse  { 
    /**
    *
    * @var ?string $api_version
    */
    public ?string $api_version;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $completed_at
    */
    public ?int $completed_at;
    
    /**
    *
    * @var ?RequestAsyncApi $request
    */
    public ?RequestAsyncApi $request;
    
    /**
    *
    * @var ?Error $error_detail
    */
    public ?Error $error_detail;
    
    /**
    *
    * @var mixed $result
    */
    public mixed $result;
    
    /**
    *
    * @var ?\Chargebee\Resources\AsyncResponse\Enums\Status $status
    */
    public ?\Chargebee\Resources\AsyncResponse\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "api_version" , "created_at" , "completed_at" , "request" , "error_detail" , "result"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $api_version,
        ?int $created_at,
        ?int $completed_at,
        ?RequestAsyncApi $request,
        ?Error $error_detail,
        mixed $result,
        ?\Chargebee\Resources\AsyncResponse\Enums\Status $status,
    )
    { 
        $this->api_version = $api_version;
        $this->created_at = $created_at;
        $this->completed_at = $completed_at;
        $this->request = $request;
        $this->error_detail = $error_detail;
        $this->result = $result;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['api_version'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['completed_at'] ?? null,
        isset($resourceAttributes['request']) ? RequestAsyncApi::from($resourceAttributes['request']) : null,
        isset($resourceAttributes['error_detail']) ? Error::from($resourceAttributes['error_detail']) : null,
        $resourceAttributes['result'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\AsyncResponse\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['api_version' => $this->api_version,
        'created_at' => $this->created_at,
        'completed_at' => $this->completed_at,
        
        
        'result' => $this->result,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->request instanceof RequestAsyncApi){
            $data['request'] = $this->request->toArray();
        }
        if($this->error_detail instanceof Error){
            $data['error_detail'] = $this->error_detail->toArray();
        }
        

        
        return $data;
    }
}
?>