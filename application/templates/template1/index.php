<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$req[2]?></title>
    <link href="/template1/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template1/assets/css/style1.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/template1/assets/js/bootstrap.min.js"></script>
    <script src="/template1/assets/js/main.js"></script>

  </head>
	<!-- NAVBAR ============================= -->
  <body>
    <div class="navbar-wrapper">
      <div class="container-fluid padding-left-right">
      	<div class="row">
	      	<nav id="menu" role="navigation" class="navbar navbar-default m-bottom-0 navbar-fixed-top">
			  <div class="navbar-header">
			    <a href="" class="navbar-brand"><?=$req[2]?></a><!-- suda поисковое слово -->
			  </div>
			  <div id="navbarCollapse" class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#main">Главная</a></li>
			      <li><a href="#news">Новости</a></li>
			      <li><a href="#video">Видео</a></li>
			      <li><a href="#inf">Информация</a></li>
			    </ul>
			  </div>
			</nav>
      	</div>
      </div>
    </div>


    <!-- Carousel================================================= -->
   <div id="main"></div>
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner" role="listbox">
	    <div class="item active carousel-height">      
	      <img src="<?=$img->urls[0]['regular']?>" alt="img1"> <!-- foto -->
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item carousel-height">
	      <img src="<?=$img->urls[1]['regular']?>" alt="img2"> <!-- foto -->
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item carousel-height">
	      <img src="<?=$img->urls[2]['regular']?>" alt="img2"> <!-- foto -->
	      <div class="carousel-caption">
	      </div>
	    </div>
	  </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Пред.</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">След.</span>
	  </a>
	</div>
	<div class="container">		
		<hr class="hr-style"/>
	</div>  
	
    <!-- Block novosti -->
    <div id="news" class="container content-padding">
	  <h1>Новости</h1>
      <div class="row">
        <div class="col-lg-4 news-img-center">
          <?=$newsArr['items'][0]['img']?>
          <h2 style="font-size: 20px;"><?=$newsArr['items'][0]['title']?></h2> <!-- suda nazvanie novosti -->
          <p><?=$newsArr['items'][0]['description']?></p> <!-- suda text novosti -->
          <p><a class="btn btn-default" href="<?=$newsArr['items'][0]['link']?>" role="button">Подробно</a></p>
        </div>
        <div class="col-lg-4 news-img-center">
          <?=$newsArr['items'][1]['img']?>
          <h2 style="font-size: 20px;"><?=$newsArr['items'][1]['title']?></h2><!-- suda nazvanie novosti -->
          <p><?=$newsArr['items'][1]['description']?></p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="<?=$newsArr['items'][1]['link']?>" role="button">Подробно</a></p>
        </div>
        <div class="col-lg-4 news-img-center">
          <?=$newsArr['items'][2]['img']?>
          <h2 style="font-size: 20px;"><?=$newsArr['items'][2]['title']?></h2><!-- suda nazvanie novosti -->
          <p><?=$newsArr['items'][2]['description']?></p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="<?=$newsArr['items'][2]['link']?>" role="button">Подробно</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 news-img-center">
          <?=$newsArr['items'][3]['img']?>
          <h2 style="font-size: 20px;"><?=$newsArr['items'][3]['title']?></h2><!-- suda nazvanie novosti -->
          <p><?=$newsArr['items'][3]['description']?></p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="<?=$newsArr['items'][3]['link']?>" role="button">Подробно</a></p>
        </div>
        <div class="col-lg-4 news-img-center">
          <?=$newsArr['items'][4]['img']?>
          <h2 style="font-size: 20px;"><?=$newsArr['items'][4]['title']?></h2><!-- suda nazvanie novosti -->
          <p><?=$newsArr['items'][4]['description']?></p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="<?=$newsArr['items'][4]['link']?>" role="button">Подробно</a></p>
        </div>
        <div class="col-lg-4 news-img-center">
          <?=$newsArr['items'][5]['img']?>
          <h2 style="font-size: 20px;"><?=$newsArr['items'][5]['title']?></h2><!-- suda nazvanie novosti -->
          <p><?=$newsArr['items'][5]['description']?></p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="<?=$newsArr['items'][5]['link']?>" role="button">Подробно</a></p>
        </div>
       </div> 
    <hr class="hr-style"/>
    </div>  

    <!-- Video -->
	
    <div id="video" class="container content-padding">
	  <h1>Видео</h1>
      <div class="row">
        <div class="col-lg-12 news-img-center">
			     <iframe width="800" height="600" src="https://www.youtube.com/embed/<?=$data[0]->id->videoId?>" frameborder="0" allowfullscreen></iframe><!-- suda youtube -->
		    </div>
      </div>
	<hr class="hr-style"/>
      <!-- Info -->
      <div id="inf" class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> Информация - <?=$req[2]?></h2><!-- suda zagolovok viki-->
          <p class="lead"><?=$ex?></p><!-- suda text iz wiki -->
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="<?=$img->urls[0]['regular']?>" alt="500x500" src="<?=$img->urls[0]['regular']?>" style="max-width: 500px"><!-- suda foto iz wiki -->
        </div>
      </div>

	<hr class="hr-style"/>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p><?=$req[2]?></p>
      </footer>

    </div><!-- /.container -->
