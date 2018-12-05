<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class PortalSessionLinkedCustomer extends Model
{
    protected $allowed = [
      'customer_id',
      'email',
      'has_billing_address',
      'has_payment_method',
      'has_active_subscription',
    ];
}
