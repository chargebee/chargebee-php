<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CustomerPaymentMethod extends Model
{
    protected $allowed = [
      'type',
      'gateway',
      'gateway_account_id',
      'status',
      'reference_id',
    ];
}
