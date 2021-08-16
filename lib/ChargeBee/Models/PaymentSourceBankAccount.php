<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class PaymentSourceBankAccount extends Model
{
  protected $allowed = [
    'last4',
    'nameOnAccount',
    'bankName',
    'mandateId',
    'accountType',
    'echeckType',
    'accountHolderType',
  ];

}

?>