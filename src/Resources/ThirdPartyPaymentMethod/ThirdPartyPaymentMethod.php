<?php

namespace Chargebee\Resources\ThirdPartyPaymentMethod;

class ThirdPartyPaymentMethod  { 
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
    * @var ?\Chargebee\Enums\Type $type
    */
    public ?\Chargebee\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
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
        ?\Chargebee\Enums\Type $type,
        ?\Chargebee\Enums\Gateway $gateway,
    )
    { 
        $this->gateway_account_id = $gateway_account_id;
        $this->reference_id = $reference_id; 
        $this->type = $type;
        $this->gateway = $gateway;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        
        
        isset($resourceAttributes['type']) ? \Chargebee\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['gateway_account_id' => $this->gateway_account_id,
        'reference_id' => $this->reference_id,
        
        'type' => $this->type?->value,
        
        'gateway' => $this->gateway?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>