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
    require '../application/controllers/get_news.php';
    $gn = new GetNews($req[2]);
    //print_r($gn->getReq());
    // Wiki class
    require '../application/controllers/get_wiki.php';
    $gw = new GetWiki($req[2]);
    $ex = $gw->parseResponse();
    echo $ex;
    // Search Image class
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
