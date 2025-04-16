<?php

namespace Chargebee\Resources\Invoice;

class AppliedCredit  { 
    /**
    *
    * @var string $cn_id
    */
    public string $cn_id;
    
    /**
    *
    * @var int $applied_amount
    */
    public int $applied_amount;
    
    /**
    *
    * @var int $applied_at
    */
    public int $applied_at;
    
    /**
    *
    * @var ?string $cn_reason_code
    */
    public ?string $cn_reason_code;
    
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
    * @var string $cn_status
    */
    public string $cn_status;
    
    /**
    *
    * @var ?string $tax_application
    */
    public ?string $tax_application;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "cn_id" , "applied_amount" , "applied_at" , "cn_reason_code" , "cn_create_reason_code" , "cn_date" , "cn_status" , "tax_application"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $cn_id,
        int $applied_amount,
        int $applied_at,
        ?string $cn_reason_code,
        ?string $cn_create_reason_code,
        ?int $cn_date,
        string $cn_status,
        ?string $tax_application,
    )
    { 
        $this->cn_id = $cn_id;
        $this->applied_amount = $applied_amount;
        $this->applied_at = $applied_at;
        $this->cn_reason_code = $cn_reason_code;
        $this->cn_create_reason_code = $cn_create_reason_code;
        $this->cn_date = $cn_date;
        $this->cn_status = $cn_status;
        $this->tax_application = $tax_application;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['cn_id'] ,
        $resourceAttributes['applied_amount'] ,
        $resourceAttributes['applied_at'] ,
        $resourceAttributes['cn_reason_code'] ?? null,
        $resourceAttributes['cn_create_reason_code'] ?? null,
        $resourceAttributes['cn_date'] ?? null,
        $resourceAttributes['cn_status'] ,
        $resourceAttributes['tax_application'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['cn_id' => $this->cn_id,
        'applied_amount' => $this->applied_amount,
        'applied_at' => $this->applied_at,
        'cn_reason_code' => $this->cn_reason_code,
        'cn_create_reason_code' => $this->cn_create_reason_code,
        'cn_date' => $this->cn_date,
        'cn_status' => $this->cn_status,
        'tax_application' => $this->tax_application,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>