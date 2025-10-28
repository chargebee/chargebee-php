<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CreditNoteDiscount extends Model
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