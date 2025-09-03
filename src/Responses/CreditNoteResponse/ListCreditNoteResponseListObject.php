<?php
namespace Chargebee\Responses\CreditNoteResponse;

use Chargebee\Resources\CreditNote\CreditNote;

class ListCreditNoteResponseListObject
{ 
    public CreditNote $credit_note;
    public function __construct(
        CreditNote $credit_note,
    ) { 
        $this->credit_note = $credit_note;
    }
}
