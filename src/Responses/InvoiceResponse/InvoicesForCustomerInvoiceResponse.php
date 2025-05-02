<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;

use Chargebee\ValueObjects\ResponseBase;

class InvoicesForCustomerInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var array<InvoicesForCustomerInvoiceResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): InvoicesForCustomerInvoiceResponseListObject {
                return new InvoicesForCustomerInvoiceResponseListObject(
                    isset($result['invoice']) ? Invoice::from($result['invoice']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}


class InvoicesForCustomerInvoiceResponseListObject {
    
        public Invoice $invoice;
    
public function __construct(
    Invoice $invoice,
){ 
    $this->invoice = $invoice;

}
}

?>