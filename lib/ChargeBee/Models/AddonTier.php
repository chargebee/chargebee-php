<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class AddonTier extends Model
{
    protected $allowed = [
      'starting_unit',
      'ending_unit',
      'price'
    ];
}
