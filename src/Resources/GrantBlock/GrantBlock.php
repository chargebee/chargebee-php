<?php

namespace Chargebee\Resources\GrantBlock;

class GrantBlock  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $granted_amount
    */
    public ?string $granted_amount;
    
    /**
    *
    * @var ?int $effective_from
    */
    public ?int $effective_from;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $balance
    */
    public ?string $balance;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $hold_amount
    */
    public ?string $hold_amount;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $used_amount
    */
    public ?string $used_amount;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $expired_amount
    */
    public ?string $expired_amount;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $rolled_over_amount
    */
    public ?string $rolled_over_amount;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $voided_amount
    */
    public ?string $voided_amount;
    
    /**
    *
    * @var ?string $origin_grant_block_id
    */
    public ?string $origin_grant_block_id;
    
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
    * @var ?ProvisionedBlockBalance $provisioned_block_balance
    */
    public ?ProvisionedBlockBalance $provisioned_block_balance;
    
    /**
    *
    * @var ?OverdraftBlockBalance $overdraft_block_balance
    */
    public ?OverdraftBlockBalance $overdraft_block_balance;
    
    /**
    *
    * @var mixed $metadata
    */
    public mixed $metadata;
    
    /**
    *
    * @var ?\Chargebee\Enums\Status $status
    */
    public ?\Chargebee\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\GrantBlock\Enums\UnitType $unit_type
    */
    public ?\Chargebee\Resources\GrantBlock\Enums\UnitType $unit_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\GrantBlock\Enums\AccountType $account_type
    */
    public ?\Chargebee\Resources\GrantBlock\Enums\AccountType $account_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\GrantBlock\Enums\GrantSource $grant_source
    */
    public ?\Chargebee\Resources\GrantBlock\Enums\GrantSource $grant_source;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "subscription_id" , "unit_id" , "granted_amount" , "effective_from" , "expires_at" , "balance" , "hold_amount" , "used_amount" , "expired_amount" , "rolled_over_amount" , "voided_amount" , "origin_grant_block_id" , "created_at" , "modified_at" , "resource_version" , "provisioned_block_balance" , "overdraft_block_balance" , "metadata"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $subscription_id,
        ?string $unit_id,
        ?string $granted_amount,
        ?int $effective_from,
        ?int $expires_at,
        ?string $balance,
        ?string $hold_amount,
        ?string $used_amount,
        ?string $expired_amount,
        ?string $rolled_over_amount,
        ?string $voided_amount,
        ?string $origin_grant_block_id,
        ?int $created_at,
        ?int $modified_at,
        ?int $resource_version,
        ?ProvisionedBlockBalance $provisioned_block_balance,
        ?OverdraftBlockBalance $overdraft_block_balance,
        mixed $metadata,
        ?\Chargebee\Enums\Status $status,
        ?\Chargebee\Resources\GrantBlock\Enums\UnitType $unit_type,
        ?\Chargebee\Resources\GrantBlock\Enums\AccountType $account_type,
        ?\Chargebee\Resources\GrantBlock\Enums\GrantSource $grant_source,
    )
    { 
        $this->id = $id;
        $this->subscription_id = $subscription_id;
        $this->unit_id = $unit_id;
        $this->granted_amount = $granted_amount;
        $this->effective_from = $effective_from;
        $this->expires_at = $expires_at;
        $this->balance = $balance;
        $this->hold_amount = $hold_amount;
        $this->used_amount = $used_amount;
        $this->expired_amount = $expired_amount;
        $this->rolled_over_amount = $rolled_over_amount;
        $this->voided_amount = $voided_amount;
        $this->origin_grant_block_id = $origin_grant_block_id;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->resource_version = $resource_version;
        $this->provisioned_block_balance = $provisioned_block_balance;
        $this->overdraft_block_balance = $overdraft_block_balance;
        $this->metadata = $metadata; 
        $this->status = $status; 
        $this->unit_type = $unit_type;
        $this->account_type = $account_type;
        $this->grant_source = $grant_source; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['unit_id'] ?? null,
        $resourceAttributes['granted_amount'] ?? null,
        $resourceAttributes['effective_from'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        $resourceAttributes['balance'] ?? null,
        $resourceAttributes['hold_amount'] ?? null,
        $resourceAttributes['used_amount'] ?? null,
        $resourceAttributes['expired_amount'] ?? null,
        $resourceAttributes['rolled_over_amount'] ?? null,
        $resourceAttributes['voided_amount'] ?? null,
        $resourceAttributes['origin_grant_block_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        isset($resourceAttributes['provisioned_block_balance']) ? ProvisionedBlockBalance::from($resourceAttributes['provisioned_block_balance']) : null,
        isset($resourceAttributes['overdraft_block_balance']) ? OverdraftBlockBalance::from($resourceAttributes['overdraft_block_balance']) : null,
        $resourceAttributes['metadata'] ?? null,
        
        
        isset($resourceAttributes['status']) ? \Chargebee\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        isset($resourceAttributes['unit_type']) ? \Chargebee\Resources\GrantBlock\Enums\UnitType::tryFromValue($resourceAttributes['unit_type']) : null,
        
        isset($resourceAttributes['account_type']) ? \Chargebee\Resources\GrantBlock\Enums\AccountType::tryFromValue($resourceAttributes['account_type']) : null,
        
        isset($resourceAttributes['grant_source']) ? \Chargebee\Resources\GrantBlock\Enums\GrantSource::tryFromValue($resourceAttributes['grant_source']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'subscription_id' => $this->subscription_id,
        'unit_id' => $this->unit_id,
        'granted_amount' => $this->granted_amount,
        'effective_from' => $this->effective_from,
        'expires_at' => $this->expires_at,
        'balance' => $this->balance,
        'hold_amount' => $this->hold_amount,
        'used_amount' => $this->used_amount,
        'expired_amount' => $this->expired_amount,
        'rolled_over_amount' => $this->rolled_over_amount,
        'voided_amount' => $this->voided_amount,
        'origin_grant_block_id' => $this->origin_grant_block_id,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'resource_version' => $this->resource_version,
        
        
        'metadata' => $this->metadata,
        
        'status' => $this->status?->value,
        
        'unit_type' => $this->unit_type?->value,
        
        'account_type' => $this->account_type?->value,
        
        'grant_source' => $this->grant_source?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->provisioned_block_balance instanceof ProvisionedBlockBalance){
            $data['provisioned_block_balance'] = $this->provisioned_block_balance->toArray();
        }
        if($this->overdraft_block_balance instanceof OverdraftBlockBalance){
            $data['overdraft_block_balance'] = $this->overdraft_block_balance->toArray();
        }
        

        
        return $data;
    }
}
?>