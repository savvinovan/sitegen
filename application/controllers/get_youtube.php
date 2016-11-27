<?php

require '../vendor/autoload.php';
use Madcoda\Youtube;

class GetYoutube {
  public $req;
  public $youtube;
  function __construct($req) {
    $this->req = $req;
    $this->youtube = new Youtube(array('key' => 'AIzaSyBM5Wlk6TaPEvpaz_HzL5hsvjygdzu2UOs'));
  }
  function getReq() {
    return $this->req;
  }
  function getVideoUrl() {
    return $this->youtube->searchVideos($this->req);
  }

}
 ?>
