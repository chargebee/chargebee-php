<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class SubscriptionDiscount extends Model
{
  protected $allowed = [
    'id',
    'invoiceName',
    'type',
    'percentage',
    'amount',
    'quantity',
    'currencyCode',
    'durationType',
    'period',
    'periodUnit',
    'includedInMrr',
    'applyOn',
    'itemPriceId',
    'createdAt',
    'applyTill',
    'appliedCount',
    'couponId',
    'index',
  ];

}

?>