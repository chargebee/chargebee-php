<?php

namespace Chargebee\Responses\CreditNoteResponse;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class DeleteCreditNoteResponse extends ResponseBase { 
    /**
    *
    * @var CreditNote $credit_note
    */
    public CreditNote $credit_note;
    

    private function __construct(
        CreditNote $credit_note,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->credit_note = $credit_note;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             CreditNote::from($resourceAttributes['credit_note']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'credit_note' => $this->credit_note->toArray(),
        ]);
        

        return $data;
    }
}
?>