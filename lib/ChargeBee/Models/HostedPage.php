<?php

namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class HostedPage extends Model
{

  protected $allowed = array('id', 'type', 'url', 'state', 'failureReason', 'passThruContent', 'embed', 'createdAt',
'expiresAt');

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

  public static function checkoutNew($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("hosted_pages","checkout_new"), $params, $env, $headers);
  }

  public static function checkoutExisting($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("hosted_pages","checkout_existing"), $params, $env, $headers);
  }

  public static function updateCard($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("hosted_pages","update_card"), $params, $env, $headers);
  }

  public static function updatePaymentMethod($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("hosted_pages","update_payment_method"), $params, $env, $headers);
  }

  public static function checkoutOnetimeCharge($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("hosted_pages","checkout_onetime_charge"), $params, $env, $headers);
  }

  public static function checkoutOnetimeAddons($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("hosted_pages","checkout_onetime_addons"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("hosted_pages",$id), array(), $env, $headers);
  }

 }
