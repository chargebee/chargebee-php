<?php

namespace Chargebee\Resources\UsageCharge;

class UsageCharge  { 
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $feature_id
    */
    public ?string $feature_id;
    
    /**
    *
    * @var ?string $included_usage
    */
    public ?string $included_usage;
    
    /**
    *
    * @var ?string $total_usage
    */
    public ?string $total_usage;
    
    /**
    *
    * @var ?string $on_demand_usage
    */
    public ?string $on_demand_usage;
    
    /**
    *
    * @var ?string $metered_item_price_id
    */
    public ?string $metered_item_price_id;
    
    /**
    *
    * @var ?string $amount
    */
    public ?string $amount;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $usage_from
    */
    public ?int $usage_from;
    
    /**
    *
    * @var ?int $usage_to
    */
    public ?int $usage_to;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "subscription_id" , "feature_id" , "included_usage" , "total_usage" , "on_demand_usage" , "metered_item_price_id" , "amount" , "currency_code" , "usage_from" , "usage_to"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $subscription_id,
        ?string $feature_id,
        ?string $included_usage,
        ?string $total_usage,
        ?string $on_demand_usage,
        ?string $metered_item_price_id,
        ?string $amount,
        ?string $currency_code,
        ?int $usage_from,
        ?int $usage_to,
    )
    { 
        $this->subscription_id = $subscription_id;
        $this->feature_id = $feature_id;
        $this->included_usage = $included_usage;
        $this->total_usage = $total_usage;
        $this->on_demand_usage = $on_demand_usage;
        $this->metered_item_price_id = $metered_item_price_id;
        $this->amount = $amount;
        $this->currency_code = $currency_code;
        $this->usage_from = $usage_from;
        $this->usage_to = $usage_to;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['included_usage'] ?? null,
        $resourceAttributes['total_usage'] ?? null,
        $resourceAttributes['on_demand_usage'] ?? null,
        $resourceAttributes['metered_item_price_id'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['usage_from'] ?? null,
        $resourceAttributes['usage_to'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['subscription_id' => $this->subscription_id,
        'feature_id' => $this->feature_id,
        'included_usage' => $this->included_usage,
        'total_usage' => $this->total_usage,
        'on_demand_usage' => $this->on_demand_usage,
        'metered_item_price_id' => $this->metered_item_price_id,
        'amount' => $this->amount,
        'currency_code' => $this->currency_code,
        'usage_from' => $this->usage_from,
        'usage_to' => $this->usage_to,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>