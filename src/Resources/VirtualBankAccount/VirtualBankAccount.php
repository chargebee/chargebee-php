<?php

namespace Chargebee\Resources\VirtualBankAccount;

class VirtualBankAccount  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    *
    * @var ?string $bank_name
    */
    public ?string $bank_name;
    
    /**
    *
    * @var ?string $account_number
    */
    public ?string $account_number;
    
    /**
    *
    * @var ?string $routing_number
    */
    public ?string $routing_number;
    
    /**
    *
    * @var ?string $swift_code
    */
    public ?string $swift_code;
    
    /**
    *
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
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
    * @var ?string $reference_id
    */
    public ?string $reference_id;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Resources\VirtualBankAccount\Enums\Scheme $scheme
    */
    public ?\Chargebee\Resources\VirtualBankAccount\Enums\Scheme $scheme;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "email" , "bank_name" , "account_number" , "routing_number" , "swift_code" , "gateway_account_id" , "resource_version" , "updated_at" , "created_at" , "reference_id" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $email,
        ?string $bank_name,
        ?string $account_number,
        ?string $routing_number,
        ?string $swift_code,
        ?string $gateway_account_id,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?string $reference_id,
        ?bool $deleted,
        ?\Chargebee\Enums\Gateway $gateway,
        ?\Chargebee\Resources\VirtualBankAccount\Enums\Scheme $scheme,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->email = $email;
        $this->bank_name = $bank_name;
        $this->account_number = $account_number;
        $this->routing_number = $routing_number;
        $this->swift_code = $swift_code;
        $this->gateway_account_id = $gateway_account_id;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->reference_id = $reference_id;
        $this->deleted = $deleted; 
        $this->gateway = $gateway; 
        $this->scheme = $scheme; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['email'] ?? null,
        $resourceAttributes['bank_name'] ?? null,
        $resourceAttributes['account_number'] ?? null,
        $resourceAttributes['routing_number'] ?? null,
        $resourceAttributes['swift_code'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
         
        isset($resourceAttributes['scheme']) ? \Chargebee\Resources\VirtualBankAccount\Enums\Scheme::tryFromValue($resourceAttributes['scheme']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'email' => $this->email,
        'bank_name' => $this->bank_name,
        'account_number' => $this->account_number,
        'routing_number' => $this->routing_number,
        'swift_code' => $this->swift_code,
        'gateway_account_id' => $this->gateway_account_id,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        'reference_id' => $this->reference_id,
        'deleted' => $this->deleted,
        
        'gateway' => $this->gateway?->value,
        
        'scheme' => $this->scheme?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>