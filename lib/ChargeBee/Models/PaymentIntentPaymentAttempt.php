<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class PaymentIntentPaymentAttempt extends Model
{
  protected $allowed = [
    'id',
    'status',
    'paymentMethodType',
    'idAtGateway',
    'errorCode',
    'errorText',
    'checkoutDetails',
    'createdAt',
    'modifiedAt',
    'errorDetail',
  ];

}

?>