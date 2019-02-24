<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceEstimateDiscount extends Model
{
    protected $allowed = [
      'amount',
      'description',
      'entity_type',
      'entity_id',
    ];
}
