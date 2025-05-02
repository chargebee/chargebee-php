<?php

namespace Chargebee\Resources\PaymentIntent;

class PaymentIntent  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *
    * @var ?string $reference_id
    */
    public ?string $reference_id;
    
    /**
    *
    * @var ?string $success_url
    */
    public ?string $success_url;
    
    /**
    *
    * @var ?string $failure_url
    */
    public ?string $failure_url;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
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
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $gateway
    */
    public ?string $gateway;
    
    /**
    *
    * @var ?PaymentAttempt $active_payment_attempt
    */
    public ?PaymentAttempt $active_payment_attempt;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Resources\PaymentIntent\Enums\Status $status
    */
    public ?\Chargebee\Resources\PaymentIntent\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\PaymentIntent\Enums\PaymentMethodType $payment_method_type
    */
    public ?\Chargebee\Resources\PaymentIntent\Enums\PaymentMethodType $payment_method_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "currency_code" , "amount" , "gateway_account_id" , "expires_at" , "reference_id" , "success_url" , "failure_url" , "created_at" , "modified_at" , "resource_version" , "updated_at" , "customer_id" , "gateway" , "active_payment_attempt" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $currency_code,
        ?int $amount,
        ?string $gateway_account_id,
        ?int $expires_at,
        ?string $reference_id,
        ?string $success_url,
        ?string $failure_url,
        ?int $created_at,
        ?int $modified_at,
        ?int $resource_version,
        ?int $updated_at,
        ?string $customer_id,
        ?string $gateway,
        ?PaymentAttempt $active_payment_attempt,
        ?string $business_entity_id,
        ?\Chargebee\Resources\PaymentIntent\Enums\Status $status,
        ?\Chargebee\Resources\PaymentIntent\Enums\PaymentMethodType $payment_method_type,
    )
    { 
        $this->id = $id;
        $this->currency_code = $currency_code;
        $this->amount = $amount;
        $this->gateway_account_id = $gateway_account_id;
        $this->expires_at = $expires_at;
        $this->reference_id = $reference_id;
        $this->success_url = $success_url;
        $this->failure_url = $failure_url;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->customer_id = $customer_id;
        $this->gateway = $gateway;
        $this->active_payment_attempt = $active_payment_attempt;
        $this->business_entity_id = $business_entity_id;  
        $this->status = $status;
        $this->payment_method_type = $payment_method_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['success_url'] ?? null,
        $resourceAttributes['failure_url'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['gateway'] ?? null,
        isset($resourceAttributes['active_payment_attempt']) ? PaymentAttempt::from($resourceAttributes['active_payment_attempt']) : null,
        $resourceAttributes['business_entity_id'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\PaymentIntent\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['payment_method_type']) ? \Chargebee\Resources\PaymentIntent\Enums\PaymentMethodType::tryFromValue($resourceAttributes['payment_method_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'currency_code' => $this->currency_code,
        'amount' => $this->amount,
        'gateway_account_id' => $this->gateway_account_id,
        'expires_at' => $this->expires_at,
        'reference_id' => $this->reference_id,
        'success_url' => $this->success_url,
        'failure_url' => $this->failure_url,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'customer_id' => $this->customer_id,
        'gateway' => $this->gateway,
        
        'business_entity_id' => $this->business_entity_id,
        
        'status' => $this->status?->value,
        
        'payment_method_type' => $this->payment_method_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->active_payment_attempt instanceof PaymentAttempt){
            $data['active_payment_attempt'] = $this->active_payment_attempt->toArray();
        }
        

        
        return $data;
    }
}
?>