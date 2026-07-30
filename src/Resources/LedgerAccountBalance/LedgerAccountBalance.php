<?php

namespace Chargebee\Resources\LedgerAccountBalance;

class LedgerAccountBalance  { 
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $unit_id
    */
    public ?string $unit_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?ProvisionedBalance $provisioned_balance
    */
    public ?ProvisionedBalance $provisioned_balance;
    
    /**
    *
    * @var ?OverdraftBalance $overdraft_balance
    */
    public ?OverdraftBalance $overdraft_balance;
    
    /**
    *
    * @var ?\Chargebee\Resources\LedgerAccountBalance\Enums\UnitType $unit_type
    */
    public ?\Chargebee\Resources\LedgerAccountBalance\Enums\UnitType $unit_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "subscription_id" , "unit_id" , "created_at" , "modified_at" , "resource_version" , "provisioned_balance" , "overdraft_balance"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $subscription_id,
        ?string $unit_id,
        ?int $created_at,
        ?int $modified_at,
        ?int $resource_version,
        ?ProvisionedBalance $provisioned_balance,
        ?OverdraftBalance $overdraft_balance,
        ?\Chargebee\Resources\LedgerAccountBalance\Enums\UnitType $unit_type,
    )
    { 
        $this->subscription_id = $subscription_id;
        $this->unit_id = $unit_id;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->resource_version = $resource_version;
        $this->provisioned_balance = $provisioned_balance;
        $this->overdraft_balance = $overdraft_balance;  
        $this->unit_type = $unit_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['unit_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        isset($resourceAttributes['provisioned_balance']) ? ProvisionedBalance::from($resourceAttributes['provisioned_balance']) : null,
        isset($resourceAttributes['overdraft_balance']) ? OverdraftBalance::from($resourceAttributes['overdraft_balance']) : null,
        
         
        isset($resourceAttributes['unit_type']) ? \Chargebee\Resources\LedgerAccountBalance\Enums\UnitType::tryFromValue($resourceAttributes['unit_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['subscription_id' => $this->subscription_id,
        'unit_id' => $this->unit_id,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'resource_version' => $this->resource_version,
        
        
        
        'unit_type' => $this->unit_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->provisioned_balance instanceof ProvisionedBalance){
            $data['provisioned_balance'] = $this->provisioned_balance->toArray();
        }
        if($this->overdraft_balance instanceof OverdraftBalance){
            $data['overdraft_balance'] = $this->overdraft_balance->toArray();
        }
        

        
        return $data;
    }
}
?>