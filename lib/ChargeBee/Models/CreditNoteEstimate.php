<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class CreditNoteEstimate extends Model
{

  protected $allowed = [
    'referenceInvoiceId',
    'type',
    'priceType',
    'currencyCode',
    'subTotal',
    'total',
    'amountAllocated',
    'amountAvailable',
    'lineItems',
    'lineItemTiers',
    'lineItemDiscounts',
    'lineItemTaxes',
    'discounts',
    'taxes',
    'roundOffAmount',
    'customerId',
  ];



  # OPERATIONS
  #-----------

 }

?>