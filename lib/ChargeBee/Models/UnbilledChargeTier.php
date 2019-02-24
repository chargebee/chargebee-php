<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class UnbilledChargeTier extends Model
{
    protected $allowed = [
      'starting_unit',
      'ending_unit',
      'quantity_used',
      'unit_amount',
    ];
}
