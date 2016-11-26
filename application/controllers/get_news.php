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
  	    echo 'Title: ', $item->title.'<br>';
  	    echo 'Link: ', $item->link.'<br>';
  	    echo 'Timestamp: ', $item->timestamp.'<br>';
  	    echo 'Description ', $item->description.'<br>';
$saw = nokogiri::fromHtmlNoCharset($item->description);
$arr=$saw->get('font[size=-1]')->toArray();
echo 'Description очищенный Картинка: ', $arr[1]['#text'][0].'<br>';
echo 'Description очищенный Описание: ', $arr[1]['#text'][0].'<br>';
  	    echo 'HTML encoded content: ', $item->{'content:encoded'}.'<br><br>';
  	}
      return $feed;
  }

  function generate_url(){
  	$data = array('q'=>$this->req,
  				'hl'=>'ru',
  				'ie'=>'UTF-8',
  				'output'=>'rss');

  	return 'https://news.google.com/?'.http_build_query($data);
  }
}

 ?>
