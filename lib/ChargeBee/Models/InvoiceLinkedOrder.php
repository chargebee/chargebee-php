<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceLinkedOrder extends Model
{
    protected $allowed = [
      'id',
      'document_number',
      'status',
      'order_type',
      'reference_id',
      'fulfillment_status',
      'batch_id',
      'created_at',
    ];
}
