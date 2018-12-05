<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class SubscriptionEventBasedAddon extends Model
{
    protected $allowed = [
      'id',
      'quantity',
      'unit_price',
      'on_event',
      'charge_once',
    ];
}
