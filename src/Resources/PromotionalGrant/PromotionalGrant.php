<?php

namespace Chargebee\Resources\PromotionalGrant;

class PromotionalGrant  { 
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
    * @var ?string $amount
    */
    public ?string $amount;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *
    * @var ?string $metadata
    */
    public ?string $metadata;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "subscription_id" , "unit_id" , "amount" , "expires_at" , "metadata"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $subscription_id,
        ?string $unit_id,
        ?string $amount,
        ?int $expires_at,
        ?string $metadata,
    )
    { 
        $this->subscription_id = $subscription_id;
        $this->unit_id = $unit_id;
        $this->amount = $amount;
        $this->expires_at = $expires_at;
        $this->metadata = $metadata;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['unit_id'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        $resourceAttributes['metadata'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['subscription_id' => $this->subscription_id,
        'unit_id' => $this->unit_id,
        'amount' => $this->amount,
        'expires_at' => $this->expires_at,
        'metadata' => $this->metadata,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>