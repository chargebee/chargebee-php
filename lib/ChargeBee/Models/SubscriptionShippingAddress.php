<?php

namespace Chargebee\Chargebee\Models;

class SubscriptionShippingAddress extends Model
{
  protected $allowed = array('first_name', 'last_name', 'email', 'company', 'phone', 'line1', 'line2', 'line3', 'city', 'state_code', 'state', 'country', 'zip');

}
