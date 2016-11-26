<?php

class GetWiki {
  public $req;
  public $response;
  function __construct($req) {
    $this->req = $req;
  }
  function getReq() {
    return $this->req;
  }
  function getWiki() {
    return 'yoyo';
  }
  function requestWiki() {
    $this->response = file_get_contents("https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=" . $this->req);
  }
  function parseResponse() {
    
  }
}

 ?>
