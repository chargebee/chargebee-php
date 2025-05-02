<?php

namespace Chargebee\Responses\CreditNoteResponse;
use Chargebee\Resources\Transaction\Transaction;
use Chargebee\Resources\CreditNote\CreditNote;

use Chargebee\ValueObjects\ResponseBase;

class RefundCreditNoteResponse extends ResponseBase { 
    /**
    *
    * @var ?CreditNote $credit_note
    */
    public ?CreditNote $credit_note;
    
    /**
    *
    * @var ?Transaction $transaction
    */
    public ?Transaction $transaction;
    

    private function __construct(
        ?CreditNote $credit_note,
        ?Transaction $transaction,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->credit_note = $credit_note;
        $this->transaction = $transaction;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['credit_note']) ? CreditNote::from($resourceAttributes['credit_note']) : null,
            
            isset($resourceAttributes['transaction']) ? Transaction::from($resourceAttributes['transaction']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
        ]);
         
        if($this->credit_note instanceof CreditNote){
            $data['credit_note'] = $this->credit_note->toArray();
        }  
        if($this->transaction instanceof Transaction){
            $data['transaction'] = $this->transaction->toArray();
        } 

        return $data;
    }
}
?>