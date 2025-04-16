<?php

namespace Chargebee\Resources\PaymentSource;

class Upi  { 
    /**
    *
    * @var ?string $vpa
    */
    public ?string $vpa;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "vpa"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $vpa,
    )
    { 
        $this->vpa = $vpa;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['vpa'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['vpa' => $this->vpa,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>