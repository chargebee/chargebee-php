<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class TransactionLinkedInvoice extends Model
{
    protected $allowed = [
      'invoice_id',
      'applied_amount',
      'applied_at',
      'invoice_date',
      'invoice_total',
      'invoice_status',
    ];
}
