<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class QuoteLineGroupDiscount extends Model
{
  protected $allowed = [
    'amount',
    'description',
    'lineItemId',
    'entityType',
    'discountType',
    'entityId',
    'couponSetCode',
  ];

}

?>