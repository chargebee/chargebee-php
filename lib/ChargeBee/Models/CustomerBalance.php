<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CustomerBalance extends Model
{
    protected $allowed = [
      'promotional_credits',
      'excess_payments',
      'refundable_credits',
      'unbilled_charges',
      'currency_code',
      'balance_currency_code',
    ];
}
