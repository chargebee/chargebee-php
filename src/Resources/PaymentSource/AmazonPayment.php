<?php

namespace Chargebee\Resources\PaymentSource;

class AmazonPayment  { 
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    *
    * @var ?string $agreement_id
    */
    public ?string $agreement_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "email" , "agreement_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $email,
        ?string $agreement_id,
    )
    { 
        $this->email = $email;
        $this->agreement_id = $agreement_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['email'] ?? null,
        $resourceAttributes['agreement_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['email' => $this->email,
        'agreement_id' => $this->agreement_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>