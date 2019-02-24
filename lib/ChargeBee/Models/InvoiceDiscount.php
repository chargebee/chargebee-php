<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceDiscount extends Model
{
    protected $allowed = [
      'amount',
      'description',
      'entity_type',
      'entity_id',
    ];
}
