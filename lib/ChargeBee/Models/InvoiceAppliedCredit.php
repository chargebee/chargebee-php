<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceAppliedCredit extends Model
{
    protected $allowed = [
      'cn_id',
      'applied_amount',
      'applied_at',
      'cn_reason_code',
      'cn_date',
      'cn_status',
    ];
}
