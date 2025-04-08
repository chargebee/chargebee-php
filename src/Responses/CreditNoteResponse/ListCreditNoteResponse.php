<?php

namespace Chargebee\Responses\CreditNoteResponse;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class ListCreditNoteResponse extends ResponseBase { 
    /**
    *
    * @var array<ListCreditNoteResponseListObject> $list
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
            $list = array_map(function (array $result): ListCreditNoteResponseListObject {
                return new ListCreditNoteResponseListObject(
                    isset($result['credit_note']) ? CreditNote::from($result['credit_note']) : null,
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


class ListCreditNoteResponseListObject {
    
        public CreditNote $credit_note;
    
public function __construct(
    CreditNote $credit_note,
){ 
    $this->credit_note = $credit_note;

}
}

?>