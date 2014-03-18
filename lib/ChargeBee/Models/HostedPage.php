<?php

class ChargeBee_HostedPage extends ChargeBee_Model
{

  protected $allowed = array('id', 'type', 'url', 'state', 'failureReason', 'passThruContent', 'embed', 'createdAt',
'expiresAt');

  public function content()
  {
    if(isset($this->_values['content']))
    {
        return new ChargeBee_Content($this->_values['content']);
    }
    return null;
  }

  # OPERATIONS
  #-----------

  public static function checkoutNew($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/hosted_pages/checkout_new", $params, $env);
  }

  public static function checkoutExisting($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/hosted_pages/checkout_existing", $params, $env);
  }

  public static function updateCard($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/hosted_pages/update_card", $params, $env);
  }

  public static function checkoutOnetimeCharge($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/hosted_pages/checkout_onetime_charge", $params, $env);
  }

  public static function checkoutOnetimeAddons($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/hosted_pages/checkout_onetime_addons", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/hosted_pages/$id", array(), $env);
  }

 }

?>