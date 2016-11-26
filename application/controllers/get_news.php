<?php
require '../vendor/autoload.php';


class GetNews {
  public $req;
  function __construct($req) {
    $this->req = $req;
  }
  function getReq() {
  	Feed::$cacheDir = 'C:\WebServers\tmp';

  	//$rss = Feed::loadRss('https://news.google.com/?q='.$this->req.'&hl=ru&output=rss');
  	$rss = Feed::loadRss($this->generate_url());

	echo 'Title: ', $rss->title;
	echo 'Description: ', $rss->description;
	echo 'Link: ', $rss->link;

	foreach ($rss->item as $item) {
	    echo 'Title: ', $item->title;
	    echo 'Link: ', $item->link;
	    echo 'Timestamp: ', $item->timestamp;
	    echo 'Description ', $item->description;
	    echo 'HTML encoded content: ', $item->{'content:encoded'};
	}
    return $feed;
  }

  function generate_url(){
  	$data = array('q'=>$this->req,
  				'hl'=>'ru',
  				'output'=>'rss');

  	return 'https://news.google.com/?'.http_build_query($data);
  }
}

 ?>
