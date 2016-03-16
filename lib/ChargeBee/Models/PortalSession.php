<?php

namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class PortalSession extends Model
{

  protected $allowed = array('id', 'token', 'accessUrl', 'redirectUrl', 'status', 'createdAt', 'expiresAt',
'customerId', 'loginAt', 'logoutAt', 'loginIpaddress', 'logoutIpaddress', 'linkedCustomers');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("portal_sessions"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("portal_sessions",$id), array(), $env, $headers);
  }

  public static function logout($id, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("portal_sessions",$id,"logout"), array(), $env, $headers);
  }

  public static function activate($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("portal_sessions",$id,"activate"), $params, $env, $headers);
  }

 }
