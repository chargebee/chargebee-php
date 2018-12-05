<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceEstimate extends Model
{
    protected $allowed = [
      'recurring',
      'priceType',
      'currencyCode',
      'subTotal',
      'total',
      'creditsApplied',
      'amountPaid',
      'amountDue',
      'lineItems',
      'discounts',
      'taxes',
      'lineItemTaxes',
      'lineItemTiers',
      'lineItemDiscounts',
      'roundOffAmount',
    ];

    # OPERATIONS
    #-----------
}
