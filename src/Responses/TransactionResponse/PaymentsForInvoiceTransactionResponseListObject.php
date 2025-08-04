<?php
namespace Chargebee\Responses\TransactionResponse;

use Chargebee\Resources\Transaction\Transaction;

class PaymentsForInvoiceTransactionResponseListObject
{ 
    public Transaction $transaction;
    public function __construct(
        Transaction $transaction,
    ) { 
        $this->transaction = $transaction;
    }
}
