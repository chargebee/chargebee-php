<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Subscription\Subscription;
use Chargebee\Resources\AdvanceInvoiceSchedule\AdvanceInvoiceSchedule;

use Chargebee\ValueObjects\ResponseBase;

class RemoveAdvanceInvoiceScheduleSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?Subscription $subscription
    */
    public ?Subscription $subscription;
    
    /**
    *
    * @var ?array<AdvanceInvoiceSchedule> $advance_invoice_schedules
    */
    public ?array $advance_invoice_schedules;
    

    private function __construct(
        ?Subscription $subscription,
        ?array $advance_invoice_schedules,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->subscription = $subscription;
        $this->advance_invoice_schedules = $advance_invoice_schedules;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $advance_invoice_schedules = array_map(fn (array $result): AdvanceInvoiceSchedule =>  AdvanceInvoiceSchedule::from(
            $result
        ), $resourceAttributes['advance_invoice_schedules'] ?? []);
        
        return new self(
            isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
            $advance_invoice_schedules, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->subscription instanceof Subscription){
            $data['subscription'] = $this->subscription->toArray();
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