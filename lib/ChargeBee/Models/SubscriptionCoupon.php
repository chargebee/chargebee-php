<?php

namespace ChargeBee\ChargeBee\Models;

class SubscriptionCoupon extends Model
{
  protected $allowed = array('coupon_id', 'apply_till', 'applied_count', 'coupon_code');

}
