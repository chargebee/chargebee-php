<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class OfferEvent extends Model
{

  protected $allowed = [
  ];



  # OPERATIONS
  #-----------

  public static function offerEvents($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("offer_events"), $params, $env, $headers, "grow", true, $jsonKeys);
  }

 }

?>