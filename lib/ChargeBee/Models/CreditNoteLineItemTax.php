<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CreditNoteLineItemTax extends Model
{
    protected $allowed = [
      'line_item_id',
      'tax_name',
      'tax_rate',
      'tax_amount',
      'tax_juris_type',
      'tax_juris_name',
      'tax_juris_code',
    ];
}
