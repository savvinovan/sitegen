<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?=$req[2]?></title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="/template4/assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="/template4/assets/animate/animate.css" />
<link rel="stylesheet" href="/template4/assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="/template4/assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="/template4/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/template4/images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="/template4/assets/style.css">

</head>

<body id='haka'>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><?=$req[2]?></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#works">Новости</a></li>
                 <li ><a href="#about">Информация</a></li>
                 <li ><a href="#partners">Фото</a></li>
                 <li ><a href="#contacts">Видео</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

<style>
.effect-oscar img {
	width: 100%;
}
</style>





<!-- works -->
<div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][0]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][0]['title']?></h2>
            <p><?=$newsArr['items'][0]['description']?><br>
            <a href="<?=$newsArr['items'][0]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][1]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][1]['title']?></h2>
            <p><?=$newsArr['items'][1]['description']?><br>
            <a href="<?=$newsArr['items'][1]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][2]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][2]['title']?></h2>
            <p><?=$newsArr['items'][2]['description']?><br>
            <a href="<?=$newsArr['items'][2]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][3]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][3]['title']?></h2>
            <p><?=$newsArr['items'][3]['description']?><br>
            <a href="<?=$newsArr['items'][3]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][4]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][4]['title']?></h2>
            <p><?=$newsArr['items'][4]['description']?><br>
            <a href="<?=$newsArr['items'][4]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][5]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][5]['title']?></h2>
            <p><?=$newsArr['items'][5]['description']?><br>
            <a href="<?=$newsArr['items'][5]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][6]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][6]['title']?></h2>
            <p><?=$newsArr['items'][6]['description']?><br>
            <a href="<?=$newsArr['items'][6]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][7]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][7]['title']?></h2>
            <p><?=$newsArr['items'][7]['description']?><br>
            <a href="<?=$newsArr['items'][7]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeIn">
          <?=$newsArr['items'][8]['img']?>
        <figcaption>
            <h2><?=$newsArr['items'][8]['title']?></h2>
            <p><?=$newsArr['items'][8]['description']?><br>
            <a href="<?=$newsArr['items'][8]['link']?>" title="1">Подробнее</a></p>              
        </figcaption>
    </figure>
</div>
<!-- works -->






<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Информация</h2>  
  <div class="row">
  <div class="col-sm-12 wowload fadeInLeft">
    <h4><i class="fa fa-paint-brush"></i> <?=$req[2]?></h4>
	<p><?=$ex?></p>
  </div>
  </div>

</div>
<!-- #Cirlce Ends -->










<div id="partners" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Что такое <?=$req[2]?>?</h2>
  <div class="clearfix">
    <div class="col-sm-12 partners  wowload fadeInLeft">
         <img src="<?=$img->urls[0]['regular']?>" alt="partners">
         <img src="<?=$img->urls[1]['regular']?>" alt="partners">
         <img src="<?=$img->urls[2]['regular']?>" alt="partners">
         <img src="<?=$img->urls[3]['regular']?>" alt="partners">
    </div>
    <div class="col-sm-12 partners  wowload fadeInRight">
         <img src="<?=$img->urls[4]['regular']?>" alt="partners">
         <img src="<?=$img->urls[5]['regular']?>" alt="partners">
         <img src="<?=$img->urls[6]['regular']?>" alt="partners">
         <img src="<?=$img->urls[7]['regular']?>" alt="partners">
    </div>
    <div class="col-sm-12 partners  wowload fadeInLeft">
         <img src="<?=$img->urls[8]['regular']?>" alt="partners">
         <img src="<?=$img->urls[9]['regular']?>" alt="partners">
         <img src="<?=$img->urls[10]['regular']?>" alt="partners">
         <img src="<?=$img->urls[11]['regular']?>" alt="partners">
    </div>
    <div class="col-sm-12 partners  wowload fadeInRight">
         <img src="<?=$img->urls[12]['regular']?>" alt="partners">
         <img src="<?=$img->urls[13]['regular']?>" alt="partners">
         <img src="<?=$img->urls[14]['regular']?>" alt="partners">
         <img src="<?=$img->urls[15]['regular']?>" alt="partners">
    </div>
  </div>


<!-- team -->
<h3 class="text-center  wowload fadeInUp">Видео</h3>
<div id="contacts" class="row grid team  wowload fadeInUpBig">	
	<div class=" col-xs-12">
	<figure class="effect-chico">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$data[0]->id->videoId?>" frameborder="0" allowfullscreen></iframe>
    </figure>
    </div>
</div>
<!-- team -->

</div>
<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
© 2016 <?=$req[2]?>. Все права защищены.
</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>