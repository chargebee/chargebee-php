<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Card\Card;
use Chargebee\Resources\Subscription\Subscription;
use Chargebee\Resources\AdvanceInvoiceSchedule\AdvanceInvoiceSchedule;

use Chargebee\ValueObjects\ResponseBase;

class ChargeFutureRenewalsSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var Subscription $subscription
    */
    public Subscription $subscription;
    
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    
    /**
    *
    * @var ?Card $card
    */
    public ?Card $card;
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    
    /**
    *
    * @var ?array<AdvanceInvoiceSchedule> $advance_invoice_schedules
    */
    public ?array $advance_invoice_schedules;
    

    private function __construct(
        Subscription $subscription,
        Customer $customer,
        ?Card $card,
        ?Invoice $invoice,
        ?array $advance_invoice_schedules,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->subscription = $subscription;
        $this->customer = $customer;
        $this->card = $card;
        $this->invoice = $invoice;
        $this->advance_invoice_schedules = $advance_invoice_schedules;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $advance_invoice_schedules = array_map(fn (array $result): AdvanceInvoiceSchedule =>  AdvanceInvoiceSchedule::from(
            $result
        ), $resourceAttributes['advance_invoice_schedules'] ?? []);
        
        return new self(
             Subscription::from($resourceAttributes['subscription']),
             Customer::from($resourceAttributes['customer']),
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
            
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
            $advance_invoice_schedules, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'subscription' => $this->subscription->toArray(), 
            'customer' => $this->customer->toArray(),   
        ]);
         
        if($this->card instanceof Card){
            $data['card'] = $this->card->toArray();
        }  
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        }   

        if($this->advance_invoice_schedules !== []) {
            $data['advance_invoice_schedules'] = array_map(
                fn (AdvanceInvoiceSchedule $advance_invoice_schedules): array => $advance_invoice_schedules->toArray(),
                $this->advance_invoice_schedules
            );
        }
        return $data;
    }
}
?>