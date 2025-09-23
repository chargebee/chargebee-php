<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class PersonalizedOffer extends Model
{

  protected $allowed = [
    'id',
    'offerId',
    'options',
  ];



  # OPERATIONS
  #-----------

  public static function personalizedOffers($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "custom" => 0,
    );
    return Request::send(Request::POST, Util::encodeURIPath("personalized_offers"), $params, $env, $headers, "grow", true, $jsonKeys);
  }

 }

?>