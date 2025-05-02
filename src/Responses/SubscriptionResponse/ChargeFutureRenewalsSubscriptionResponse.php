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
    * @var ?Subscription $subscription
    */
    public ?Subscription $subscription;
    
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    
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
        ?Subscription $subscription,
        ?Customer $customer,
        ?Card $card,
        ?Invoice $invoice,
        ?array $advance_invoice_schedules,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
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
            isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
            
            isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
            
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
            
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
            $advance_invoice_schedules, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([     
        ]);
         
        if($this->subscription instanceof Subscription){
            $data['subscription'] = $this->subscription->toArray();
        }  
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        }  
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