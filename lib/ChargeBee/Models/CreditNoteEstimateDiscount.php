<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CreditNoteEstimateDiscount extends Model
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