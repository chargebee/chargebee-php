<?php

namespace Chargebee\Resources\PaymentSource;

class KlarnaPayNow  { 
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "email"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $email,
    )
    { 
        $this->email = $email;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['email'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['email' => $this->email,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>