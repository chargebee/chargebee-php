<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class QuoteShippingAddress extends Model
{
    protected $allowed = [
      'first_name',
      'last_name',
      'email',
      'company',
      'phone',
      'line1',
      'line2',
      'line3',
      'city',
      'state_code',
      'state',
      'country',
      'zip',
      'validation_status',
    ];
}
