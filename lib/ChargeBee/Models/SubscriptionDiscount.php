<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class SubscriptionDiscount extends Model
{
  protected $allowed = [
    'id',
    'invoiceName',
    'percentage',
    'amount',
    'currencyCode',
    'period',
    'periodUnit',
    'includedInMrr',
    'itemPriceId',
    'createdAt',
    'applyTill',
    'appliedCount',
    'couponId',
    'index',
  ];

}

?>