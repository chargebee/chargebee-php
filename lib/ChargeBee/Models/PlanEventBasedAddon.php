<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class PlanEventBasedAddon extends Model
{
    protected $allowed = [
      'id',
      'quantity',
      'on_event',
      'charge_once',
    ];
}
