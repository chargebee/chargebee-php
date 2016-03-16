<?php

namespace Chargebee\Chargebee\Models;

class InvoiceDiscount extends Model
{
  protected $allowed = array('amount', 'description', 'type', 'entity_id');

}
