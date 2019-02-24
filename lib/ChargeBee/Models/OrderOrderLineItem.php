<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class OrderOrderLineItem extends Model
{
    protected $allowed = [
      'id',
      'invoice_id',
      'invoice_line_item_id',
      'unit_price',
      'description',
      'amount',
      'fulfillment_quantity',
      'fulfillment_amount',
      'tax_amount',
      'amount_paid',
      'amount_adjusted',
      'refundable_credits_issued',
      'refundable_credits',
      'is_shippable',
      'sku',
      'status',
      'entity_type',
      'item_level_discount_amount',
      'discount_amount',
      'entity_id',
    ];
}
