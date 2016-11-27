<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$req[2]?></title>

    <!-- CSS -->
    <link href="/template3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/template3/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/template3/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="/template3/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="/template3/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="/template3/css/owl.theme.css" rel="stylesheet" media="screen" />	
	<link href="/template3/css/animate.css" rel="stylesheet" />
    <link href="/template3/css/style.css" rel="stylesheet">
	<link href="/template3/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

	<!-- Section: intro -->
    <section id="intro" class="intro" style="background: url(<?=$img->urls[0]['regular']?>) no-repeat top center;background-size: cover; min-height: 100vh">
	
		
		<div class="page-scroll">
			<a href="/api/v1/<?=$req[2]?>/template3/#about">
				<i class="fa fa-angle-down fa-5x animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-12">
                         
                                          <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav">
                                                                  <li class="active"><a href="/api/v1/<?=$req[2]?>/template3/#intro">Главная</a></li>
                                                                  <li><a href="/api/v1/<?=$req[2]?>/template3/#about">Информация</a></li>
														          <li><a href="/api/v1/<?=$req[2]?>/template3/#gallery">Галерея</a></li>    
                                                                  
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  

	<!-- Section: about -->
    <section id="about" class="home-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					
						<div class="section-heading text-center">
						<div class="wow bounceInDown" data-wow-delay="0.2s">
							<h2>Информация <?=$req[2]?></h2>
						</div>
						<p class="wow bounceInUp" data-wow-delay="0.3s"><?=$ex?></p>
						</div>
					
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
					<img src="<?=$img->urls[1]['regular']?>" class="img-responsive img-rounded" alt="" />
				</div>		
				<div class="col-md-6">
					<?=$ex?>
				</div>
			</div>		
		</div>
	</section>
	<!-- /Section: about -->
	
	<!-- Section: separator -->
  	<!-- /Section: separator -->
	
	
	<!-- Section: gallery -->
    <section id="gallery" class="home-section text-center bg-gray">

			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
						<h2>My photo gallery</h2>
						<p>Take a look at my personal moment, enjoy</p>
					</div>
					</div>
				</div>
			</div>
			</div>

		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.4s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="<?=$img->urls[0]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[0]['regular']?>" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="<?=$img->urls[1]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[1]['regular']?>" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?=$img->urls[2]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[2]['regular']?>" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?=$img->urls[3]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[3]['regular']?>" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?=$img->urls[4]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[4]['regular']?>" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?=$img->urls[5]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[5]['regular']?>" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?=$img->urls[6]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[6]['regular']?>" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?=$img->urls[7]['regular']?>" title="This is an image title" data-lightbox-gallery="gallery1"><img src="<?=$img->urls[7]['regular']?>" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					
					<div class="section-heading">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<h2>Email or phone are welcome</h2>
					</div>
					<p class="wow lightSpeedIn" data-wow-delay="0.3s">Gentleman, introduce your self and get in touch with me privately</p>
					</div>
					
				</div>
			</div>
			</div>
		</div>
		<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="form-wrapper marginbot-50">
                
                <div class="row">
    
                       <iframe width="800" height="600" src="https://www.youtube.com/embed/<?=$data[0]->id->videoId?>" frameborder="0" allowfullscreen></iframe>
                </div>
                
				
            </div>
			<div class="text-center">
					<p class="lead"><i class="fa fa-phone"></i> Call me +1 888 9796 88</p>
			</div>
        </div>

    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>&copy;Copyright 2014 . Alice Lonely . design by <a href="/template3/http://bootstraptaste.co">Bootstrap Themes</a></p>
				</div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Lonely
                -->
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="/template3/js/jquery.min.js"></script>
    <script src="/template3/js/bootstrap.min.js"></script>
    <script src="/template3/js/jquery.easing.min.js"></script>	
	<script src="/template3/js/jquery.sticky.js"></script>
	<script src="/template3/js/jquery.scrollTo.js"></script>
	<script src="/template3/js/stellar.js"></script>
	<script src="/template3/js/wow.min.js"></script>
	<script src="/template3/js/owl.carousel.min.js"></script>
	<script src="/template3/js/nivo-lightbox.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/template3/js/custom.js"></script>

</body>

</html>