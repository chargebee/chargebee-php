<?php

namespace Chargebee\Resources\Transaction;

class Transaction  { 
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
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
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
    * @var ?string $reference_number
    */
    public ?string $reference_number;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
    /**
    *
    * @var ?int $settled_at
    */
    public ?int $settled_at;
    
    /**
    *
    * @var ?int $exchange_rate
    */
    public ?int $exchange_rate;
    
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
    * @var ?string $id_at_gateway
    */
    public ?string $id_at_gateway;
    
    /**
    *
    * @var ?bool $three_d_secure
    */
    public ?bool $three_d_secure;
    
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
    * @var ?int $voided_at
    */
    public ?int $voided_at;
    
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
    * @var ?string $fraud_reason
    */
    public ?string $fraud_reason;
    
    /**
    *
    * @var ?string $custom_payment_method_id
    */
    public ?string $custom_payment_method_id;
    
    /**
    *
    * @var ?int $amount_unused
    */
    public ?int $amount_unused;
    
    /**
    *
    * @var ?string $masked_card_number
    */
    public ?string $masked_card_number;
    
    /**
    *
    * @var ?string $reference_transaction_id
    */
    public ?string $reference_transaction_id;
    
    /**
    *
    * @var ?string $refunded_txn_id
    */
    public ?string $refunded_txn_id;
    
    /**
    *
    * @var ?string $reference_authorization_id
    */
    public ?string $reference_authorization_id;
    
    /**
    *
    * @var ?int $amount_capturable
    */
    public ?int $amount_capturable;
    
    /**
    *
    * @var ?string $reversal_transaction_id
    */
    public ?string $reversal_transaction_id;
    
    /**
    *
    * @var ?array<LinkedInvoice> $linked_invoices
    */
    public ?array $linked_invoices;
    
    /**
    *
    * @var ?array<LinkedCreditNote> $linked_credit_notes
    */
    public ?array $linked_credit_notes;
    
    /**
    *
    * @var ?array<LinkedRefund> $linked_refunds
    */
    public ?array $linked_refunds;
    
    /**
    *
    * @var ?array<LinkedPayment> $linked_payments
    */
    public ?array $linked_payments;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
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
    * @var ?string $merchant_reference_id
    */
    public ?string $merchant_reference_id;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?string $payment_method_details
    */
    public ?string $payment_method_details;
    
    /**
    *
    * @var ?GatewayErrorDetail $error_detail
    */
    public ?GatewayErrorDetail $error_detail;
    
    /**
    *
    * @var ?string $custom_payment_method_name
    */
    public ?string $custom_payment_method_name;
    
    /**
    *
    * @var ?\Chargebee\Enums\PaymentMethod $payment_method
    */
    public ?\Chargebee\Enums\PaymentMethod $payment_method;
    
    /**
    *
    * @var ?\Chargebee\Enums\Gateway $gateway
    */
    public ?\Chargebee\Enums\Gateway $gateway;
    
    /**
    *
    * @var ?\Chargebee\Resources\Transaction\Enums\Type $type
    */
    public ?\Chargebee\Resources\Transaction\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Transaction\Enums\Status $status
    */
    public ?\Chargebee\Resources\Transaction\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Transaction\Enums\FraudFlag $fraud_flag
    */
    public ?\Chargebee\Resources\Transaction\Enums\FraudFlag $fraud_flag;
    
    /**
    *
    * @var ?\Chargebee\Resources\Transaction\Enums\InitiatorType $initiator_type
    */
    public ?\Chargebee\Resources\Transaction\Enums\InitiatorType $initiator_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Transaction\Enums\AuthorizationReason $authorization_reason
    */
    public ?\Chargebee\Resources\Transaction\Enums\AuthorizationReason $authorization_reason;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "subscription_id" , "gateway_account_id" , "payment_source_id" , "reference_number" , "date" , "settled_at" , "exchange_rate" , "currency_code" , "amount" , "id_at_gateway" , "three_d_secure" , "error_code" , "error_text" , "voided_at" , "resource_version" , "updated_at" , "fraud_reason" , "custom_payment_method_id" , "amount_unused" , "masked_card_number" , "reference_transaction_id" , "refunded_txn_id" , "reference_authorization_id" , "amount_capturable" , "reversal_transaction_id" , "linked_invoices" , "linked_credit_notes" , "linked_refunds" , "linked_payments" , "deleted" , "iin" , "last4" , "merchant_reference_id" , "business_entity_id" , "payment_method_details" , "error_detail" , "custom_payment_method_name"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $subscription_id,
        ?string $gateway_account_id,
        ?string $payment_source_id,
        ?string $reference_number,
        ?int $date,
        ?int $settled_at,
        ?int $exchange_rate,
        ?string $currency_code,
        ?int $amount,
        ?string $id_at_gateway,
        ?bool $three_d_secure,
        ?string $error_code,
        ?string $error_text,
        ?int $voided_at,
        ?int $resource_version,
        ?int $updated_at,
        ?string $fraud_reason,
        ?string $custom_payment_method_id,
        ?int $amount_unused,
        ?string $masked_card_number,
        ?string $reference_transaction_id,
        ?string $refunded_txn_id,
        ?string $reference_authorization_id,
        ?int $amount_capturable,
        ?string $reversal_transaction_id,
        ?array $linked_invoices,
        ?array $linked_credit_notes,
        ?array $linked_refunds,
        ?array $linked_payments,
        ?bool $deleted,
        ?string $iin,
        ?string $last4,
        ?string $merchant_reference_id,
        ?string $business_entity_id,
        ?string $payment_method_details,
        ?GatewayErrorDetail $error_detail,
        ?string $custom_payment_method_name,
        ?\Chargebee\Enums\PaymentMethod $payment_method,
        ?\Chargebee\Enums\Gateway $gateway,
        ?\Chargebee\Resources\Transaction\Enums\Type $type,
        ?\Chargebee\Resources\Transaction\Enums\Status $status,
        ?\Chargebee\Resources\Transaction\Enums\FraudFlag $fraud_flag,
        ?\Chargebee\Resources\Transaction\Enums\InitiatorType $initiator_type,
        ?\Chargebee\Resources\Transaction\Enums\AuthorizationReason $authorization_reason,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->subscription_id = $subscription_id;
        $this->gateway_account_id = $gateway_account_id;
        $this->payment_source_id = $payment_source_id;
        $this->reference_number = $reference_number;
        $this->date = $date;
        $this->settled_at = $settled_at;
        $this->exchange_rate = $exchange_rate;
        $this->currency_code = $currency_code;
        $this->amount = $amount;
        $this->id_at_gateway = $id_at_gateway;
        $this->three_d_secure = $three_d_secure;
        $this->error_code = $error_code;
        $this->error_text = $error_text;
        $this->voided_at = $voided_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->fraud_reason = $fraud_reason;
        $this->custom_payment_method_id = $custom_payment_method_id;
        $this->amount_unused = $amount_unused;
        $this->masked_card_number = $masked_card_number;
        $this->reference_transaction_id = $reference_transaction_id;
        $this->refunded_txn_id = $refunded_txn_id;
        $this->reference_authorization_id = $reference_authorization_id;
        $this->amount_capturable = $amount_capturable;
        $this->reversal_transaction_id = $reversal_transaction_id;
        $this->linked_invoices = $linked_invoices;
        $this->linked_credit_notes = $linked_credit_notes;
        $this->linked_refunds = $linked_refunds;
        $this->linked_payments = $linked_payments;
        $this->deleted = $deleted;
        $this->iin = $iin;
        $this->last4 = $last4;
        $this->merchant_reference_id = $merchant_reference_id;
        $this->business_entity_id = $business_entity_id;
        $this->payment_method_details = $payment_method_details;
        $this->error_detail = $error_detail;
        $this->custom_payment_method_name = $custom_payment_method_name; 
        $this->payment_method = $payment_method;
        $this->gateway = $gateway; 
        $this->type = $type;
        $this->status = $status;
        $this->fraud_flag = $fraud_flag;
        $this->initiator_type = $initiator_type;
        $this->authorization_reason = $authorization_reason;
    }

    public static function from(array $resourceAttributes): self
    { 
        $linked_invoices = array_map(fn (array $result): LinkedInvoice =>  LinkedInvoice::from(
            $result
        ), $resourceAttributes['linked_invoices'] ?? []);
        
        $linked_credit_notes = array_map(fn (array $result): LinkedCreditNote =>  LinkedCreditNote::from(
            $result
        ), $resourceAttributes['linked_credit_notes'] ?? []);
        
        $linked_refunds = array_map(fn (array $result): LinkedRefund =>  LinkedRefund::from(
            $result
        ), $resourceAttributes['linked_refunds'] ?? []);
        
        $linked_payments = array_map(fn (array $result): LinkedPayment =>  LinkedPayment::from(
            $result
        ), $resourceAttributes['linked_payments'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['payment_source_id'] ?? null,
        $resourceAttributes['reference_number'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['settled_at'] ?? null,
        $resourceAttributes['exchange_rate'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['id_at_gateway'] ?? null,
        $resourceAttributes['three_d_secure'] ?? null,
        $resourceAttributes['error_code'] ?? null,
        $resourceAttributes['error_text'] ?? null,
        $resourceAttributes['voided_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['fraud_reason'] ?? null,
        $resourceAttributes['custom_payment_method_id'] ?? null,
        $resourceAttributes['amount_unused'] ?? null,
        $resourceAttributes['masked_card_number'] ?? null,
        $resourceAttributes['reference_transaction_id'] ?? null,
        $resourceAttributes['refunded_txn_id'] ?? null,
        $resourceAttributes['reference_authorization_id'] ?? null,
        $resourceAttributes['amount_capturable'] ?? null,
        $resourceAttributes['reversal_transaction_id'] ?? null,
        $linked_invoices,
        $linked_credit_notes,
        $linked_refunds,
        $linked_payments,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['iin'] ?? null,
        $resourceAttributes['last4'] ?? null,
        $resourceAttributes['merchant_reference_id'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['payment_method_details'] ?? null,
        isset($resourceAttributes['error_detail']) ? GatewayErrorDetail::from($resourceAttributes['error_detail']) : null,
        $resourceAttributes['custom_payment_method_name'] ?? null,
        
        
        isset($resourceAttributes['payment_method']) ? \Chargebee\Enums\PaymentMethod::tryFromValue($resourceAttributes['payment_method']) : null,
        
        isset($resourceAttributes['gateway']) ? \Chargebee\Enums\Gateway::tryFromValue($resourceAttributes['gateway']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Transaction\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Transaction\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['fraud_flag']) ? \Chargebee\Resources\Transaction\Enums\FraudFlag::tryFromValue($resourceAttributes['fraud_flag']) : null,
        
        isset($resourceAttributes['initiator_type']) ? \Chargebee\Resources\Transaction\Enums\InitiatorType::tryFromValue($resourceAttributes['initiator_type']) : null,
        
        isset($resourceAttributes['authorization_reason']) ? \Chargebee\Resources\Transaction\Enums\AuthorizationReason::tryFromValue($resourceAttributes['authorization_reason']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'subscription_id' => $this->subscription_id,
        'gateway_account_id' => $this->gateway_account_id,
        'payment_source_id' => $this->payment_source_id,
        'reference_number' => $this->reference_number,
        'date' => $this->date,
        'settled_at' => $this->settled_at,
        'exchange_rate' => $this->exchange_rate,
        'currency_code' => $this->currency_code,
        'amount' => $this->amount,
        'id_at_gateway' => $this->id_at_gateway,
        'three_d_secure' => $this->three_d_secure,
        'error_code' => $this->error_code,
        'error_text' => $this->error_text,
        'voided_at' => $this->voided_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'fraud_reason' => $this->fraud_reason,
        'custom_payment_method_id' => $this->custom_payment_method_id,
        'amount_unused' => $this->amount_unused,
        'masked_card_number' => $this->masked_card_number,
        'reference_transaction_id' => $this->reference_transaction_id,
        'refunded_txn_id' => $this->refunded_txn_id,
        'reference_authorization_id' => $this->reference_authorization_id,
        'amount_capturable' => $this->amount_capturable,
        'reversal_transaction_id' => $this->reversal_transaction_id,
        
        
        
        
        'deleted' => $this->deleted,
        'iin' => $this->iin,
        'last4' => $this->last4,
        'merchant_reference_id' => $this->merchant_reference_id,
        'business_entity_id' => $this->business_entity_id,
        'payment_method_details' => $this->payment_method_details,
        
        'custom_payment_method_name' => $this->custom_payment_method_name,
        
        'payment_method' => $this->payment_method?->value,
        
        'gateway' => $this->gateway?->value,
        
        'type' => $this->type?->value,
        
        'status' => $this->status?->value,
        
        'fraud_flag' => $this->fraud_flag?->value,
        
        'initiator_type' => $this->initiator_type?->value,
        
        'authorization_reason' => $this->authorization_reason?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->error_detail instanceof GatewayErrorDetail){
            $data['error_detail'] = $this->error_detail->toArray();
        }
        
        if($this->linked_invoices !== []){
            $data['linked_invoices'] = array_map(
                fn (LinkedInvoice $linked_invoices): array => $linked_invoices->toArray(),
                $this->linked_invoices
            );
        }
        if($this->linked_credit_notes !== []){
            $data['linked_credit_notes'] = array_map(
                fn (LinkedCreditNote $linked_credit_notes): array => $linked_credit_notes->toArray(),
                $this->linked_credit_notes
            );
        }
        if($this->linked_refunds !== []){
            $data['linked_refunds'] = array_map(
                fn (LinkedRefund $linked_refunds): array => $linked_refunds->toArray(),
                $this->linked_refunds
            );
        }
        if($this->linked_payments !== []){
            $data['linked_payments'] = array_map(
                fn (LinkedPayment $linked_payments): array => $linked_payments->toArray(),
                $this->linked_payments
            );
        }

        
        return $data;
    }
}
?>