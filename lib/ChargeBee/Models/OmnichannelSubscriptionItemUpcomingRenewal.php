<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class OmnichannelSubscriptionItemUpcomingRenewal extends Model
{
  protected $allowed = [
    'priceCurrency',
    'priceUnits',
    'priceNanos',
  ];

}

?>