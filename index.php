<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="ksr_fav.ico">
    <title>KSR Real Value</title>
    <!-- Css -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--  Animation  -->
	<link href="assets/css/animate.min.css" rel="stylesheet"> 
  	<link href="assets/css/animation_main.css" rel="stylesheet">
  	<link id="css-preset" href="assets/css/presets/preset1.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- Fixed navbar -->
   		<?php include('assets/include/header.php'); ?>	

	<!-- ************************ Slider ************************ -->
  <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(assets/img/slider/padma-apt-min.jpeg)">
          <div class="caption">
          	<!-- <img src ="assets/img/tran.png" alt="logo"></a>
            <h1 class="animated fadeInLeftBig">Welcome to <span>KSR DEVELOPER</span></h1>-->             
             <!-- <p class="animated fadeInRightBig">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="contact.php"> <img class="img-responsive " src="assets/img/logo1.jpg" alt="logo"></a>  -->
          </div>
        </div>
        <div class="item" style="background-image: url(assets/img/slider/Urapakkam_apartment.jpg)">
          <div class="caption">
          	<!-- <img src ="assets/img/tran.png" alt="logo"></a>
            <h1 class="animated fadeInLeftBig">Welcome to <span>KSR DEVELOPER</span></h1> -->
            <!-- <p class="animated fadeInRightBig">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="contact.php">Contact Us</a> -->
          </div>
        </div>
        <div class="item" style="background-image: url(assets/img/slider/slide810.png)">
          <div class="caption">
          	<!-- <img src ="assets/img/tran.png" alt="logo"></a>
            <h1 class="animated fadeInLeftBig">Welcome to <span>KSR DEVELOPER</span></h1> -->
            <!-- <p class="animated fadeInRightBig">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="contact.php">Contact Us</a> -->
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#service"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->

	 		
	 
	<!-- *****************************************************************************************************************
	 MIDDLE CONTENT
	 ***************************************************************************************************************** -->
	 <!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <div id="service"> 
		<div class="container our_services_index">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
	  				<h3 class="recent_works"> Our Services </h3>
	  			</div>
	  		</div>
        </div>
	 	<div class="container">
 			<div class="row centered">
 				<div class="col-md-4">
 					<i class="fa  fa-home"></i>
 					<h4>Residential Villas</h4>
 					<p><br/><a href="villas.php" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-map" aria-hidden="true"></i>
 					<h4>Residential Plots</h4>
 					<p><br/><a href="plots.php" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-building" aria-hidden="true"></i>
 					<h4>Residential Apartments</h4>
 					<p><br/><a href="appartment.php" class="btn btn-theme">More Info</a></p>
 				</div>		 				
	 		</div>
	 	</div><!--/container -->
	 </div><!--/service -->

    <!-- *****************************************************************************************************************
     PORTFOLIO SECTION
     ***************************************************************************************************************** -->
    
	 
	<!-- **************	 TESTIMONIALS  ************** -->
	 <div id="twrap">
	 	<div class="container centered">
	 		<div class="row">
	 			<div class="col-lg-8 col-lg-offset-2">
	 			<i class="fa fa-comment-o"></i>
	 			<p>We just want to thank you and your fabulous team for such careful attention to out beautiful home! 
				It was a pleasure working with you and your top-notch company for our first ever home purchase. We will certainly refer our friends and co-workers to you! All our very best.</p>
	 			<h4><br/>Jessica</h4>	 			
	 			</div>
	 		</div><!--row -->
	 	</div><!--container -->
	 </div><!--twrap -->
	<!-- **************	 Footer  ************** -->
	<?php include('assets/include/footer.php'); ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>
    <!-- <script src="assets/js/modernizr.js"></script> -->
  	<!-- Script for animation -->
	<script type="text/javascript" src="assets/js/animation_main.js"></script>

    <script>
// Portfolio
(function($) {
	"use strict";
	var $container = $('.portfolio'),
		$items = $container.find('.portfolio-item'),
		portfolioLayout = 'fitRows';
		
		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}
				
		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());
		
		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);   
		}
				
		$('nav.portfolio-filter ul a').on('click', function() {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector }, refreshWaypoints());
				$('nav.portfolio-filter ul a').removeClass('active');
				$(this).addClass('active');
				return false;
		});
		
		function getColumnNumber() { 
			var winWidth = $(window).width(), 
			columnNumber = 1;
		
			if (winWidth > 1200) {
				columnNumber = 5;
			} else if (winWidth > 950) {
				columnNumber = 4;
			} else if (winWidth > 600) {
				columnNumber = 3;
			} else if (winWidth > 400) {
				columnNumber = 2;
			} else if (winWidth > 250) {
				columnNumber = 1;
			}
				return columnNumber;
			}       
			
			function setColumns() {
				var winWidth = $(window).width(), 
				columnNumber = getColumnNumber(), 
				itemWidth = Math.floor(winWidth / columnNumber);
				
				$container.find('.portfolio-item').each(function() { 
					$(this).css( { 
					width : itemWidth + 'px' 
				});
			});
		}
		
		function setPortfolio() { 
			setColumns();
			$container.isotope('reLayout');
		}
			
		$container.imagesLoaded(function () { 
			setPortfolio();
		});
		
		$(window).on('resize', function () { 
		setPortfolio();          
	});
})(jQuery);
</script>


  </body>
</html>


