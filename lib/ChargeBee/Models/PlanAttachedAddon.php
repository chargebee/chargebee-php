<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class PlanAttachedAddon extends Model
{
    protected $allowed = [
      'id',
      'quantity',
      'billing_cycles',
      'type',
    ];
}
