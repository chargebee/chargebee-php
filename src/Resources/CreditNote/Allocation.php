<?php

namespace Chargebee\Resources\CreditNote;

class Allocation  { 
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?int $allocated_amount
    */
    public ?int $allocated_amount;
    
    /**
    *
    * @var ?int $allocated_at
    */
    public ?int $allocated_at;
    
    /**
    *
    * @var ?int $invoice_date
    */
    public ?int $invoice_date;
    
    /**
    *
    * @var ?\Chargebee\Resources\Invoice\ClassBasedEnums\Status $invoice_status
    */
    public ?\Chargebee\Resources\Invoice\ClassBasedEnums\Status $invoice_status;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNote\ClassBasedEnums\AllocationTaxApplication $tax_application
    */
    public ?\Chargebee\Resources\CreditNote\ClassBasedEnums\AllocationTaxApplication $tax_application;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "invoice_id" , "allocated_amount" , "allocated_at" , "invoice_date"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $invoice_id,
        ?int $allocated_amount,
        ?int $allocated_at,
        ?int $invoice_date,
        ?\Chargebee\Resources\Invoice\ClassBasedEnums\Status $invoice_status,
        ?\Chargebee\Resources\CreditNote\ClassBasedEnums\AllocationTaxApplication $tax_application,
    )
    { 
        $this->invoice_id = $invoice_id;
        $this->allocated_amount = $allocated_amount;
        $this->allocated_at = $allocated_at;
        $this->invoice_date = $invoice_date;  
        $this->invoice_status = $invoice_status;
        $this->tax_application = $tax_application;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['allocated_amount'] ?? null,
        $resourceAttributes['allocated_at'] ?? null,
        $resourceAttributes['invoice_date'] ?? null,
        
         
        isset($resourceAttributes['invoice_status']) ? \Chargebee\Resources\Invoice\ClassBasedEnums\Status::tryFromValue($resourceAttributes['invoice_status']) : null,
        
        isset($resourceAttributes['tax_application']) ? \Chargebee\Resources\CreditNote\ClassBasedEnums\AllocationTaxApplication::tryFromValue($resourceAttributes['tax_application']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['invoice_id' => $this->invoice_id,
        'allocated_amount' => $this->allocated_amount,
        'allocated_at' => $this->allocated_at,
        'invoice_date' => $this->invoice_date,
        
        'invoice_status' => $this->invoice_status?->value,
        
        'tax_application' => $this->tax_application?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>