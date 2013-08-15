<?php

class ChargeBee_Event extends ChargeBee_Model
{

  protected $allowed = array('id', 'occurredAt', 'source', 'webhookStatus', 'webhookFailureReason', 'eventType'
);

  public function content()
  {
      return new ChargeBee_Content($this->_values['content']);
  }

  public static function deserialize($json)
  {
      $webhookData = json_decode($json, true);
      if($webhookData != null)
      {
        return new ChargeBee_Event($webhookData);
      }
      return null;
  }


  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/events", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/events/$id", array(), $env);
  }

 }

?>