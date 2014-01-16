<?php

class ChargeBee_Comment extends ChargeBee_Model
{

  protected $allowed = array('id', 'entityType', 'addedBy', 'notes', 'createdAt', 'type', 'entityId'
);



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/comments", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/comments/$id", array(), $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/comments", $params, $env);
  }

  public static function delete($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/comments/$id/delete", array(), $env);
  }

 }

?>