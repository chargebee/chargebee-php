<?php

namespace ChargeBee\ChargeBee\Models;

class InvoiceLineItem extends Model
{
  protected $allowed = array('date_from', 'date_to', 'unit_amount', 'quantity', 'is_taxed', 'tax', 'tax_rate', 'amount', 'description', 'type', 'entity_type', 'entity_id');

}
