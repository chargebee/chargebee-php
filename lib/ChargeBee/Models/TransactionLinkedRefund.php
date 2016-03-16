<?php

namespace ChargeBee\ChargeBee\Models;

class TransactionLinkedRefund extends Model
{
  protected $allowed = array('txn_id', 'txn_status', 'txn_date', 'txn_amount');

}
