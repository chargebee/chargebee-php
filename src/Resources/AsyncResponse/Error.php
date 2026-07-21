<?php

namespace Chargebee\Resources\AsyncResponse;

class Error  { 
    /**
    *
    * @var ?string $message
    */
    public ?string $message;
    
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
    /**
    *
    * @var ?string $api_error_code
    */
    public ?string $api_error_code;
    
    /**
    *
    * @var ?string $error_code
    */
    public ?string $error_code;
    
    /**
    *
    * @var ?string $error_msg
    */
    public ?string $error_msg;
    
    /**
    *
    * @var ?string $http_status_code
    */
    public ?string $http_status_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "message" , "type" , "api_error_code" , "error_code" , "error_msg" , "http_status_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $message,
        ?string $type,
        ?string $api_error_code,
        ?string $error_code,
        ?string $error_msg,
        ?string $http_status_code,
    )
    { 
        $this->message = $message;
        $this->type = $type;
        $this->api_error_code = $api_error_code;
        $this->error_code = $error_code;
        $this->error_msg = $error_msg;
        $this->http_status_code = $http_status_code;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['message'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['api_error_code'] ?? null,
        $resourceAttributes['error_code'] ?? null,
        $resourceAttributes['error_msg'] ?? null,
        $resourceAttributes['http_status_code'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['message' => $this->message,
        'type' => $this->type,
        'api_error_code' => $this->api_error_code,
        'error_code' => $this->error_code,
        'error_msg' => $this->error_msg,
        'http_status_code' => $this->http_status_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>