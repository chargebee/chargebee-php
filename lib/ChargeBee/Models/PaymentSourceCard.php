<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class PaymentSourceCard extends Model
{
    protected $allowed = [
      'first_name',
      'last_name',
      'iin',
      'last4',
      'brand',
      'funding_type',
      'expiry_month',
      'expiry_year',
      'billing_addr1',
      'billing_addr2',
      'billing_city',
      'billing_state_code',
      'billing_state',
      'billing_country',
      'billing_zip',
      'masked_number',
    ];
}
