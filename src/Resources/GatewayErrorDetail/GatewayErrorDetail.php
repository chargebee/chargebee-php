<?php

namespace Chargebee\Resources\GatewayErrorDetail;

class GatewayErrorDetail  { 
    /**
    *
    * @var ?string $request_id
    */
    public ?string $request_id;
    
    /**
    *
    * @var ?string $error_category
    */
    public ?string $error_category;
    
    /**
    *
    * @var ?string $error_code
    */
    public ?string $error_code;
    
    /**
    *
    * @var ?string $error_message
    */
    public ?string $error_message;
    
    /**
    *
    * @var ?string $decline_code
    */
    public ?string $decline_code;
    
    /**
    *
    * @var ?string $decline_message
    */
    public ?string $decline_message;
    
    /**
    *
    * @var ?string $network_error_code
    */
    public ?string $network_error_code;
    
    /**
    *
    * @var ?string $network_error_message
    */
    public ?string $network_error_message;
    
    /**
    *
    * @var ?string $error_field
    */
    public ?string $error_field;
    
    /**
    *
    * @var ?string $recommendation_code
    */
    public ?string $recommendation_code;
    
    /**
    *
    * @var ?string $recommendation_message
    */
    public ?string $recommendation_message;
    
    /**
    *
    * @var ?string $processor_error_code
    */
    public ?string $processor_error_code;
    
    /**
    *
    * @var ?string $processor_error_message
    */
    public ?string $processor_error_message;
    
    /**
    *
    * @var ?string $error_cause_id
    */
    public ?string $error_cause_id;
    
    /**
    *
    * @var ?string $processor_advice_code
    */
    public ?string $processor_advice_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "request_id" , "error_category" , "error_code" , "error_message" , "decline_code" , "decline_message" , "network_error_code" , "network_error_message" , "error_field" , "recommendation_code" , "recommendation_message" , "processor_error_code" , "processor_error_message" , "error_cause_id" , "processor_advice_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $request_id,
        ?string $error_category,
        ?string $error_code,
        ?string $error_message,
        ?string $decline_code,
        ?string $decline_message,
        ?string $network_error_code,
        ?string $network_error_message,
        ?string $error_field,
        ?string $recommendation_code,
        ?string $recommendation_message,
        ?string $processor_error_code,
        ?string $processor_error_message,
        ?string $error_cause_id,
        ?string $processor_advice_code,
    )
    { 
        $this->request_id = $request_id;
        $this->error_category = $error_category;
        $this->error_code = $error_code;
        $this->error_message = $error_message;
        $this->decline_code = $decline_code;
        $this->decline_message = $decline_message;
        $this->network_error_code = $network_error_code;
        $this->network_error_message = $network_error_message;
        $this->error_field = $error_field;
        $this->recommendation_code = $recommendation_code;
        $this->recommendation_message = $recommendation_message;
        $this->processor_error_code = $processor_error_code;
        $this->processor_error_message = $processor_error_message;
        $this->error_cause_id = $error_cause_id;
        $this->processor_advice_code = $processor_advice_code;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['request_id'] ?? null,
        $resourceAttributes['error_category'] ?? null,
        $resourceAttributes['error_code'] ?? null,
        $resourceAttributes['error_message'] ?? null,
        $resourceAttributes['decline_code'] ?? null,
        $resourceAttributes['decline_message'] ?? null,
        $resourceAttributes['network_error_code'] ?? null,
        $resourceAttributes['network_error_message'] ?? null,
        $resourceAttributes['error_field'] ?? null,
        $resourceAttributes['recommendation_code'] ?? null,
        $resourceAttributes['recommendation_message'] ?? null,
        $resourceAttributes['processor_error_code'] ?? null,
        $resourceAttributes['processor_error_message'] ?? null,
        $resourceAttributes['error_cause_id'] ?? null,
        $resourceAttributes['processor_advice_code'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['request_id' => $this->request_id,
        'error_category' => $this->error_category,
        'error_code' => $this->error_code,
        'error_message' => $this->error_message,
        'decline_code' => $this->decline_code,
        'decline_message' => $this->decline_message,
        'network_error_code' => $this->network_error_code,
        'network_error_message' => $this->network_error_message,
        'error_field' => $this->error_field,
        'recommendation_code' => $this->recommendation_code,
        'recommendation_message' => $this->recommendation_message,
        'processor_error_code' => $this->processor_error_code,
        'processor_error_message' => $this->processor_error_message,
        'error_cause_id' => $this->error_cause_id,
        'processor_advice_code' => $this->processor_advice_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>