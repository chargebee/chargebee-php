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
      if(json_last_error() != JSON_ERROR_NONE){
          throw new Exception("Response not in JSON format. Might not be a ChargeBee webhook call." ,json_last_error());
      }      
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
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("events"), $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("events",$id), array(), $env);
  }

 }

?>