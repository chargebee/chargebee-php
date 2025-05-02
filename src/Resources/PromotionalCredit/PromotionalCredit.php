<?php

namespace Chargebee\Resources\PromotionalCredit;

class PromotionalCredit  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $amount_in_decimal
    */
    public ?string $amount_in_decimal;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $reference
    */
    public ?string $reference;
    
    /**
    *
    * @var ?int $closing_balance
    */
    public ?int $closing_balance;
    
    /**
    *
    * @var ?string $done_by
    */
    public ?string $done_by;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\CreditType $credit_type
    */
    public ?\Chargebee\Enums\CreditType $credit_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\PromotionalCredit\Enums\Type $type
    */
    public ?\Chargebee\Resources\PromotionalCredit\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "amount_in_decimal" , "amount" , "currency_code" , "description" , "reference" , "closing_balance" , "done_by" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $amount_in_decimal,
        ?int $amount,
        ?string $currency_code,
        ?string $description,
        ?string $reference,
        ?int $closing_balance,
        ?string $done_by,
        ?int $created_at,
        ?\Chargebee\Enums\CreditType $credit_type,
        ?\Chargebee\Resources\PromotionalCredit\Enums\Type $type,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->amount = $amount;
        $this->currency_code = $currency_code;
        $this->description = $description;
        $this->reference = $reference;
        $this->closing_balance = $closing_balance;
        $this->done_by = $done_by;
        $this->created_at = $created_at; 
        $this->credit_type = $credit_type; 
        $this->type = $type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['reference'] ?? null,
        $resourceAttributes['closing_balance'] ?? null,
        $resourceAttributes['done_by'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
        
        isset($resourceAttributes['credit_type']) ? \Chargebee\Enums\CreditType::tryFromValue($resourceAttributes['credit_type']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\PromotionalCredit\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'amount_in_decimal' => $this->amount_in_decimal,
        'amount' => $this->amount,
        'currency_code' => $this->currency_code,
        'description' => $this->description,
        'reference' => $this->reference,
        'closing_balance' => $this->closing_balance,
        'done_by' => $this->done_by,
        'created_at' => $this->created_at,
        
        'credit_type' => $this->credit_type?->value,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>