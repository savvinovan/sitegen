<?php
// Requets Router
// Для теста вашего
$req = explode('/', $_REQUEST['path']);
if ($req[0] == 'api') {
  // req = api
  if ($req[1] == 'v1' && strlen($req[2])>1 ) {
    spl_autoload_register(function ($class_name) {
        include '../application/controllers/'.$class_name . '.php';
    });
    // req = api/v1
    // $req[2] - слово через которое мы генерируем сайт
    // ========= Get Infos ========
<<<<<<< HEAD
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
=======
    // News Class пример класса ньюс    
    $gn = new get_news($req[2]);
    $newsArr = (array) $gn->getReq();
    //print_r($gn->getReq());
    // Wiki class    
    $gw = new get_wiki($req[2]);
    $ex = $gw->parseResponse();  
    // Translate to en for img search    
    $translate = new translate($req[2]);
    $req['en']=$translate->en;
    // Search Image class    
    $img = new get_img($req['en']);   //thumbnail, small, regular, full, raw $img->urls[0]['raw']
    // Youtube search api    
    $gy = new get_youtube($req[2]);
>>>>>>> refs/remotes/origin/master
    $data = $gy->getVideoUrl();
    $data[0]->id->videoId; 

    // ============ Generate Template ==========
    $view = new view($req[4]);
    include ($view->dir);
  }
  else {
    echo 'version error';
  }
} else
{
  echo 'error';
}

?>
