<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class TransactionLinkedCreditNote extends Model
{
    protected $allowed = [
      'cn_id',
      'applied_amount',
      'applied_at',
      'cn_reason_code',
      'cn_date',
      'cn_total',
      'cn_status',
      'cn_reference_invoice_id',
    ];
}
