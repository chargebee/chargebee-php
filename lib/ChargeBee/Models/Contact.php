<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class Contact extends Model
{
    protected $allowed = [
      'id',
      'firstName',
      'lastName',
      'email',
      'phone',
      'label',
      'enabled',
      'sendAccountEmail',
      'sendBillingEmail',
    ];


    # OPERATIONS
    #-----------
}
