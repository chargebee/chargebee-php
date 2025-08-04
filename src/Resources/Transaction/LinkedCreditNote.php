<?php

namespace Chargebee\Resources\Transaction;

class LinkedCreditNote  { 
    /**
    *
    * @var ?string $cn_id
    */
    public ?string $cn_id;
    
    /**
    *
    * @var ?int $applied_amount
    */
    public ?int $applied_amount;
    
    /**
    *
    * @var ?int $applied_at
    */
    public ?int $applied_at;
    
    /**
    *
    * @var ?string $cn_create_reason_code
    */
    public ?string $cn_create_reason_code;
    
    /**
    *
    * @var ?int $cn_date
    */
    public ?int $cn_date;
    
    /**
    *
    * @var ?int $cn_total
    */
    public ?int $cn_total;
    
    /**
    *
    * @var ?string $cn_reference_invoice_id
    */
    public ?string $cn_reference_invoice_id;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNote\ClassBasedEnums\ReasonCode $cn_reason_code
    */
    public ?\Chargebee\Resources\CreditNote\ClassBasedEnums\ReasonCode $cn_reason_code;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNote\ClassBasedEnums\Status $cn_status
    */
    public ?\Chargebee\Resources\CreditNote\ClassBasedEnums\Status $cn_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "cn_id" , "applied_amount" , "applied_at" , "cn_create_reason_code" , "cn_date" , "cn_total" , "cn_reference_invoice_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $cn_id,
        ?int $applied_amount,
        ?int $applied_at,
        ?string $cn_create_reason_code,
        ?int $cn_date,
        ?int $cn_total,
        ?string $cn_reference_invoice_id,
        ?\Chargebee\Resources\CreditNote\ClassBasedEnums\ReasonCode $cn_reason_code,
        ?\Chargebee\Resources\CreditNote\ClassBasedEnums\Status $cn_status,
    )
    { 
        $this->cn_id = $cn_id;
        $this->applied_amount = $applied_amount;
        $this->applied_at = $applied_at;
        $this->cn_create_reason_code = $cn_create_reason_code;
        $this->cn_date = $cn_date;
        $this->cn_total = $cn_total;
        $this->cn_reference_invoice_id = $cn_reference_invoice_id;  
        $this->cn_reason_code = $cn_reason_code;
        $this->cn_status = $cn_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['cn_id'] ?? null,
        $resourceAttributes['applied_amount'] ?? null,
        $resourceAttributes['applied_at'] ?? null,
        $resourceAttributes['cn_create_reason_code'] ?? null,
        $resourceAttributes['cn_date'] ?? null,
        $resourceAttributes['cn_total'] ?? null,
        $resourceAttributes['cn_reference_invoice_id'] ?? null,
        
         
        isset($resourceAttributes['cn_reason_code']) ? \Chargebee\Resources\CreditNote\ClassBasedEnums\ReasonCode::tryFromValue($resourceAttributes['cn_reason_code']) : null,
        
        isset($resourceAttributes['cn_status']) ? \Chargebee\Resources\CreditNote\ClassBasedEnums\Status::tryFromValue($resourceAttributes['cn_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['cn_id' => $this->cn_id,
        'applied_amount' => $this->applied_amount,
        'applied_at' => $this->applied_at,
        'cn_create_reason_code' => $this->cn_create_reason_code,
        'cn_date' => $this->cn_date,
        'cn_total' => $this->cn_total,
        'cn_reference_invoice_id' => $this->cn_reference_invoice_id,
        
        'cn_reason_code' => $this->cn_reason_code?->value,
        
        'cn_status' => $this->cn_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>