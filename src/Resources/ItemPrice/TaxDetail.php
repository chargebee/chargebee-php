<?php

namespace Chargebee\Resources\ItemPrice;

class TaxDetail  { 
    /**
    *
    * @var ?string $tax_profile_id
    */
    public ?string $tax_profile_id;
    
    /**
    *
    * @var ?string $avalara_sale_type
    */
    public ?string $avalara_sale_type;
    
    /**
    *
    * @var ?int $avalara_transaction_type
    */
    public ?int $avalara_transaction_type;
    
    /**
    *
    * @var ?int $avalara_service_type
    */
    public ?int $avalara_service_type;
    
    /**
    *
    * @var ?string $avalara_tax_code
    */
    public ?string $avalara_tax_code;
    
    /**
    *
    * @var ?string $hsn_code
    */
    public ?string $hsn_code;
    
    /**
    *
    * @var ?string $taxjar_product_code
    */
    public ?string $taxjar_product_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "tax_profile_id" , "avalara_sale_type" , "avalara_transaction_type" , "avalara_service_type" , "avalara_tax_code" , "hsn_code" , "taxjar_product_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $tax_profile_id,
        ?string $avalara_sale_type,
        ?int $avalara_transaction_type,
        ?int $avalara_service_type,
        ?string $avalara_tax_code,
        ?string $hsn_code,
        ?string $taxjar_product_code,
    )
    { 
        $this->tax_profile_id = $tax_profile_id;
        $this->avalara_sale_type = $avalara_sale_type;
        $this->avalara_transaction_type = $avalara_transaction_type;
        $this->avalara_service_type = $avalara_service_type;
        $this->avalara_tax_code = $avalara_tax_code;
        $this->hsn_code = $hsn_code;
        $this->taxjar_product_code = $taxjar_product_code;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['tax_profile_id'] ?? null,
        $resourceAttributes['avalara_sale_type'] ?? null,
        $resourceAttributes['avalara_transaction_type'] ?? null,
        $resourceAttributes['avalara_service_type'] ?? null,
        $resourceAttributes['avalara_tax_code'] ?? null,
        $resourceAttributes['hsn_code'] ?? null,
        $resourceAttributes['taxjar_product_code'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['tax_profile_id' => $this->tax_profile_id,
        'avalara_sale_type' => $this->avalara_sale_type,
        'avalara_transaction_type' => $this->avalara_transaction_type,
        'avalara_service_type' => $this->avalara_service_type,
        'avalara_tax_code' => $this->avalara_tax_code,
        'hsn_code' => $this->hsn_code,
        'taxjar_product_code' => $this->taxjar_product_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>