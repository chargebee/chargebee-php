<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class ExportDownload extends Model
{
    protected $allowed = [
      'download_url',
      'valid_till',
    ];
}
