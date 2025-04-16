<?php

namespace Chargebee\Resources\ItemPrice;

class AccountingDetail  { 
    /**
    *
    * @var ?string $sku
    */
    public ?string $sku;
    
    /**
    *
    * @var ?string $accounting_code
    */
    public ?string $accounting_code;
    
    /**
    *
    * @var ?string $accounting_category1
    */
    public ?string $accounting_category1;
    
    /**
    *
    * @var ?string $accounting_category2
    */
    public ?string $accounting_category2;
    
    /**
    *
    * @var ?string $accounting_category3
    */
    public ?string $accounting_category3;
    
    /**
    *
    * @var ?string $accounting_category4
    */
    public ?string $accounting_category4;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "sku" , "accounting_code" , "accounting_category1" , "accounting_category2" , "accounting_category3" , "accounting_category4"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $sku,
        ?string $accounting_code,
        ?string $accounting_category1,
        ?string $accounting_category2,
        ?string $accounting_category3,
        ?string $accounting_category4,
    )
    { 
        $this->sku = $sku;
        $this->accounting_code = $accounting_code;
        $this->accounting_category1 = $accounting_category1;
        $this->accounting_category2 = $accounting_category2;
        $this->accounting_category3 = $accounting_category3;
        $this->accounting_category4 = $accounting_category4;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['sku'] ?? null,
        $resourceAttributes['accounting_code'] ?? null,
        $resourceAttributes['accounting_category1'] ?? null,
        $resourceAttributes['accounting_category2'] ?? null,
        $resourceAttributes['accounting_category3'] ?? null,
        $resourceAttributes['accounting_category4'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['sku' => $this->sku,
        'accounting_code' => $this->accounting_code,
        'accounting_category1' => $this->accounting_category1,
        'accounting_category2' => $this->accounting_category2,
        'accounting_category3' => $this->accounting_category3,
        'accounting_category4' => $this->accounting_category4,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>