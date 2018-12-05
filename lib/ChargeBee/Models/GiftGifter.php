<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class GiftGifter extends Model
{
    protected $allowed = [
      'customer_id',
      'invoice_id',
      'signature',
      'note',
    ];
}
