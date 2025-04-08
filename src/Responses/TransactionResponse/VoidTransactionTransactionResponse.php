<?php

namespace Chargebee\Responses\TransactionResponse;
use Chargebee\Resources\Transaction\Transaction;

use Chargebee\ValueObjects\ResponseBase;

class VoidTransactionTransactionResponse extends ResponseBase { 
    /**
    *
    * @var Transaction $transaction
    */
    public Transaction $transaction;
    

    private function __construct(
        Transaction $transaction,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->transaction = $transaction;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Transaction::from($resourceAttributes['transaction']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'transaction' => $this->transaction->toArray(),
        ]);
        

        return $data;
    }
}
?>