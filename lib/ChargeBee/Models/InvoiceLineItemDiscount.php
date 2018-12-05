<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceLineItemDiscount extends Model
{
    protected $allowed = [
      'line_item_id',
      'discount_type',
      'coupon_id',
      'discount_amount',
    ];
}
