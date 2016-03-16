<?php

namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class Card extends Model
{
    protected $allowed = array('customerId', 'status', 'gateway', 'firstName', 'lastName', 'iin', 'last4', 'cardType',
        'expiryMonth', 'expiryYear', 'billingAddr1', 'billingAddr2', 'billingCity', 'billingStateCode','billingState', 'billingCountry', 'billingZip', 'ipAddress', 'maskedNumber');



    # OPERATIONS
    #-----------

    public static function retrieve($id, $env = null, $headers = array())
    {
        return Request::send(Request::GET, Util::encodeURIPath("cards",$id), array(), $env, $headers);
    }

    public static function updateCardForCustomer($id, $params, $env = null, $headers = array())
    {
        return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"credit_card"), $params, $env, $headers);
    }

    public static function deleteCardForCustomer($id, $env = null, $headers = array())
    {
        return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"delete_card"), array(), $env, $headers);
    }
}
