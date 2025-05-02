<?php

namespace Chargebee\Resources\Estimate;

class Estimate  { 
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate $subscription_estimate
    */
    public ?\Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate $subscription_estimate;
    
    /**
    *
    * @var ?array<\Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate> $subscription_estimates
    */
    public ?array $subscription_estimates;
    
    /**
    *
    * @var ?\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate $invoice_estimate
    */
    public ?\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate $invoice_estimate;
    
    /**
    *
    * @var ?array<\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate> $invoice_estimates
    */
    public ?array $invoice_estimates;
    
    /**
    *
    * @var ?array<\Chargebee\Resources\PaymentScheduleEstimate\PaymentScheduleEstimate> $payment_schedule_estimates
    */
    public ?array $payment_schedule_estimates;
    
    /**
    *
    * @var ?\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate $next_invoice_estimate
    */
    public ?\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate $next_invoice_estimate;
    
    /**
    *
    * @var ?array<\Chargebee\Resources\CreditNoteEstimate\CreditNoteEstimate> $credit_note_estimates
    */
    public ?array $credit_note_estimates;
    
    /**
    *
    * @var ?array<\Chargebee\Resources\UnbilledCharge\UnbilledCharge> $unbilled_charge_estimates
    */
    public ?array $unbilled_charge_estimates;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "created_at" , "subscription_estimate" , "subscription_estimates" , "invoice_estimate" , "invoice_estimates" , "payment_schedule_estimates" , "next_invoice_estimate" , "credit_note_estimates" , "unbilled_charge_estimates"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $created_at,
        ?\Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate $subscription_estimate,
        ?array $subscription_estimates,
        ?\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate $invoice_estimate,
        ?array $invoice_estimates,
        ?array $payment_schedule_estimates,
        ?\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate $next_invoice_estimate,
        ?array $credit_note_estimates,
        ?array $unbilled_charge_estimates,
    )
    { 
        $this->created_at = $created_at;
        $this->subscription_estimate = $subscription_estimate;
        $this->subscription_estimates = $subscription_estimates;
        $this->invoice_estimate = $invoice_estimate;
        $this->invoice_estimates = $invoice_estimates;
        $this->payment_schedule_estimates = $payment_schedule_estimates;
        $this->next_invoice_estimate = $next_invoice_estimate;
        $this->credit_note_estimates = $credit_note_estimates;
        $this->unbilled_charge_estimates = $unbilled_charge_estimates;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $subscription_estimates = array_map(fn (array $result): \Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate =>  \Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate::from(
            $result
        ), $resourceAttributes['subscription_estimates'] ?? []);
        
        $invoice_estimates = array_map(fn (array $result): \Chargebee\Resources\InvoiceEstimate\InvoiceEstimate =>  \Chargebee\Resources\InvoiceEstimate\InvoiceEstimate::from(
            $result
        ), $resourceAttributes['invoice_estimates'] ?? []);
        
        $payment_schedule_estimates = array_map(fn (array $result): \Chargebee\Resources\PaymentScheduleEstimate\PaymentScheduleEstimate =>  \Chargebee\Resources\PaymentScheduleEstimate\PaymentScheduleEstimate::from(
            $result
        ), $resourceAttributes['payment_schedule_estimates'] ?? []);
        
        $credit_note_estimates = array_map(fn (array $result): \Chargebee\Resources\CreditNoteEstimate\CreditNoteEstimate =>  \Chargebee\Resources\CreditNoteEstimate\CreditNoteEstimate::from(
            $result
        ), $resourceAttributes['credit_note_estimates'] ?? []);
        
        $unbilled_charge_estimates = array_map(fn (array $result): \Chargebee\Resources\UnbilledCharge\UnbilledCharge =>  \Chargebee\Resources\UnbilledCharge\UnbilledCharge::from(
            $result
        ), $resourceAttributes['unbilled_charge_estimates'] ?? []);
        
        $returnData = new self( $resourceAttributes['created_at'] ?? null,
        isset($resourceAttributes['subscription_estimate']) ? \Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate::from($resourceAttributes['subscription_estimate']) : null,
        $subscription_estimates,
        isset($resourceAttributes['invoice_estimate']) ? \Chargebee\Resources\InvoiceEstimate\InvoiceEstimate::from($resourceAttributes['invoice_estimate']) : null,
        $invoice_estimates,
        $payment_schedule_estimates,
        isset($resourceAttributes['next_invoice_estimate']) ? \Chargebee\Resources\InvoiceEstimate\InvoiceEstimate::from($resourceAttributes['next_invoice_estimate']) : null,
        $credit_note_estimates,
        $unbilled_charge_estimates,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['created_at' => $this->created_at,
        
        
        
        
        
        
        
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->subscription_estimate instanceof \Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate){
            $data['subscription_estimate'] = $this->subscription_estimate->toArray();
        }
        if($this->invoice_estimate instanceof \Chargebee\Resources\InvoiceEstimate\InvoiceEstimate){
            $data['invoice_estimate'] = $this->invoice_estimate->toArray();
        }
        if($this->next_invoice_estimate instanceof \Chargebee\Resources\InvoiceEstimate\InvoiceEstimate){
            $data['next_invoice_estimate'] = $this->next_invoice_estimate->toArray();
        }
        
        if($this->subscription_estimates !== []){
            $data['subscription_estimates'] = array_map(
                fn (\Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate $subscription_estimates): array => $subscription_estimates->toArray(),
                $this->subscription_estimates
            );
        }
        if($this->invoice_estimates !== []){
            $data['invoice_estimates'] = array_map(
                fn (\Chargebee\Resources\InvoiceEstimate\InvoiceEstimate $invoice_estimates): array => $invoice_estimates->toArray(),
                $this->invoice_estimates
            );
        }
        if($this->payment_schedule_estimates !== []){
            $data['payment_schedule_estimates'] = array_map(
                fn (\Chargebee\Resources\PaymentScheduleEstimate\PaymentScheduleEstimate $payment_schedule_estimates): array => $payment_schedule_estimates->toArray(),
                $this->payment_schedule_estimates
            );
        }
        if($this->credit_note_estimates !== []){
            $data['credit_note_estimates'] = array_map(
                fn (\Chargebee\Resources\CreditNoteEstimate\CreditNoteEstimate $credit_note_estimates): array => $credit_note_estimates->toArray(),
                $this->credit_note_estimates
            );
        }
        if($this->unbilled_charge_estimates !== []){
            $data['unbilled_charge_estimates'] = array_map(
                fn (\Chargebee\Resources\UnbilledCharge\UnbilledCharge $unbilled_charge_estimates): array => $unbilled_charge_estimates->toArray(),
                $this->unbilled_charge_estimates
            );
        }

        
        return $data;
    }
}
?>