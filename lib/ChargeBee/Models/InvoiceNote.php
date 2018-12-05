<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceNote extends Model
{
    protected $allowed = [
      'entity_type',
      'note',
      'entity_id',
    ];
}
