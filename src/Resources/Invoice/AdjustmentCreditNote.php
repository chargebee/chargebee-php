<?php

namespace Chargebee\Resources\Invoice;

class AdjustmentCreditNote  { 
    /**
    *
    * @var ?string $cn_id
    */
    public ?string $cn_id;
    
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
    * @var ?int $cn_total
    */
    public ?int $cn_total;
    
    /**
    *
    * @var ?string $cn_status
    */
    public ?string $cn_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "cn_id" , "cn_reason_code" , "cn_create_reason_code" , "cn_date" , "cn_total" , "cn_status"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $cn_id,
        ?string $cn_reason_code,
        ?string $cn_create_reason_code,
        ?int $cn_date,
        ?int $cn_total,
        ?string $cn_status,
    )
    { 
        $this->cn_id = $cn_id;
        $this->cn_reason_code = $cn_reason_code;
        $this->cn_create_reason_code = $cn_create_reason_code;
        $this->cn_date = $cn_date;
        $this->cn_total = $cn_total;
        $this->cn_status = $cn_status;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['cn_id'] ?? null,
        $resourceAttributes['cn_reason_code'] ?? null,
        $resourceAttributes['cn_create_reason_code'] ?? null,
        $resourceAttributes['cn_date'] ?? null,
        $resourceAttributes['cn_total'] ?? null,
        $resourceAttributes['cn_status'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['cn_id' => $this->cn_id,
        'cn_reason_code' => $this->cn_reason_code,
        'cn_create_reason_code' => $this->cn_create_reason_code,
        'cn_date' => $this->cn_date,
        'cn_total' => $this->cn_total,
        'cn_status' => $this->cn_status,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>