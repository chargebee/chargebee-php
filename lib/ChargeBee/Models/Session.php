<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Session extends Model
{

  protected $allowed = [
    'id',
    'createdAt',
    'expiresAt',
  ];

  public function content()
  {
    if(isset($this->_values['content']))
    {
        return new Content($this->_values['content']);
    }
    return null;
  }


  # OPERATIONS
  #-----------

  public static function create($params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("sessions"), $params, $env, $headers);
  }

  public static function retrieve($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("sessions",$id), $params, $env, $headers);
  }

 }

?>