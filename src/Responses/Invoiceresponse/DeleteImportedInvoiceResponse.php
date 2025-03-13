<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class DeleteImportedInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var Invoice $invoice
    */
    public Invoice $invoice;
    
    /**
    *
    * @var ?array<CreditNote> $credit_notes
    */
    public ?array $credit_notes;
    

    private function __construct(
        Invoice $invoice,
        ?array $credit_notes,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->invoice = $invoice;
        $this->credit_notes = $credit_notes;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $credit_notes = array_map(fn (array $result): CreditNote =>  CreditNote::from(
            $result
        ), $resourceAttributes['credit_notes'] ?? []);
        
        return new self(
             Invoice::from($resourceAttributes['invoice']),$credit_notes, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'invoice' => $this->invoice->toArray(), 
        ]);
          

        if($this->credit_notes !== []) {
            $data['credit_notes'] = array_map(
                fn (CreditNote $credit_notes): array => $credit_notes->toArray(),
                $this->credit_notes
            );
        }
        return $data;
    }
}
?>