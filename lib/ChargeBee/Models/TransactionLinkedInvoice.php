<?php

namespace Chargebee\Chargebee\Models;

class TransactionLinkedInvoice extends Model
{
  protected $allowed = array('invoice_id', 'applied_amount', 'applied_at', 'invoice_date', 'invoice_amount');

}
