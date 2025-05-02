<?php

namespace Chargebee\Responses\TransactionResponse;
use Chargebee\Resources\Transaction\Transaction;

use Chargebee\ValueObjects\ResponseBase;

class RefundTransactionResponse extends ResponseBase { 
    /**
    *
    * @var ?Transaction $transaction
    */
    public ?Transaction $transaction;
    

    private function __construct(
        ?Transaction $transaction,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->transaction = $transaction;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['transaction']) ? Transaction::from($resourceAttributes['transaction']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->transaction instanceof Transaction){
            $data['transaction'] = $this->transaction->toArray();
        } 

        return $data;
    }
}
?>