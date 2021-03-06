<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template 1</title>
    <link href="/template1/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template1/assets/css/style1.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

  </head>
	<!-- NAVBAR ============================= -->
  <body>
    <div class="navbar-wrapper">
      <div class="container-fluid padding-left-right">
      	<div class="row">
	      	<nav id="menu" role="navigation" class="navbar navbar-default m-bottom-0 navbar-fixed-top">
			  <div class="navbar-header">
			    <a href="" class="navbar-brand">Слово</a><!-- suda поисковое слово -->
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
	      <img src="assets/img/2.jpg" alt="img1"> <!-- foto -->
	      <div class="carousel-caption">
	
	      </div>
	    </div>
	    <div class="item carousel-height">
	      <img src="assets/img/3.jpg" alt="img2"> <!-- foto -->
	      <div class="carousel-caption">
	
	      </div>
	    </div>
	    <div class="item carousel-height">
	      <img src="assets/img/2.jpg" alt="img2"> <!-- foto -->
	      <div class="carousel-caption">
	      
	      </div>
	    </div>
	  </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="container">		
		<hr class="hr-style"/>
	</div>  
	
    <!-- Block novosti -->
    <div id="news" class="container content-padding">
	  <h1>News</h1>
      <div class="row">
        <div class="col-lg-3 news-img-center">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2> <!-- suda nazvanie novosti -->
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p> <!-- suda text novosti -->
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-3 news-img-center">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2><!-- suda nazvanie novosti -->
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-3 news-img-center">
          <img class="img-circle" src="assets/img/1.jpg" width="140" height="140">
          <h2>Heading</h2><!-- suda nazvanie novosti -->
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-3 news-img-center">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2><!-- suda nazvanie novosti -->
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-3 news-img-center">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2><!-- suda nazvanie novosti -->
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-3 news-img-center">
          <img class="img-circle" src="assets/img/1.jpg" width="140" height="140">
          <h2>Heading</h2><!-- suda nazvanie novosti -->
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p><!-- suda text novosti -->
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div>
      </div>
    <hr class="hr-style"/>
    </div>  

    <!-- Video -->
	
    <div id="video" class="container content-padding">
	  <h1>Video</h1>
      <div class="row">
        <div class="col-lg-12 news-img-center">
			<iframe width="800" height="600" src="https://www.youtube.com/embed/oKYwYM3T6Rg" frameborder="0" allowfullscreen></iframe><!-- suda youtube -->
		</div>
      </div>
	<hr class="hr-style"/>
      <!-- Info -->
      <div id="inf" class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading.</h2><!-- suda zagolovok viki-->
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p><!-- suda text iz wiki -->
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1ODllOTRhOGQyIHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTU4OWU5NGE4ZDIiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEyNSIgeT0iMjYxLjEiPjUwMHg1MDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true"><!-- suda foto iz wiki -->
        </div>
      </div>

	<hr class="hr-style"/>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p>Слово</p>
      </footer>

    </div><!-- /.container -->
