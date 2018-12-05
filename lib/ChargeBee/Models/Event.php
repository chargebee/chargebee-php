<?php

namespace ChargeBee\ChargeBee\Models;

use Exception;
use RuntimeException;
use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;
use ChargeBee\ChargeBee\Models\Content;

class Event extends Model
{
    protected $allowed = [
      'id',
      'occurredAt',
      'source',
      'user',
      'webhookStatus',
      'webhookFailureReason',
      'webhooks',
      'eventType',
      'apiVersion',
    ];

    public function content()
    {
        return new Content($this->_values['content']);
    }

    public static function deserialize($json)
    {
        $webhookData = json_decode($json, true);
        if (!$webhookData) {
            throw new Exception("Response not in JSON format. Might not be a ChargeBee webhook call.");
        }

        if ($webhookData != null) {
            if (isset($webhookData['api_version'])) {
                $apiVersion = strtoupper($webhookData['api_version']);
                if ($apiVersion != null && strcasecmp($apiVersion, Environment::API_VERSION) != 0) {
                    throw new RuntimeException("API version [".$apiVersion."] in response does not match "
                        ."with client library API version [".strtoupper(Environment::API_VERSION)."]");
                }
            }

            return new Event($webhookData);
        }

        return null;
    }

    # OPERATIONS
    #-----------

    public static function all($params = [], $env = null, $headers = [])
    {
        return Request::sendListRequest(Request::GET, Util::encodeURIPath("events"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("events", $id), [], $env, $headers);
    }
}
