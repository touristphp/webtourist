<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- SITE TITLE -->
    <title>FZ - Tour & Travel Agency Template</title>           
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/mdb.min.css">

    <!-- Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css"> 
    <!--Flex slider-->
    <link rel="stylesheet" href="assets/css/flexslider.css">    
    <!-- component CSS -->  
    <!--ytp player-->
		<link rel="stylesheet" href="assets/css/YTPlayer.css">	
    <link rel="stylesheet" href="assets/css/aos.css">           
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">     
    <link rel="stylesheet" href="assets/css/quy.css">   
    <link rel="stylesheet" href="assets/css/review.css">  
    <link rel="stylesheet" href="assets/css/header.css">            
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  
<body data-spy="scroll" data-offset="80" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

		<!-- START PRELOADER -->
		<div class="preloader" style="display: none;">
			<div class="status" style="display: none;">
				<div class="status-mes"></div>
			</div>
		</div>
<!-- START NAVBAR -->
		  <nav class="navbar navbar-toggleable-sm fixed-top navbar-light bg-faded site-navigation">
			<div class="container">
			  <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>          
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="icon-menu"></i>
			  </button>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
				<ul class="navbar-nav">
				  <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
				  <li class="nav-item"><a class="nav-link" href="#service">Service</a></li>
				  <li class="nav-item"><a class="nav-link" href="#special_package">package</a></li>
				  <li class="nav-item"><a class="nav-link" href="#top_deals">Top deals</a></li>
				  <li class="nav-item"><a class="nav-link" href="#deals_discount">offer</a></li>
				  <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
				  <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
				  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				</ul>
			  </div>
			</div>
		  </nav>     
		<!-- END NAVBAR -->

		<!-- START HOME -->
		<section id="home" class="home_parallax" style="background-image: url(assets/img/bg/youtube-bg.jpg);  background-size:cover; background-position: center center;">			
			<a class="player" data-property="{videoURL:'https://youtu.be/f7MskKkn2Jg',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
			<div class="container">
				<div class="row">
				  <div class="col-md-12 text-center">
					<div class="hero-text">
						<h1>We make awesome tours</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />Lorem Ipsum has been the industry's standard .</p>
						<a href="#special_package" class="btn btn-default btn-home-bg">Find tour</a>						
					</div>
				  </div><!--- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME DESIGN -->
<!-- START CONTACT FORM-->
<section id="contact" class="contact_area">
	<div class="container-fluid">
		<div class="row">		
			<div class="col-lg-6 col-sm-12 col-xs-12 no-padding" data-aos="fade-up">
				<div class="contact_address">
					<h3>Contact Us</h3>				
					<ul>
						<li><i class="fa fa-rocket"></i>2369 Robinson Lane Jackson, OH 45640</li>
						<li><i class="fa fa-phone"></i>(+84) 01674213940</li>
						<li><i class="fa fa-envelope"></i>hoangbuingocquy@gmail.com</li>
						<li><i class="fa fa-clock-o"></i>Mon - Fri: 08.00 - 16.00</li>
					</ul>
				</div>
			</div><!-- END COL -->						
			<div class="col-lg-6 col-sm-12 col-xs-12 no-padding" data-aos="fade-up">
				<div class="contact">
					<form id="contact-form" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="email" name="email" class="form-control" id="first-email" placeholder="Email" required="required">
							</div>
							<div class="form-group col-md-12">
								<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required">
							</div>
							<div class="form-group col-md-12">
								<textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
							</div>
							<div class="col-md-12">
								<div class="actions">
									<input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div><!-- END COL -->
		</div><!--- END ROW -->				
	</div><!--- END CONTAINER -->	
</section>
<!-- END CONTACT FORM -->

		  <div id="map"></div>
<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>																	
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>
		<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>
		<!-- video scripts -->
			<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>	
			<script type="text/javascript">
				$('.player').mb_YTPlayer();
			</script>					
		<!-- jquery flexslider min js -->
			<script src="assets/js/jquery.flexslider-min.js"></script>				
		<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>									
		<!-- form-contact js -->
			<script src="assets/js/form-contact.js"></script>	
		<!-- aos js -->
			<script src="assets/js/aos.js"></script>
		<!-- map js -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>				
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>
    </body>
</html>