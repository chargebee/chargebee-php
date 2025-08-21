<?php

namespace Chargebee\Resources\PaymentSource;

class Mandate  { 
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
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "subscription_id" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $subscription_id,
        ?int $created_at,
    )
    { 
        $this->id = $id;
        $this->subscription_id = $subscription_id;
        $this->created_at = $created_at;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'subscription_id' => $this->subscription_id,
        'created_at' => $this->created_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>