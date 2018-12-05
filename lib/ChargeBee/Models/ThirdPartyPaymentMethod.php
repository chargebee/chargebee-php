<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class ThirdPartyPaymentMethod extends Model
{
    protected $allowed = [
      'type',
      'gateway',
      'gatewayAccountId',
      'referenceId',
    ];

    # OPERATIONS
    #-----------
}
