<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Gift extends Model
{
    protected $allowed = [
      'id',
      'status',
      'scheduledAt',
      'autoClaim',
      'claimExpiryDate',
      'resourceVersion',
      'updatedAt',
      'gifter',
      'giftReceiver',
      'giftTimelines'
    ];

    # OPERATIONS
    #-----------

    public static function create($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("gifts"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("gifts", $id), [], $env, $headers);
    }

    public static function all($params = [], $env = null, $headers = [])
    {
        return Request::sendListRequest(Request::GET, Util::encodeURIPath("gifts"), $params, $env, $headers);
    }

    public static function claim($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("gifts", $id, "claim"), [], $env, $headers);
    }

    public static function cancel($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("gifts", $id, "cancel"), [], $env, $headers);
    }
}
