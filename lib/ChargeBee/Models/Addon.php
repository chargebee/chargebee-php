<?php

namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class Addon extends Model
{
    protected $allowed = array('id', 'name', 'invoiceName', 'description', 'type', 'chargeType', 'price', 'period',
        'periodUnit', 'unit', 'status', 'archivedAt', 'enabledInPortal', 'invoiceNotes', 'taxable');


    # OPERATIONS
    #-----------

    public static function create($params, $env = null, $headers = array())
    {
        return Request::send(Request::POST, Util::encodeURIPath("addons"), $params, $env, $headers);
    }

    public static function update($id, $params = array(), $env = null, $headers = array())
    {
        return Request::send(Request::POST, Util::encodeURIPath("addons",$id), $params, $env, $headers);
    }

    public static function all($params = array(), $env = null, $headers = array())
    {
        return Request::send(Request::GET, Util::encodeURIPath("addons"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = array())
    {
        return Request::send(Request::GET, Util::encodeURIPath("addons",$id), array(), $env, $headers);
    }

    public static function delete($id, $env = null, $headers = array())
    {
        return Request::send(Request::POST, Util::encodeURIPath("addons",$id,"delete"), array(), $env, $headers);
    }

}
