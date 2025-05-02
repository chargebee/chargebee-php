<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\AdvanceInvoiceSchedule\AdvanceInvoiceSchedule;

use Chargebee\ValueObjects\ResponseBase;

class EditAdvanceInvoiceScheduleSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?array<AdvanceInvoiceSchedule> $advance_invoice_schedules
    */
    public ?array $advance_invoice_schedules;
    

    private function __construct(
        ?array $advance_invoice_schedules,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->advance_invoice_schedules = $advance_invoice_schedules;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $advance_invoice_schedules = array_map(fn (array $result): AdvanceInvoiceSchedule =>  AdvanceInvoiceSchedule::from(
            $result
        ), $resourceAttributes['advance_invoice_schedules'] ?? []);
        
        return new self($advance_invoice_schedules, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
          

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