<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class QuotedRampLineItem extends Model
{
  protected $allowed = [
    'itemPriceId',
    'itemType',
    'quantity',
    'quantityInDecimal',
    'meteredQuantity',
    'unitPrice',
    'unitPriceInDecimal',
    'amount',
    'amountInDecimal',
    'billingPeriod',
    'billingPeriodUnit',
    'freeQuantity',
    'freeQuantityInDecimal',
    'billingCycles',
    'servicePeriodDays',
    'chargeOnEvent',
    'chargeOnce',
    'chargeOnOption',
    'startDate',
    'endDate',
    'rampTierId',
    'discountPerBillingCycle',
    'discountPerBillingCycleInDecimal',
    'itemLevelDiscountPerBillingCycle',
    'itemLevelDiscountPerBillingCycleInDecimal',
    'amountPerBillingCycle',
    'amountPerBillingCycleInDecimal',
    'netAmountPerBillingCycle',
    'netAmountPerBillingCycleInDecimal',
  ];

}

?>