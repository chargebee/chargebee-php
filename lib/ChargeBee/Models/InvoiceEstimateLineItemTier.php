<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceEstimateLineItemTier extends Model
{
    protected $allowed = [
      'line_item_id',
      'starting_unit',
      'ending_unit',
      'quantity_used',
      'unit_amount',
    ];
}
