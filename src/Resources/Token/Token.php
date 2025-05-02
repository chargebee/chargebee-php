<?php

namespace Chargebee\Resources\Token;

class Token  { 
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
    * @var ?string $id_at_vault
    */
    public ?string $id_at_vault;
    
    /**
    *
    * @var ?string $ip_address
    */
    public ?string $ip_address;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $expired_at
    */
    public ?int $expired_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Enums\PaymentMethodType $payment_method_type
    */
    public ?\Chargebee\Enums\PaymentMethodType $payment_method_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Token\Enums\Status $status
    */
    public ?\Chargebee\Resources\Token\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Token\Enums\Vault $vault
    */
    public ?\Chargebee\Resources\Token\Enums\Vault $vault;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "gateway_account_id" , "id_at_vault" , "ip_address" , "resource_version" , "updated_at" , "created_at" , "expired_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $gateway_account_id,
        ?string $id_at_vault,
        ?string $ip_address,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?int $expired_at,
        ?\Chargebee\Enums\Gateway $gateway,
        ?\Chargebee\Enums\PaymentMethodType $payment_method_type,
        ?\Chargebee\Resources\Token\Enums\Status $status,
        ?\Chargebee\Resources\Token\Enums\Vault $vault,
    )
    { 
        $this->id = $id;
        $this->gateway_account_id = $gateway_account_id;
        $this->id_at_vault = $id_at_vault;
        $this->ip_address = $ip_address;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->expired_at = $expired_at; 
        $this->gateway = $gateway;
        $this->payment_method_type = $payment_method_type; 
        $this->status = $status;
        $this->vault = $vault;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['id_at_vault'] ?? null,
        $resourceAttributes['ip_address'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['expired_at'] ?? null,
        
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
        
        isset($resourceAttributes['payment_method_type']) ? \Chargebee\Enums\PaymentMethodType::tryFromValue($resourceAttributes['payment_method_type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Token\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['vault']) ? \Chargebee\Resources\Token\Enums\Vault::tryFromValue($resourceAttributes['vault']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'gateway_account_id' => $this->gateway_account_id,
        'id_at_vault' => $this->id_at_vault,
        'ip_address' => $this->ip_address,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        'expired_at' => $this->expired_at,
        
        'gateway' => $this->gateway?->value,
        
        'payment_method_type' => $this->payment_method_type?->value,
        
        'status' => $this->status?->value,
        
        'vault' => $this->vault?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>