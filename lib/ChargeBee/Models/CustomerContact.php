<?php

namespace Chargebee\Chargebee\Models;

class CustomerContact extends Model
{
  protected $allowed = array('id', 'first_name', 'last_name', 'email', 'phone', 'label', 'enabled', 'send_account_email', 'send_billing_email');

}
