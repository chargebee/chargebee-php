<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CustomerContact extends Model
{
    protected $allowed = [
      'id',
      'first_name',
      'last_name',
      'email',
      'phone',
      'label',
      'enabled',
      'send_account_email',
      'send_billing_email',
    ];
}
