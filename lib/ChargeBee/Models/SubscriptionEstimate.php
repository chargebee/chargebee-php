<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class SubscriptionEstimate extends Model
{
    protected $allowed = [
      'id',
      'currencyCode',
      'status',
      'nextBillingAt',
      'pauseDate',
      'resumeDate',
      'shippingAddress',
    ];

    # OPERATIONS
    #-----------
}
