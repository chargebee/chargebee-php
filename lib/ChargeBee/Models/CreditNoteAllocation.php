<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CreditNoteAllocation extends Model
{
    protected $allowed = [
      'invoice_id',
      'allocated_amount',
      'allocated_at',
      'invoice_date',
      'invoice_status',
    ];
}
