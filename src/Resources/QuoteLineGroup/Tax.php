<?php

namespace Chargebee\Resources\QuoteLineGroup;

class Tax  { 
    /**
    *
    * @var string $name
    */
    public string $name;
    
    /**
    *
    * @var int $amount
    */
    public int $amount;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "name" , "amount" , "description"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $name,
        int $amount,
        ?string $description,
    )
    { 
        $this->name = $name;
        $this->amount = $amount;
        $this->description = $description;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['name'] ,
        $resourceAttributes['amount'] ,
        $resourceAttributes['description'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['name' => $this->name,
        'amount' => $this->amount,
        'description' => $this->description,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>