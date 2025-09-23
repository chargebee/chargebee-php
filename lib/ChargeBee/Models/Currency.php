<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Currency extends Model
{

  protected $allowed = [
    'id',
    'enabled',
    'forexType',
    'currencyCode',
    'isBaseCurrency',
    'manualExchangeRate',
  ];



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::sendListRequest(Request::GET, Util::encodeURIPath("currencies","list"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("currencies",$id), array(), $env, $headers, null, false, $jsonKeys);
  }

  public static function create($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("currencies"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function update($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("currencies",$id), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function addSchedule($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("currencies",$id,"add_schedule"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function removeSchedule($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("currencies",$id,"remove_schedule"), array(), $env, $headers, null, false, $jsonKeys);
  }

 }

?>