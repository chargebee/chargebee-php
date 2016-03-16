<?php
namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class Comment extends Model
{

  protected $allowed = array('id', 'entityType', 'addedBy', 'notes', 'createdAt', 'type', 'entityId'
);



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("comments"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("comments",$id), array(), $env, $headers);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("comments"), $params, $env, $headers);
  }

  public static function delete($id, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("comments",$id,"delete"), array(), $env, $headers);
  }

 }
