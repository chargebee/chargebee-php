<?php

namespace Chargebee\Resources\PaymentSource;

class PaymentSource  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $reference_id
    */
    public ?string $reference_id;
    
    /**
    *
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
    /**
    *
    * @var ?string $ip_address
    */
    public ?string $ip_address;
    
    /**
    *
    * @var ?string $issuing_country
    */
    public ?string $issuing_country;
    
    /**
    *
    * @var ?Card $card
    */
    public ?Card $card;
    
    /**
    *
    * @var ?BankAccount $bank_account
    */
    public ?BankAccount $bank_account;
    
    /**
    *
    * @var ?CustVoucherSource $boleto
    */
    public ?CustVoucherSource $boleto;
    
    /**
    *
    * @var ?BillingAddress $billing_address
    */
    public ?BillingAddress $billing_address;
    
    /**
    *
    * @var ?AmazonPayment $amazon_payment
    */
    public ?AmazonPayment $amazon_payment;
    
    /**
    *
    * @var ?Upi $upi
    */
    public ?Upi $upi;
    
    /**
    *
    * @var ?Paypal $paypal
    */
    public ?Paypal $paypal;
    
    /**
    *
    * @var ?Venmo $venmo
    */
    public ?Venmo $venmo;
    
    /**
    *
    * @var ?KlarnaPayNow $klarna_pay_now
    */
    public ?KlarnaPayNow $klarna_pay_now;
    
    /**
    *
    * @var ?array<Mandate> $mandates
    */
    public ?array $mandates;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\Type $type
    */
    public ?\Chargebee\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Resources\PaymentSource\Enums\Status $status
    */
    public ?\Chargebee\Resources\PaymentSource\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "resource_version" , "updated_at" , "created_at" , "customer_id" , "reference_id" , "gateway_account_id" , "ip_address" , "issuing_country" , "card" , "bank_account" , "boleto" , "billing_address" , "amazon_payment" , "upi" , "paypal" , "venmo" , "klarna_pay_now" , "mandates" , "deleted" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?string $customer_id,
        ?string $reference_id,
        ?string $gateway_account_id,
        ?string $ip_address,
        ?string $issuing_country,
        ?Card $card,
        ?BankAccount $bank_account,
        ?CustVoucherSource $boleto,
        ?BillingAddress $billing_address,
        ?AmazonPayment $amazon_payment,
        ?Upi $upi,
        ?Paypal $paypal,
        ?Venmo $venmo,
        ?KlarnaPayNow $klarna_pay_now,
        ?array $mandates,
        ?bool $deleted,
        ?string $business_entity_id,
        ?\Chargebee\Enums\Type $type,
        ?\Chargebee\Enums\Gateway $gateway,
        ?\Chargebee\Resources\PaymentSource\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->customer_id = $customer_id;
        $this->reference_id = $reference_id;
        $this->gateway_account_id = $gateway_account_id;
        $this->ip_address = $ip_address;
        $this->issuing_country = $issuing_country;
        $this->card = $card;
        $this->bank_account = $bank_account;
        $this->boleto = $boleto;
        $this->billing_address = $billing_address;
        $this->amazon_payment = $amazon_payment;
        $this->upi = $upi;
        $this->paypal = $paypal;
        $this->venmo = $venmo;
        $this->klarna_pay_now = $klarna_pay_now;
        $this->mandates = $mandates;
        $this->deleted = $deleted;
        $this->business_entity_id = $business_entity_id; 
        $this->type = $type;
        $this->gateway = $gateway; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $mandates = array_map(fn (array $result): Mandate =>  Mandate::from(
            $result
        ), $resourceAttributes['mandates'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['ip_address'] ?? null,
        $resourceAttributes['issuing_country'] ?? null,
        isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
        isset($resourceAttributes['bank_account']) ? BankAccount::from($resourceAttributes['bank_account']) : null,
        isset($resourceAttributes['boleto']) ? CustVoucherSource::from($resourceAttributes['boleto']) : null,
        isset($resourceAttributes['billing_address']) ? BillingAddress::from($resourceAttributes['billing_address']) : null,
        isset($resourceAttributes['amazon_payment']) ? AmazonPayment::from($resourceAttributes['amazon_payment']) : null,
        isset($resourceAttributes['upi']) ? Upi::from($resourceAttributes['upi']) : null,
        isset($resourceAttributes['paypal']) ? Paypal::from($resourceAttributes['paypal']) : null,
        isset($resourceAttributes['venmo']) ? Venmo::from($resourceAttributes['venmo']) : null,
        isset($resourceAttributes['klarna_pay_now']) ? KlarnaPayNow::from($resourceAttributes['klarna_pay_now']) : null,
        $mandates,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        
        
        isset($resourceAttributes['type']) ? \Chargebee\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\PaymentSource\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        'customer_id' => $this->customer_id,
        'reference_id' => $this->reference_id,
        'gateway_account_id' => $this->gateway_account_id,
        'ip_address' => $this->ip_address,
        'issuing_country' => $this->issuing_country,
        
        
        
        
        
        
        
        
        
        
        'deleted' => $this->deleted,
        'business_entity_id' => $this->business_entity_id,
        
        'type' => $this->type?->value,
        
        'gateway' => $this->gateway?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->card instanceof Card){
            $data['card'] = $this->card->toArray();
        }
        if($this->bank_account instanceof BankAccount){
            $data['bank_account'] = $this->bank_account->toArray();
        }
        if($this->boleto instanceof CustVoucherSource){
            $data['boleto'] = $this->boleto->toArray();
        }
        if($this->billing_address instanceof BillingAddress){
            $data['billing_address'] = $this->billing_address->toArray();
        }
        if($this->amazon_payment instanceof AmazonPayment){
            $data['amazon_payment'] = $this->amazon_payment->toArray();
        }
        if($this->upi instanceof Upi){
            $data['upi'] = $this->upi->toArray();
        }
        if($this->paypal instanceof Paypal){
            $data['paypal'] = $this->paypal->toArray();
        }
        if($this->venmo instanceof Venmo){
            $data['venmo'] = $this->venmo->toArray();
        }
        if($this->klarna_pay_now instanceof KlarnaPayNow){
            $data['klarna_pay_now'] = $this->klarna_pay_now->toArray();
        }
        
        if($this->mandates !== []){
            $data['mandates'] = array_map(
                fn (Mandate $mandates): array => $mandates->toArray(),
                $this->mandates
            );
        }

        
        return $data;
    }
}
?>