<?php
ob_start();
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

    // ========= Chech query ========

    


    // ========= Get Infos ========

    // News Class пример класса ньюс 
    //Возвращает Array(title,description,link,items)
    //      ,где items = Array(title,link,date,img,description)   
    $gn = new get_news($req[2]);
    $newsArr = (array) $gn->getReq();
    
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
    $data = $gy->getVideoUrl();
    $data[0]->id->videoId; 

    // ============ Generate Template ==========
    // ============ and save file     ==========
    $view = new view($req[4]);
    include($view->dir);
  }
  else {
    echo 'version error';
  }
} elseif ($req[0] == 'get-site') {
    if (file_exists('../sites/'.$req[1].'/dump.html')) 
    {
        include('../sites/'.$req[1].'/dump.html');
    }
} elseif ($req[0] == 'gen-site') {
    // ============ Generate Template ==========
    // ============ and save file     ==========
    //$hash_query = hash('md5',$req[1]); //в таком случае для одного слова контент будет постоянным
    $hash_query = hash('md5',uniqid());

    if (!file_exists('../sites/'.$hash_query)){
        mkdir('../sites/'.$hash_query);
    }
    $dump_site = file_get_contents('http://sitegen.s-vfu.ru/api/v1/'.$req[1]);
    $filename = '../sites/'.$hash_query.'/dump.html';
    file_put_contents($filename, $dump_site);
    echo $hash_query;
} else{
  echo 'error';
  print_r($req);
}

?>
