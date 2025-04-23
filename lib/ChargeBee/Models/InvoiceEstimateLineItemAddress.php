<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceEstimateLineItemAddress extends Model
{
  protected $allowed = [
    'lineItemId',
    'firstName',
    'lastName',
    'email',
    'company',
    'phone',
    'line1',
    'line2',
    'line3',
    'city',
    'stateCode',
    'state',
    'country',
    'zip',
    'validationStatus',
  ];

}

?>