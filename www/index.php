<?php
// Requets Router
// Для теста вашего
$req = explode('/', $_REQUEST['path']);
if ($req[0] == 'api') {
  // req = api
  if ($req[1] == 'v1') {
    // req = api/v1
    // $req[2] - слово через которое мы генерируем сайт
    // ========= Get Infos ========
    // News Class пример класса ньюс
    //Возвращает Array(title,description,link,items)
    //      ,где items = Array(title,link,date,img,description)
    require '../application/controllers/get_news.php';
    $gn = new GetNews($req[2]);
    print_r($gn->getReq());
    

    // Wiki class
    require '../application/controllers/get_wiki.php';
    $gw = new GetWiki($req[2]);
    $ex = $gw->parseResponse();
    echo $ex;
    // Search Image class

    // Youtube search api

    require '../application/controllers/get_youtube.php';
    $gy = new GetYoutube($req[2]);
    $data = $gy->getVideoUrl();
    echo '<pre>';
    print_r($data[0]->id->videoId);
    echo '</pre>';

    echo '<iframe width="420" height="315"
src="https://www.youtube.com/embed/'. $data[0]->id->videoId .'">
</iframe>';

    // MySQL store

    // ============ Generate Template ==========
  }
  else {
    echo 'version error';
  }
} else
{
  echo 'error';
}

?>
