<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceLinkedPayment extends Model
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
