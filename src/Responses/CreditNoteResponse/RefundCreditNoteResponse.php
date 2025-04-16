<?php

namespace Chargebee\Responses\CreditNoteResponse;
use Chargebee\Resources\Transaction\Transaction;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class RefundCreditNoteResponse extends ResponseBase { 
    /**
    *
    * @var CreditNote $credit_note
    */
    public CreditNote $credit_note;
    
    /**
    *
    * @var Transaction $transaction
    */
    public Transaction $transaction;
    

    private function __construct(
        CreditNote $credit_note,
        Transaction $transaction,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->credit_note = $credit_note;
        $this->transaction = $transaction;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             CreditNote::from($resourceAttributes['credit_note']),
             Transaction::from($resourceAttributes['transaction']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'credit_note' => $this->credit_note->toArray(), 
            'transaction' => $this->transaction->toArray(),
        ]);
        

        return $data;
    }
}
?>