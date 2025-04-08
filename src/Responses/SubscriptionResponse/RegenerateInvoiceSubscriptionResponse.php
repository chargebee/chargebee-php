<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\UnbilledCharge\UnbilledCharge;
use Chargebee\Resources\Invoice\Invoice;

use Chargebee\ValueObjects\ResponseBase;

class RegenerateInvoiceSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    
    /**
    *
    * @var ?array<UnbilledCharge> $unbilled_charges
    */
    public ?array $unbilled_charges;
    

    private function __construct(
        ?Invoice $invoice,
        ?array $unbilled_charges,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->invoice = $invoice;
        $this->unbilled_charges = $unbilled_charges;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $unbilled_charges = array_map(fn (array $result): UnbilledCharge =>  UnbilledCharge::from(
            $result
        ), $resourceAttributes['unbilled_charges'] ?? []);
        
        return new self(
            isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
            $unbilled_charges, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
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