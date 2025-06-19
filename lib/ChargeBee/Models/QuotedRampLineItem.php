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
    'discountAmount',
    'mdDiscountAmount',
    'itemLevelDiscountAmount',
    'mdItemLevelDiscountAmount',
    'discountPerBillingCycle',
    'discountPerBillingCycleInDecimal',
    'itemLevelDiscountPerBillingCycle',
    'itemLevelDiscountPerBillingCycleInDecimal',
    'netAmount',
    'mdNetAmount',
    'amountPerBillingCycle',
    'amountPerBillingCycleInDecimal',
    'netAmountPerBillingCycle',
    'netAmountPerBillingCycleInDecimal',
  ];

}

?>