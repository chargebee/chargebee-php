<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class RampContractTerm extends Model
{
  protected $allowed = [
    'cancellationCutoffPeriod',
    'renewalBillingCycles',
    'actionAtTermEnd',
  ];

}

?>