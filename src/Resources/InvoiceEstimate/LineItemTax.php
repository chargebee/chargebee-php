<?php

namespace Chargebee\Resources\InvoiceEstimate;

class LineItemTax  { 
    /**
    *
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    *
    * @var ?string $tax_name
    */
    public ?string $tax_name;
    
    /**
    *
    * @var ?int $tax_rate
    */
    public ?int $tax_rate;
    
    /**
    *
    * @var ?int $date_to
    */
    public ?int $date_to;
    
    /**
    *
    * @var ?int $date_from
    */
    public ?int $date_from;
    
    /**
    *
    * @var ?int $prorated_taxable_amount
    */
    public ?int $prorated_taxable_amount;
    
    /**
    *
    * @var ?bool $is_partial_tax_applied
    */
    public ?bool $is_partial_tax_applied;
    
    /**
    *
    * @var ?bool $is_non_compliance_tax
    */
    public ?bool $is_non_compliance_tax;
    
    /**
    *
    * @var ?int $taxable_amount
    */
    public ?int $taxable_amount;
    
    /**
    *
    * @var ?int $tax_amount
    */
    public ?int $tax_amount;
    
    /**
    *
    * @var ?string $tax_juris_type
    */
    public ?string $tax_juris_type;
    
    /**
    *
    * @var ?string $tax_juris_name
    */
    public ?string $tax_juris_name;
    
    /**
    *
    * @var ?string $tax_juris_code
    */
    public ?string $tax_juris_code;
    
    /**
    *
    * @var ?int $tax_amount_in_local_currency
    */
    public ?int $tax_amount_in_local_currency;
    
    /**
    *
    * @var ?string $local_currency_code
    */
    public ?string $local_currency_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "line_item_id" , "tax_name" , "tax_rate" , "date_to" , "date_from" , "prorated_taxable_amount" , "is_partial_tax_applied" , "is_non_compliance_tax" , "taxable_amount" , "tax_amount" , "tax_juris_type" , "tax_juris_name" , "tax_juris_code" , "tax_amount_in_local_currency" , "local_currency_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $line_item_id,
        ?string $tax_name,
        ?int $tax_rate,
        ?int $date_to,
        ?int $date_from,
        ?int $prorated_taxable_amount,
        ?bool $is_partial_tax_applied,
        ?bool $is_non_compliance_tax,
        ?int $taxable_amount,
        ?int $tax_amount,
        ?string $tax_juris_type,
        ?string $tax_juris_name,
        ?string $tax_juris_code,
        ?int $tax_amount_in_local_currency,
        ?string $local_currency_code,
    )
    { 
        $this->line_item_id = $line_item_id;
        $this->tax_name = $tax_name;
        $this->tax_rate = $tax_rate;
        $this->date_to = $date_to;
        $this->date_from = $date_from;
        $this->prorated_taxable_amount = $prorated_taxable_amount;
        $this->is_partial_tax_applied = $is_partial_tax_applied;
        $this->is_non_compliance_tax = $is_non_compliance_tax;
        $this->taxable_amount = $taxable_amount;
        $this->tax_amount = $tax_amount;
        $this->tax_juris_type = $tax_juris_type;
        $this->tax_juris_name = $tax_juris_name;
        $this->tax_juris_code = $tax_juris_code;
        $this->tax_amount_in_local_currency = $tax_amount_in_local_currency;
        $this->local_currency_code = $local_currency_code;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['line_item_id'] ?? null,
        $resourceAttributes['tax_name'] ?? null,
        $resourceAttributes['tax_rate'] ?? null,
        $resourceAttributes['date_to'] ?? null,
        $resourceAttributes['date_from'] ?? null,
        $resourceAttributes['prorated_taxable_amount'] ?? null,
        $resourceAttributes['is_partial_tax_applied'] ?? null,
        $resourceAttributes['is_non_compliance_tax'] ?? null,
        $resourceAttributes['taxable_amount'] ?? null,
        $resourceAttributes['tax_amount'] ?? null,
        $resourceAttributes['tax_juris_type'] ?? null,
        $resourceAttributes['tax_juris_name'] ?? null,
        $resourceAttributes['tax_juris_code'] ?? null,
        $resourceAttributes['tax_amount_in_local_currency'] ?? null,
        $resourceAttributes['local_currency_code'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['line_item_id' => $this->line_item_id,
        'tax_name' => $this->tax_name,
        'tax_rate' => $this->tax_rate,
        'date_to' => $this->date_to,
        'date_from' => $this->date_from,
        'prorated_taxable_amount' => $this->prorated_taxable_amount,
        'is_partial_tax_applied' => $this->is_partial_tax_applied,
        'is_non_compliance_tax' => $this->is_non_compliance_tax,
        'taxable_amount' => $this->taxable_amount,
        'tax_amount' => $this->tax_amount,
        'tax_juris_type' => $this->tax_juris_type,
        'tax_juris_name' => $this->tax_juris_name,
        'tax_juris_code' => $this->tax_juris_code,
        'tax_amount_in_local_currency' => $this->tax_amount_in_local_currency,
        'local_currency_code' => $this->local_currency_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>