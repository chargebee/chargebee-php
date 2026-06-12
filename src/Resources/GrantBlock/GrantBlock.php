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
    *
    * @var ?string $balance
    */
    public ?string $balance;
    
    /**
    *
    * @var ?string $hold_amount
    */
    public ?string $hold_amount;
    
    /**
    *
    * @var ?string $used_amount
    */
    public ?string $used_amount;
    
    /**
    *
    * @var ?string $expired_amount
    */
    public ?string $expired_amount;
    
    /**
    *
    * @var ?string $rolled_over_amount
    */
    public ?string $rolled_over_amount;
    
    /**
    *
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
    * @var ?string $metadata
    */
    public ?string $metadata;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?string $unit_id
    */
    public ?string $unit_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\Status $status
    */
    public ?\Chargebee\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\GrantBlock\Enums\GrantSource $grant_source
    */
    public ?\Chargebee\Resources\GrantBlock\Enums\GrantSource $grant_source;
    
    /**
    *
    * @var ?\Chargebee\Resources\GrantBlock\Enums\AccountType $account_type
    */
    public ?\Chargebee\Resources\GrantBlock\Enums\AccountType $account_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\GrantBlock\Enums\UnitType $unit_type
    */
    public ?\Chargebee\Resources\GrantBlock\Enums\UnitType $unit_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "granted_amount" , "effective_from" , "expires_at" , "balance" , "hold_amount" , "used_amount" , "expired_amount" , "rolled_over_amount" , "voided_amount" , "origin_grant_block_id" , "metadata" , "created_at" , "unit_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
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
        ?string $metadata,
        ?int $created_at,
        ?string $unit_id,
        ?\Chargebee\Enums\Status $status,
        ?\Chargebee\Resources\GrantBlock\Enums\GrantSource $grant_source,
        ?\Chargebee\Resources\GrantBlock\Enums\AccountType $account_type,
        ?\Chargebee\Resources\GrantBlock\Enums\UnitType $unit_type,
    )
    { 
        $this->id = $id;
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
        $this->metadata = $metadata;
        $this->created_at = $created_at;
        $this->unit_id = $unit_id; 
        $this->status = $status; 
        $this->grant_source = $grant_source;
        $this->account_type = $account_type;
        $this->unit_type = $unit_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
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
        $resourceAttributes['metadata'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['unit_id'] ?? null,
        
        
        isset($resourceAttributes['status']) ? \Chargebee\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        isset($resourceAttributes['grant_source']) ? \Chargebee\Resources\GrantBlock\Enums\GrantSource::tryFromValue($resourceAttributes['grant_source']) : null,
        
        isset($resourceAttributes['account_type']) ? \Chargebee\Resources\GrantBlock\Enums\AccountType::tryFromValue($resourceAttributes['account_type']) : null,
        
        isset($resourceAttributes['unit_type']) ? \Chargebee\Resources\GrantBlock\Enums\UnitType::tryFromValue($resourceAttributes['unit_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
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
        'metadata' => $this->metadata,
        'created_at' => $this->created_at,
        'unit_id' => $this->unit_id,
        
        'status' => $this->status?->value,
        
        'grant_source' => $this->grant_source?->value,
        
        'account_type' => $this->account_type?->value,
        
        'unit_type' => $this->unit_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>