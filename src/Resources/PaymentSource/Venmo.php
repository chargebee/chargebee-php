<?php

namespace Chargebee\Resources\PaymentSource;

class Venmo  { 
    /**
    *
    * @var ?string $user_name
    */
    public ?string $user_name;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "user_name"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $user_name,
    )
    { 
        $this->user_name = $user_name;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['user_name'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['user_name' => $this->user_name,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>