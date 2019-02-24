<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class VirtualBankAccount extends Model
{
    protected $allowed = [
      'id',
      'customerId',
      'email',
      'bankName',
      'accountNumber',
      'routingNumber',
      'swiftCode',
      'gateway',
      'gatewayAccountId',
      'referenceId',
      'deleted',
    ];

    # OPERATIONS
    #-----------

    public static function createUsingPermanentToken($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("virtual_bank_accounts", "create_using_permanent_token"), $params, $env, $headers);
    }

    public static function create($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("virtual_bank_accounts"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("virtual_bank_accounts", $id), [], $env, $headers);
    }

    public static function all($params = [], $env = null, $headers = [])
    {
        return Request::sendListRequest(Request::GET, Util::encodeURIPath("virtual_bank_accounts"), $params, $env, $headers);
    }
}
