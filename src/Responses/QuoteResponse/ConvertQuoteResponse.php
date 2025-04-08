<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\QuotedCharge\QuotedCharge;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\QuotedSubscription\QuotedSubscription;
use Chargebee\Resources\UnbilledCharge\UnbilledCharge;
use Chargebee\Resources\Quote\Quote;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\Subscription\Subscription;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class ConvertQuoteResponse extends ResponseBase { 
    /**
    *
    * @var Quote $quote
    */
    public Quote $quote;
    
    /**
    *
    * @var ?QuotedSubscription $quoted_subscription
    */
    public ?QuotedSubscription $quoted_subscription;
    
    /**
    *
    * @var ?QuotedCharge $quoted_charge
    */
    public ?QuotedCharge $quoted_charge;
    
    /**
    *
    * @var Customer $customer
    */
    public Customer $customer;
    
    /**
    *
    * @var ?Subscription $subscription
    */
    public ?Subscription $subscription;
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    
    /**
    *
    * @var ?CreditNote $credit_note
    */
    public ?CreditNote $credit_note;
    
    /**
    *
    * @var ?array<UnbilledCharge> $unbilled_charges
    */
    public ?array $unbilled_charges;
    

    private function __construct(
        Quote $quote,
        ?QuotedSubscription $quoted_subscription,
        ?QuotedCharge $quoted_charge,
        Customer $customer,
        ?Subscription $subscription,
        ?Invoice $invoice,
        ?CreditNote $credit_note,
        ?array $unbilled_charges,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->quote = $quote;
        $this->quoted_subscription = $quoted_subscription;
        $this->quoted_charge = $quoted_charge;
        $this->customer = $customer;
        $this->subscription = $subscription;
        $this->invoice = $invoice;
        $this->credit_note = $credit_note;
        $this->unbilled_charges = $unbilled_charges;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $unbilled_charges = array_map(fn (array $result): UnbilledCharge =>  UnbilledCharge::from(
            $result
        ), $resourceAttributes['unbilled_charges'] ?? []);
        
        return new self(
             Quote::from($resourceAttributes['quote']),
            isset($resourceAttributes['quoted_subscription']) ? QuotedSubscription::from($resourceAttributes['quoted_subscription']) : null,
            
            isset($resourceAttributes['quoted_charge']) ? QuotedCharge::from($resourceAttributes['quoted_charge']) : null,
            
             Customer::from($resourceAttributes['customer']),
            isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
            
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
            
            isset($resourceAttributes['credit_note']) ? CreditNote::from($resourceAttributes['credit_note']) : null,
            $unbilled_charges, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'quote' => $this->quote->toArray(),   
            'customer' => $this->customer->toArray(),    
        ]);
         
        if($this->quoted_subscription instanceof QuotedSubscription){
            $data['quoted_subscription'] = $this->quoted_subscription->toArray();
        }  
        if($this->quoted_charge instanceof QuotedCharge){
            $data['quoted_charge'] = $this->quoted_charge->toArray();
        }  
        if($this->subscription instanceof Subscription){
            $data['subscription'] = $this->subscription->toArray();
        }  
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        }  
        if($this->credit_note instanceof CreditNote){
            $data['credit_note'] = $this->credit_note->toArray();
        }   

        if($this->unbilled_charges !== []) {
            $data['unbilled_charges'] = array_map(
                fn (UnbilledCharge $unbilled_charges): array => $unbilled_charges->toArray(),
                $this->unbilled_charges
            );
        }
        return $data;
    }
}
?>