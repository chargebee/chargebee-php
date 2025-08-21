<?php

namespace Chargebee\Resources\QuotedCharge;

class Charge  { 
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $amount_in_decimal
    */
    public ?string $amount_in_decimal;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?int $service_period_in_days
    */
    public ?int $service_period_in_days;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "amount" , "amount_in_decimal" , "description" , "service_period_in_days" , "avalara_sale_type" , "avalara_transaction_type" , "avalara_service_type"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $amount,
        ?string $amount_in_decimal,
        ?string $description,
        ?int $service_period_in_days,
        ?string $avalara_sale_type,
        ?int $avalara_transaction_type,
        ?int $avalara_service_type,
    )
    { 
        $this->amount = $amount;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->description = $description;
        $this->service_period_in_days = $service_period_in_days;
        $this->avalara_sale_type = $avalara_sale_type;
        $this->avalara_transaction_type = $avalara_transaction_type;
        $this->avalara_service_type = $avalara_service_type;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['amount'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['service_period_in_days'] ?? null,
        $resourceAttributes['avalara_sale_type'] ?? null,
        $resourceAttributes['avalara_transaction_type'] ?? null,
        $resourceAttributes['avalara_service_type'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['amount' => $this->amount,
        'amount_in_decimal' => $this->amount_in_decimal,
        'description' => $this->description,
        'service_period_in_days' => $this->service_period_in_days,
        'avalara_sale_type' => $this->avalara_sale_type,
        'avalara_transaction_type' => $this->avalara_transaction_type,
        'avalara_service_type' => $this->avalara_service_type,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>