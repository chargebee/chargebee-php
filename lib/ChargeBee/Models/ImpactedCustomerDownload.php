<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class ImpactedCustomerDownload extends Model
{
  protected $allowed = [
    'downloadUrl',
    'validTill',
    'mimeType',
  ];

}

?>