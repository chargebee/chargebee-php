<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class BillingConfigurationBillingDate extends Model
{
  protected $allowed = [
    'startDate',
    'endDate',
  ];

}

?>