<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class SubscriptionAddon extends Model
{
    protected $allowed = [
      'id',
      'quantity',
      'unit_price',
      'amount',
      'trial_end',
      'remaining_billing_cycles',
    ];
}
