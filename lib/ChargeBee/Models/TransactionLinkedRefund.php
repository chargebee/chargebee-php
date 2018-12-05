<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class TransactionLinkedRefund extends Model
{
    protected $allowed = [
      'txn_id',
      'txn_status',
      'txn_date',
      'txn_amount',
    ];
}
