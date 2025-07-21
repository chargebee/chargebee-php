<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class QuotedRampCouponApplicabilityMapping extends Model
{
  protected $allowed = [
    'couponId',
    'applicableItemPriceIds',
  ];

}

?>