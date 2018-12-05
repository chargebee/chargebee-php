<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class GiftGiftReceiver extends Model
{
    protected $allowed = [
      'customer_id',
      'subscription_id',
      'first_name',
      'last_name',
      'email',
    ];
}
