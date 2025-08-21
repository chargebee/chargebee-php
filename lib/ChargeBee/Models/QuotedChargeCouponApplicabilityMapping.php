<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class QuotedChargeCouponApplicabilityMapping extends Model
{
  protected $allowed = [
    'couponId',
    'applicableItemPriceIds',
  ];

}

?>