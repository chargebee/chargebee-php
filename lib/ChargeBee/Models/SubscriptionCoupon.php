<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class SubscriptionCoupon extends Model
{
    protected $allowed = [
      'coupon_id',
      'apply_till',
      'applied_count',
      'coupon_code',
    ];
}
