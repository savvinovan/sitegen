<?php
require '../vendor/autoload.php';
use Webmozart\Json\JsonDecoder;
$decoder = new JsonDecoder();

class GetWiki {
  public $req;
  public $response;
  function __construct($req) {
    $this->req = $req;
  }
  function get_req() {
    return $this->req;
  }
  function request_wiki() {
    $this->response = file_get_contents("https://ru.wikipedia.org/w/api.php?format=xml&action=query&prop=extracts&exintro=&explaintext=&titles=" . $this->req);
  }
  function parseResponse() {
    $this->request_wiki();
    $data = simplexml_load_string($this->response);
    //return current($data->query->pages)->extract;
    return $data->query->pages->page->extract->{0}->__toString();
  }
  function get_first_element() {

  }
}

 ?>
