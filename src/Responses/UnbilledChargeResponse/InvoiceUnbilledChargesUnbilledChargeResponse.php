<?php

namespace Chargebee\Responses\UnbilledChargeResponse;
use Chargebee\Resources\Invoice\Invoice;

use Chargebee\ValueObjects\ResponseBase;

class InvoiceUnbilledChargesUnbilledChargeResponse extends ResponseBase { 
    /**
    *
    * @var ?array<Invoice> $invoices
    */
    public ?array $invoices;
    

    private function __construct(
        ?array $invoices,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->invoices = $invoices;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $invoices = array_map(fn (array $result): Invoice =>  Invoice::from(
            $result
        ), $resourceAttributes['invoices'] ?? []);
        
        return new self($invoices, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
          

        if($this->invoices !== []) {
            $data['invoices'] = array_map(
                fn (Invoice $invoices): array => $invoices->toArray(),
                $this->invoices
            );
        }
        return $data;
    }
}
?>