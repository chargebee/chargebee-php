<?php

namespace Chargebee\Resources\PaymentVoucher;

class PaymentVoucher  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $id_at_gateway
    */
    public ?string $id_at_gateway;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
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
    * @var ?string $payment_source_id
    */
    public ?string $payment_source_id;
    
    /**
    *
    * @var ?string $payload
    */
    public ?string $payload;
    
    /**
    *
    * @var ?string $error_code
    */
    public ?string $error_code;
    
    /**
    *
    * @var ?string $error_text
    */
    public ?string $error_text;
    
    /**
    *
    * @var ?string $url
    */
    public ?string $url;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
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
    * @var ?array<LinkedInvoice> $linked_invoices
    */
    public ?array $linked_invoices;
    
    /**
    *
    * @var ?\Chargebee\Enums\PaymentVoucherType $payment_voucher_type
    */
    public ?\Chargebee\Enums\PaymentVoucherType $payment_voucher_type;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Resources\PaymentVoucher\Enums\Status $status
    */
    public ?\Chargebee\Resources\PaymentVoucher\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "id_at_gateway" , "expires_at" , "subscription_id" , "currency_code" , "amount" , "gateway_account_id" , "payment_source_id" , "payload" , "error_code" , "error_text" , "url" , "date" , "resource_version" , "updated_at" , "customer_id" , "linked_invoices"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $id_at_gateway,
        ?int $expires_at,
        ?string $subscription_id,
        ?string $currency_code,
        ?int $amount,
        ?string $gateway_account_id,
        ?string $payment_source_id,
        ?string $payload,
        ?string $error_code,
        ?string $error_text,
        ?string $url,
        ?int $date,
        ?int $resource_version,
        ?int $updated_at,
        ?string $customer_id,
        ?array $linked_invoices,
        ?\Chargebee\Enums\PaymentVoucherType $payment_voucher_type,
        ?\Chargebee\Enums\Gateway $gateway,
        ?\Chargebee\Resources\PaymentVoucher\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->id_at_gateway = $id_at_gateway;
        $this->expires_at = $expires_at;
        $this->subscription_id = $subscription_id;
        $this->currency_code = $currency_code;
        $this->amount = $amount;
        $this->gateway_account_id = $gateway_account_id;
        $this->payment_source_id = $payment_source_id;
        $this->payload = $payload;
        $this->error_code = $error_code;
        $this->error_text = $error_text;
        $this->url = $url;
        $this->date = $date;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->customer_id = $customer_id;
        $this->linked_invoices = $linked_invoices; 
        $this->payment_voucher_type = $payment_voucher_type;
        $this->gateway = $gateway; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $linked_invoices = array_map(fn (array $result): LinkedInvoice =>  LinkedInvoice::from(
            $result
        ), $resourceAttributes['linked_invoices'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['id_at_gateway'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['payment_source_id'] ?? null,
        $resourceAttributes['payload'] ?? null,
        $resourceAttributes['error_code'] ?? null,
        $resourceAttributes['error_text'] ?? null,
        $resourceAttributes['url'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $linked_invoices,
        
        
        isset($resourceAttributes['payment_voucher_type']) ? \Chargebee\Enums\PaymentVoucherType::tryFromValue($resourceAttributes['payment_voucher_type']) : null,
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\PaymentVoucher\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'id_at_gateway' => $this->id_at_gateway,
        'expires_at' => $this->expires_at,
        'subscription_id' => $this->subscription_id,
        'currency_code' => $this->currency_code,
        'amount' => $this->amount,
        'gateway_account_id' => $this->gateway_account_id,
        'payment_source_id' => $this->payment_source_id,
        'payload' => $this->payload,
        'error_code' => $this->error_code,
        'error_text' => $this->error_text,
        'url' => $this->url,
        'date' => $this->date,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'customer_id' => $this->customer_id,
        
        
        'payment_voucher_type' => $this->payment_voucher_type?->value,
        
        'gateway' => $this->gateway?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->linked_invoices !== []){
            $data['linked_invoices'] = array_map(
                fn (LinkedInvoice $linked_invoices): array => $linked_invoices->toArray(),
                $this->linked_invoices
            );
        }

        
        return $data;
    }
}
?>