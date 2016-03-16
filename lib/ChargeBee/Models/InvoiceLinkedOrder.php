<?php

namespace Chargebee\Chargebee\Models;

class InvoiceLinkedOrder extends Model
{
  protected $allowed = array('id', 'status', 'reference_id', 'fulfillment_status', 'batch_id', 'created_at');

}
