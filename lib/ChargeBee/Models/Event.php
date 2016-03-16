<?php
namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Event extends Model
{

  protected $allowed = array('id', 'occurredAt', 'source', 'user', 'webhookStatus', 'webhookFailureReason',
'webhooks', 'eventType');

    public function content()
    {
        return new Content($this->_values['content']);
    }

    public static function deserialize($json)
    {
        $webhookData = json_decode($json, true);
        if(!$webhookData) {
            throw new \Exception("Response not in JSON format. Might not be a ChargeBee webhook call.");
        }
        if($webhookData != null)
        {
            return new Event($webhookData);
        }
        return null;
    }


  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("events"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("events",$id), array(), $env, $headers);
  }

 }
