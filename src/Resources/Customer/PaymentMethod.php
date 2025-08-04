<?php

namespace Chargebee\Resources\Customer;

class PaymentMethod  { 
    /**
    *
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
    /**
    *
    * @var ?string $reference_id
    */
    public ?string $reference_id;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\Type $type
    */
    public ?\Chargebee\ClassBasedEnums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\Gateway $gateway
    */
    public ?\Chargebee\ClassBasedEnums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Resources\Customer\ClassBasedEnums\PaymentMethodStatus $status
    */
    public ?\Chargebee\Resources\Customer\ClassBasedEnums\PaymentMethodStatus $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "gateway_account_id" , "reference_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $gateway_account_id,
        ?string $reference_id,
        ?\Chargebee\ClassBasedEnums\Type $type,
        ?\Chargebee\ClassBasedEnums\Gateway $gateway,
        ?\Chargebee\Resources\Customer\ClassBasedEnums\PaymentMethodStatus $status,
    )
    { 
        $this->gateway_account_id = $gateway_account_id;
        $this->reference_id = $reference_id; 
        $this->type = $type;
        $this->gateway = $gateway; 
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        
        
        isset($resourceAttributes['type']) ? \Chargebee\ClassBasedEnums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['gateway']) ? \Chargebee\ClassBasedEnums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Customer\ClassBasedEnums\PaymentMethodStatus::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['gateway_account_id' => $this->gateway_account_id,
        'reference_id' => $this->reference_id,
        
        'type' => $this->type?->value,
        
        'gateway' => $this->gateway?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>