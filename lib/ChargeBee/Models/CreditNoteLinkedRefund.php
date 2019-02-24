<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CreditNoteLinkedRefund extends Model
{
    protected $allowed = [
      'txn_id',
      'applied_amount',
      'applied_at',
      'txn_status',
      'txn_date',
      'txn_amount',
    ];
}
