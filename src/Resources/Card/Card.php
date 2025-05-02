<?php

namespace Chargebee\Resources\Card;

class Card  { 
    /**
    *
    * @var ?string $payment_source_id
    */
    public ?string $payment_source_id;
    
    /**
    *
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
    /**
    *
    * @var ?string $ref_tx_id
    */
    public ?string $ref_tx_id;
    
    /**
    *
    * @var ?string $first_name
    */
    public ?string $first_name;
    
    /**
    *
    * @var ?string $last_name
    */
    public ?string $last_name;
    
    /**
    *
    * @var ?string $iin
    */
    public ?string $iin;
    
    /**
    *
    * @var ?string $last4
    */
    public ?string $last4;
    
    /**
    *
    * @var ?int $expiry_month
    */
    public ?int $expiry_month;
    
    /**
    *
    * @var ?int $expiry_year
    */
    public ?int $expiry_year;
    
    /**
    *
    * @var ?string $issuing_country
    */
    public ?string $issuing_country;
    
    /**
    *
    * @var ?string $billing_addr1
    */
    public ?string $billing_addr1;
    
    /**
    *
    * @var ?string $billing_addr2
    */
    public ?string $billing_addr2;
    
    /**
    *
    * @var ?string $billing_city
    */
    public ?string $billing_city;
    
    /**
    *
    * @var ?string $billing_state_code
    */
    public ?string $billing_state_code;
    
    /**
    *
    * @var ?string $billing_state
    */
    public ?string $billing_state;
    
    /**
    *
    * @var ?string $billing_country
    */
    public ?string $billing_country;
    
    /**
    *
    * @var ?string $billing_zip
    */
    public ?string $billing_zip;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
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
    * @var ?string $ip_address
    */
    public ?string $ip_address;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $masked_number
    */
    public ?string $masked_number;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Resources\Card\Enums\Status $status
    */
    public ?\Chargebee\Resources\Card\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Card\Enums\CardType $card_type
    */
    public ?\Chargebee\Resources\Card\Enums\CardType $card_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Card\Enums\FundingType $funding_type
    */
    public ?\Chargebee\Resources\Card\Enums\FundingType $funding_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Card\Enums\PoweredBy $powered_by
    */
    public ?\Chargebee\Resources\Card\Enums\PoweredBy $powered_by;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "payment_source_id" , "gateway_account_id" , "ref_tx_id" , "first_name" , "last_name" , "iin" , "last4" , "expiry_month" , "expiry_year" , "issuing_country" , "billing_addr1" , "billing_addr2" , "billing_city" , "billing_state_code" , "billing_state" , "billing_country" , "billing_zip" , "created_at" , "resource_version" , "updated_at" , "ip_address" , "customer_id" , "masked_number"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $payment_source_id,
        ?string $gateway_account_id,
        ?string $ref_tx_id,
        ?string $first_name,
        ?string $last_name,
        ?string $iin,
        ?string $last4,
        ?int $expiry_month,
        ?int $expiry_year,
        ?string $issuing_country,
        ?string $billing_addr1,
        ?string $billing_addr2,
        ?string $billing_city,
        ?string $billing_state_code,
        ?string $billing_state,
        ?string $billing_country,
        ?string $billing_zip,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?string $ip_address,
        ?string $customer_id,
        ?string $masked_number,
        ?\Chargebee\Enums\Gateway $gateway,
        ?\Chargebee\Resources\Card\Enums\Status $status,
        ?\Chargebee\Resources\Card\Enums\CardType $card_type,
        ?\Chargebee\Resources\Card\Enums\FundingType $funding_type,
        ?\Chargebee\Resources\Card\Enums\PoweredBy $powered_by,
    )
    { 
        $this->payment_source_id = $payment_source_id;
        $this->gateway_account_id = $gateway_account_id;
        $this->ref_tx_id = $ref_tx_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->iin = $iin;
        $this->last4 = $last4;
        $this->expiry_month = $expiry_month;
        $this->expiry_year = $expiry_year;
        $this->issuing_country = $issuing_country;
        $this->billing_addr1 = $billing_addr1;
        $this->billing_addr2 = $billing_addr2;
        $this->billing_city = $billing_city;
        $this->billing_state_code = $billing_state_code;
        $this->billing_state = $billing_state;
        $this->billing_country = $billing_country;
        $this->billing_zip = $billing_zip;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->ip_address = $ip_address;
        $this->customer_id = $customer_id;
        $this->masked_number = $masked_number; 
        $this->gateway = $gateway; 
        $this->status = $status;
        $this->card_type = $card_type;
        $this->funding_type = $funding_type;
        $this->powered_by = $powered_by;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['payment_source_id'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['ref_tx_id'] ?? null,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['iin'] ?? null,
        $resourceAttributes['last4'] ?? null,
        $resourceAttributes['expiry_month'] ?? null,
        $resourceAttributes['expiry_year'] ?? null,
        $resourceAttributes['issuing_country'] ?? null,
        $resourceAttributes['billing_addr1'] ?? null,
        $resourceAttributes['billing_addr2'] ?? null,
        $resourceAttributes['billing_city'] ?? null,
        $resourceAttributes['billing_state_code'] ?? null,
        $resourceAttributes['billing_state'] ?? null,
        $resourceAttributes['billing_country'] ?? null,
        $resourceAttributes['billing_zip'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['ip_address'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['masked_number'] ?? null,
        
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Card\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['card_type']) ? \Chargebee\Resources\Card\Enums\CardType::tryFromValue($resourceAttributes['card_type']) : null,
        
        isset($resourceAttributes['funding_type']) ? \Chargebee\Resources\Card\Enums\FundingType::tryFromValue($resourceAttributes['funding_type']) : null,
        
        isset($resourceAttributes['powered_by']) ? \Chargebee\Resources\Card\Enums\PoweredBy::tryFromValue($resourceAttributes['powered_by']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['payment_source_id' => $this->payment_source_id,
        'gateway_account_id' => $this->gateway_account_id,
        'ref_tx_id' => $this->ref_tx_id,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'iin' => $this->iin,
        'last4' => $this->last4,
        'expiry_month' => $this->expiry_month,
        'expiry_year' => $this->expiry_year,
        'issuing_country' => $this->issuing_country,
        'billing_addr1' => $this->billing_addr1,
        'billing_addr2' => $this->billing_addr2,
        'billing_city' => $this->billing_city,
        'billing_state_code' => $this->billing_state_code,
        'billing_state' => $this->billing_state,
        'billing_country' => $this->billing_country,
        'billing_zip' => $this->billing_zip,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'ip_address' => $this->ip_address,
        'customer_id' => $this->customer_id,
        'masked_number' => $this->masked_number,
        
        'gateway' => $this->gateway?->value,
        
        'status' => $this->status?->value,
        
        'card_type' => $this->card_type?->value,
        
        'funding_type' => $this->funding_type?->value,
        
        'powered_by' => $this->powered_by?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>