<?php

namespace Chargebee\Resources\Customer;

class Balance  { 
    /**
    *
    * @var ?int $promotional_credits
    */
    public ?int $promotional_credits;
    
    /**
    *
    * @var ?int $excess_payments
    */
    public ?int $excess_payments;
    
    /**
    *
    * @var ?int $refundable_credits
    */
    public ?int $refundable_credits;
    
    /**
    *
    * @var ?int $unbilled_charges
    */
    public ?int $unbilled_charges;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?string $balance_currency_code
    */
    public ?string $balance_currency_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "promotional_credits" , "excess_payments" , "refundable_credits" , "unbilled_charges" , "currency_code" , "balance_currency_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $promotional_credits,
        ?int $excess_payments,
        ?int $refundable_credits,
        ?int $unbilled_charges,
        ?string $currency_code,
        ?string $balance_currency_code,
    )
    { 
        $this->promotional_credits = $promotional_credits;
        $this->excess_payments = $excess_payments;
        $this->refundable_credits = $refundable_credits;
        $this->unbilled_charges = $unbilled_charges;
        $this->currency_code = $currency_code;
        $this->balance_currency_code = $balance_currency_code;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['promotional_credits'] ?? null,
        $resourceAttributes['excess_payments'] ?? null,
        $resourceAttributes['refundable_credits'] ?? null,
        $resourceAttributes['unbilled_charges'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['balance_currency_code'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['promotional_credits' => $this->promotional_credits,
        'excess_payments' => $this->excess_payments,
        'refundable_credits' => $this->refundable_credits,
        'unbilled_charges' => $this->unbilled_charges,
        'currency_code' => $this->currency_code,
        'balance_currency_code' => $this->balance_currency_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>