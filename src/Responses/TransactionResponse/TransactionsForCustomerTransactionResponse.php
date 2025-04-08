<?php

namespace Chargebee\Responses\TransactionResponse;
use Chargebee\Resources\Transaction\Transaction;

use Chargebee\ValueObjects\ResponseBase;

class TransactionsForCustomerTransactionResponse extends ResponseBase { 
    /**
    *
    * @var array<TransactionsForCustomerTransactionResponseListObject> $list
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
            $list = array_map(function (array $result): TransactionsForCustomerTransactionResponseListObject {
                return new TransactionsForCustomerTransactionResponseListObject(
                    isset($result['transaction']) ? Transaction::from($result['transaction']) : null,
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


class TransactionsForCustomerTransactionResponseListObject {
    
        public Transaction $transaction;
    
public function __construct(
    Transaction $transaction,
){ 
    $this->transaction = $transaction;

}
}

?>