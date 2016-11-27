<?php
require '../vendor/autoload.php';


class get_news {
  public $req;
  function __construct($req) {
    $this->req = $req;
  }
  function getReq() {
  	Feed::$cacheDir = 'C:\WebServers\tmp';
	

  	//url формируется в ввиде 'https://news.google.com/?q=REQUREST_TEXT&hl=ru&ie=UTF-8&output=rss'
  	$rss = Feed::loadRss($this->generate_url());

  	//echo 'Title: ', $rss->title;
  	//echo 'Description: ', $rss->description;
  	//echo 'Link: ', $rss->link;

  	$g_news->title = $rss->title->__toString();
  	$g_news->description = $rss->description->__toString();
	$g_news->link = $rss->link->__toString();

	$arr_items = array();

  	foreach ($rss->item as $item) {
		//echo 'Title: ', $item->title.'<br>';
		//echo 'Link: ', $item->link.'<br>';
		//echo 'Date: ', date('d.m.Y H:i:s',intval($item->timestamp)).'<br>';
		  	    //echo 'Description ', $item->description.'<br>';
		$saw = nokogiri::fromHtmlNoCharset($item->description);
		$arr_img=$saw->get('img[width=80]')->toArray();
		$arr_descr=$saw->get('font[size=-1]')->toArray();

		//echo 'Description очищенный Картинка: ', '<img src="http:'.$arr_img[0]['src'].'"><br>';
		//echo 'Description очищенный Описание: ', $arr_descr[1]['#text'][0].'<br>';
				//echo 'HTML encoded content: ', $item->{'content:encoded'}.'<br><br>';

		$arr_items[] = array('title'=>$item->title->__toString(),
							'link'=>$item->link->__toString(),
							'date'=>date('d.m.Y H:i:s',intval($item->timestamp)),
							'img'=>'<img src="http:'.$arr_img[0]['src'].'">',
							'description'=>$arr_descr[1]['#text'][0]);
  	}
  	$g_news->items = $arr_items;

    return $g_news;
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
