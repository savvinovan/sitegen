<?php
class GetNews {
  public $req;
  function __construct($req) {
    $this->req = $req;
  }
  function getReq() {
    return $this->req;
  }
}

 ?>
