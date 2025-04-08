<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Invoice\Invoice;

use Chargebee\ValueObjects\ResponseBase;

class ListInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var array<ListInvoiceResponseListObject> $list
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
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListInvoiceResponseListObject {
                return new ListInvoiceResponseListObject(
                    isset($result['invoice']) ? Invoice::from($result['invoice']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
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


class ListInvoiceResponseListObject {
    
        public Invoice $invoice;
    
public function __construct(
    Invoice $invoice,
){ 
    $this->invoice = $invoice;

}
}

?>