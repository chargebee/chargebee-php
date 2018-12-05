<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class QuoteLineItem extends Model
{
    protected $allowed = [
      'id',
      'subscription_id',
      'date_from',
      'date_to',
      'unit_amount',
      'quantity',
      'amount',
      'pricing_model',
      'is_taxed',
      'tax_amount',
      'tax_rate',
      'discount_amount',
      'item_level_discount_amount',
      'description',
      'entity_type',
      'tax_exempt_reason',
      'entity_id',
    ];
}
