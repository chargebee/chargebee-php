<?php

namespace Chargebee\Resources\PaymentIntent;

class PaymentAttempt  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var string $status
    */
    public string $status;
    
    /**
    *
    * @var ?string $payment_method_type
    */
    public ?string $payment_method_type;
    
    /**
    *
    * @var ?string $id_at_gateway
    */
    public ?string $id_at_gateway;
    
    /**
    *
    * @var ?string $error_code
    */
    public ?string $error_code;
    
    /**
    *
    * @var ?string $error_text
    */
    public ?string $error_text;
    
    /**
    *
    * @var int $created_at
    */
    public int $created_at;
    
    /**
    *
    * @var int $modified_at
    */
    public int $modified_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\GatewayErrorDetail\GatewayErrorDetail $error_detail
    */
    public ?\Chargebee\Resources\GatewayErrorDetail\GatewayErrorDetail $error_detail;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "status" , "payment_method_type" , "id_at_gateway" , "error_code" , "error_text" , "created_at" , "modified_at" , "error_detail"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        string $status,
        ?string $payment_method_type,
        ?string $id_at_gateway,
        ?string $error_code,
        ?string $error_text,
        int $created_at,
        int $modified_at,
        ?\Chargebee\Resources\GatewayErrorDetail\GatewayErrorDetail $error_detail,
    )
    { 
        $this->id = $id;
        $this->status = $status;
        $this->payment_method_type = $payment_method_type;
        $this->id_at_gateway = $id_at_gateway;
        $this->error_code = $error_code;
        $this->error_text = $error_text;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->error_detail = $error_detail;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['status'] ,
        $resourceAttributes['payment_method_type'] ?? null,
        $resourceAttributes['id_at_gateway'] ?? null,
        $resourceAttributes['error_code'] ?? null,
        $resourceAttributes['error_text'] ?? null,
        $resourceAttributes['created_at'] ,
        $resourceAttributes['modified_at'] ,
        isset($resourceAttributes['error_detail']) ? \Chargebee\Resources\GatewayErrorDetail\GatewayErrorDetail::from($resourceAttributes['error_detail']) : null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'status' => $this->status,
        'payment_method_type' => $this->payment_method_type,
        'id_at_gateway' => $this->id_at_gateway,
        'error_code' => $this->error_code,
        'error_text' => $this->error_text,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->error_detail instanceof \Chargebee\Resources\GatewayErrorDetail\GatewayErrorDetail){
            $data['error_detail'] = $this->error_detail->toArray();
        }
        

        
        return $data;
    }
}
?>