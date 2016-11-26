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
$saw = new nokogiri(iconv('windows-1251','UTF-8',$item->description));
$arr=$saw->get('font[size=-1]')->toArray();

  	    //echo 'Description очищенный: ', iconv('KOER','UTF-8',$arr[1]['#text'][0]);
echo 'Description очищенный: ', $arr[1]['#text'][0];
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
