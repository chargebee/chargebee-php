<?php

namespace ChargeBee\ChargeBee\Models;

class InvoiceLinkedTransaction extends Model
{
  protected $allowed = array('txn_id', 'applied_amount', 'applied_at', 'txn_type', 'txn_status', 'txn_date', 'txn_amount');

}
