<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class QuotedRampDiscount extends Model
{
  protected $allowed = [
    'id',
    'invoiceName',
    'type',
    'percentage',
    'amount',
    'durationType',
    'entityType',
    'entityId',
    'period',
    'periodUnit',
    'includedInMrr',
    'applyOn',
    'itemPriceId',
    'createdAt',
    'updatedAt',
    'startDate',
    'endDate',
  ];

}

?>