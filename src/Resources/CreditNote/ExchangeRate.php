<?php

namespace Chargebee\Resources\CreditNote;

class ExchangeRate  { 
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?float $rate
    */
    public ?float $rate;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "currency_code" , "rate"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $currency_code,
        ?float $rate,
    )
    { 
        $this->currency_code = $currency_code;
        $this->rate = $rate;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['rate'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['currency_code' => $this->currency_code,
        'rate' => $this->rate,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>