<?php

namespace Chargebee\Resources\Currency;

class Currency  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?bool $enabled
    */
    public ?bool $enabled;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?bool $is_base_currency
    */
    public ?bool $is_base_currency;
    
    /**
    *
    * @var ?string $manual_exchange_rate
    */
    public ?string $manual_exchange_rate;
    
    /**
    *
    * @var ?\Chargebee\Resources\Currency\Enums\ForexType $forex_type
    */
    public ?\Chargebee\Resources\Currency\Enums\ForexType $forex_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "enabled" , "currency_code" , "is_base_currency" , "manual_exchange_rate"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?bool $enabled,
        ?string $currency_code,
        ?bool $is_base_currency,
        ?string $manual_exchange_rate,
        ?\Chargebee\Resources\Currency\Enums\ForexType $forex_type,
    )
    { 
        $this->id = $id;
        $this->enabled = $enabled;
        $this->currency_code = $currency_code;
        $this->is_base_currency = $is_base_currency;
        $this->manual_exchange_rate = $manual_exchange_rate;  
        $this->forex_type = $forex_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['enabled'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['is_base_currency'] ?? null,
        $resourceAttributes['manual_exchange_rate'] ?? null,
        
         
        isset($resourceAttributes['forex_type']) ? \Chargebee\Resources\Currency\Enums\ForexType::tryFromValue($resourceAttributes['forex_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'enabled' => $this->enabled,
        'currency_code' => $this->currency_code,
        'is_base_currency' => $this->is_base_currency,
        'manual_exchange_rate' => $this->manual_exchange_rate,
        
        'forex_type' => $this->forex_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>