<?php

namespace Chargebee\Resources\GatewayPaymentMethodToken;

class GatewayPaymentMethodToken  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
    /**
    *
    * @var ?string $gateway_customer_id
    */
    public ?string $gateway_customer_id;
    
    /**
    *
    * @var ?string $gateway_token
    */
    public ?string $gateway_token;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Resources\GatewayPaymentMethodToken\Enums\Status $status
    */
    public ?\Chargebee\Resources\GatewayPaymentMethodToken\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "gateway_account_id" , "gateway_customer_id" , "gateway_token" , "created_at" , "updated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $gateway_account_id,
        ?string $gateway_customer_id,
        ?string $gateway_token,
        ?int $created_at,
        ?int $updated_at,
        ?\Chargebee\Enums\Gateway $gateway,
        ?\Chargebee\Resources\GatewayPaymentMethodToken\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->gateway_account_id = $gateway_account_id;
        $this->gateway_customer_id = $gateway_customer_id;
        $this->gateway_token = $gateway_token;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at; 
        $this->gateway = $gateway; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['gateway_customer_id'] ?? null,
        $resourceAttributes['gateway_token'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\GatewayPaymentMethodToken\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'gateway_account_id' => $this->gateway_account_id,
        'gateway_customer_id' => $this->gateway_customer_id,
        'gateway_token' => $this->gateway_token,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        
        'gateway' => $this->gateway?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>