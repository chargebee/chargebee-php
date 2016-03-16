<?php

namespace Chargebee\Chargebee\Models;

class PortalSessionLinkedCustomer extends Model
{
  protected $allowed = array('customer_id', 'email', 'has_billing_address', 'has_payment_method', 'has_active_subscription');

}
