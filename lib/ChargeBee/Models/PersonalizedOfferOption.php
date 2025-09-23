<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class PersonalizedOfferOption extends Model
{
  protected $allowed = [
    'id',
    'label',
    'processingType',
    'processingLayout',
    'redirectUrl',
  ];

}

?>