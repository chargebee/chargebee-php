<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceReferenceTransaction extends Model
{
  protected $allowed = [
    'appliedAmount',
    'appliedAt',
    'txnId',
    'txnStatus',
    'txnDate',
    'txnAmount',
    'txnType',
    'amountCapturable',
    'authorizationReason',
  ];

}

?>