<?php

namespace Chargebee\Resources\TaxWithheld;

class TaxWithheld  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $user
    */
    public ?string $user;
    
    /**
    *
    * @var ?string $reference_number
    */
    public ?string $reference_number;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $exchange_rate
    */
    public ?int $exchange_rate;
    
    /**
    *
    * @var ?\Chargebee\Resources\TaxWithheld\Enums\Type $type
    */
    public ?\Chargebee\Resources\TaxWithheld\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\TaxWithheld\Enums\PaymentMethod $payment_method
    */
    public ?\Chargebee\Resources\TaxWithheld\Enums\PaymentMethod $payment_method;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "user" , "reference_number" , "description" , "date" , "currency_code" , "amount" , "resource_version" , "updated_at" , "exchange_rate"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $user,
        ?string $reference_number,
        ?string $description,
        ?int $date,
        ?string $currency_code,
        ?int $amount,
        ?int $resource_version,
        ?int $updated_at,
        ?int $exchange_rate,
        ?\Chargebee\Resources\TaxWithheld\Enums\Type $type,
        ?\Chargebee\Resources\TaxWithheld\Enums\PaymentMethod $payment_method,
    )
    { 
        $this->id = $id;
        $this->user = $user;
        $this->reference_number = $reference_number;
        $this->description = $description;
        $this->date = $date;
        $this->currency_code = $currency_code;
        $this->amount = $amount;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->exchange_rate = $exchange_rate;  
        $this->type = $type;
        $this->payment_method = $payment_method;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['user'] ?? null,
        $resourceAttributes['reference_number'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['exchange_rate'] ?? null,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\TaxWithheld\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['payment_method']) ? \Chargebee\Resources\TaxWithheld\Enums\PaymentMethod::tryFromValue($resourceAttributes['payment_method']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'user' => $this->user,
        'reference_number' => $this->reference_number,
        'description' => $this->description,
        'date' => $this->date,
        'currency_code' => $this->currency_code,
        'amount' => $this->amount,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'exchange_rate' => $this->exchange_rate,
        
        'type' => $this->type?->value,
        
        'payment_method' => $this->payment_method?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>