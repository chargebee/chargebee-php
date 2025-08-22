<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Discount extends Model
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



  # OPERATIONS
  #-----------

 }

?>