<?php

namespace Chargebee\Chargebee\Models;

class CustomerPaymentMethod extends Model
{
  protected $allowed = array('type', 'gateway', 'status', 'reference_id');

}
