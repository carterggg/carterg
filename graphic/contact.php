<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','guthrie.sk8tarded@gmail.com');
	define('MESSAGE_SUBJECT','Graphic and Web Design Job');
	define('REPLY_TO', 'guthrie.sk8tarded@gmail.com');
	define('FROM_ADDRESS', 'guthrie.sk8tarded@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Graphic Design: Carter Guthrie</title>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
</head>
<body>
<!-- Website content -->
<div class="container-fluid">
	
	<div class="row">
		<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
		
<!-- MOBILE NAV -->
			<img src="images/layout/menu-icon.png" class="toggle" width="85px" align="right">
			
				<div id="nav-toggle-bar">
				<br><br><br><br>
					<a href="index.html"><img src="images/layout/home.png" alt="Graphic Design: Carter Guthrie. Home Page" class="img-responsive desktop-nav" width="180px"></a>
					<a href="services.html"><img src="images/layout/services.png" alt="Graphic Design: Carter Guthrie. Services Page" class="img-responsive desktop-nav" width="180px"></a>
					<a href="designs.html"><img src="images/layout/designs.png" alt="Graphic Design: Carter Guthrie. Designs Page" class="img-responsive desktop-nav" width="180px"></a>
					<a href="contact.html"><img src="images/layout/contact.png" alt="Graphic Design: Carter Guthrie. Contact Page" class="img-responsive desktop-nav" width="180px"></a>
					<a href="pay.html"><img src="images/layout/pay.png" alt="Graphic Design: Carter Guthrie. Pay Page" class="img-responsive desktop-nav" width="180px"></a>
				</div>
<!-- END OF MOBILE NAV -->			
	
		</div>
	</div>
	

	<div class="row">
		<div class="col-xs-12">
			<a href="index.html" title="Graphic Design: Carter Guthrie"><img src="images/layout/titleheader.png" alt="Graphic Design: Carter Guthrie" class="img-responsive hidden-xs"></a>
				
			<a href="index.html" title="Graphic Design: Carter Guthrie"><img src="images/layout/mobile-header2.png" alt="Graphic Design: Carter Guthrie" class="img-responsive hidden-sm hidden-md hidden-lg"></a>
			<br class="hidden-sm hidden-md hidden-lg">
			
		</div>
	</div>	
				<br class="hidden-xs">

	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
			<div class="col-xs-12 col-sm-8 blank-background-content">
				<div class="whole-comic-border">
				<div class="services-content">
					<br>
					<h1 class="align-center header-size"><u>Contact</u></h1>
						<br>
			<h3 class="main-info-size">Need a quote or have a general question? Please fill out the form below or contact me at <u>Guthrie.sk8tarded@gmail.com</u></h3>
			
			<br><br>
						<?php include('inc/form.php'); ?>
		
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					
					<h2 class="sub-header-size">Carter Guthrie</h2>
						<h3 class="info-size">- Guthrie.sk8tarded@gmail.com</h3>
						<h3 class="info-size">- AA Degree in Graphic and Web Design from <a href="" title="The Art Institute of Atlanta">The Art Instiute of Atlanta.</a></h3>
						<h3 class="info-size"><a href="https://www.linkedin.com/pub/carter-guthrie/83/951/646" title="Graphic Design with Carter Guthrie, Linkedin site"><u>Linkedin</u></a></h3>
				</div>
				
				<div class="col-xs-12 col-sm-6">
					<img src="" alt="Graphic Design with Carter Guthrie" class="img-responsive">
				</div>
			</div>

		</div>	
		</div>	
		</div>
		

<!-- DESKTOP NAV -->
		<div class="hidden-xs col-sm-2 nav-background-content">
		<div class="nav-desktop-position">
			<a href="index.html"><img src="images/layout/home.png" alt="Graphic Design: Carter Guthrie. Home Page" class="img-responsive" width="190px"></a>
			<a href="services.html"><img src="images/layout/services.png" alt="Graphic Design: Carter Guthrie. Services Page" class="img-responsive" width="190px"></a>
			<a href="designs.html"><img src="images/layout/designs.png" alt="Graphic Design: Carter Guthrie. Designs Page" class="img-responsive" width="190px"></a>
			<a href="contact.html"><img src="images/layout/contact.png" alt="Graphic Design: Carter Guthrie. Contact Page" class="img-responsive" width="190px"></a>
			<a href="pay.html"><img src="images/layout/pay.png" alt="Graphic Design: Carter Guthrie. Pay Page" class="img-responsive" width="190px"></a>
		</div>
		</div>
<!-- END OF DESKTOP NAV -->
		<div class="hidden-xs col-sm-1"></div>
	</div>

<br><br>
<!-- FOOTER -->
	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
		<div class="col-xs-12 col-sm-10 footer-background-content">
			<nav>
				<ul>
					<a href="index.html" title="Graphic Design with Carter Guthrie"><li class="footer-nav-style">HOME</li></a>
					<a href="services.html" title="Graphic Design with Carter Guthrie"><li class="footer-nav-style">SERVICES</li></a>
					<a href="designs.html" title="Graphic Design with Carter Guthrie"><li class="footer-nav-style">DESIGNS</li></a>
					<a href="contact.html" title="Graphic Design with Carter Guthrie"><li class="footer-nav-style">CONTACT</li></a>
					<a href="pay.html" title="Graphic Design with Carter Guthrie"><li class="footer-nav-style">PAY</li></a>
					<a href="" title="Web Design with Carter Guthrie"><li class="footer-nav-style">WEB DESIGN</li></a>
				</ul>
			</nav>
			  <h1 class="footer-h1-style footer-background-h1-style">Graphic Design: Carter Guthrie 2015 ©</h1>
			
		
			<br>
		</div>
		<div class="hidden-xs col-sm-1"></div>
	</div>
<!-- END OF FOOTER -->


<!-- MOBILE NAV -->
<!-- END OF MOBILE NAV -->



</div> <!-- END OF container-fluid-->

<!-- END OF Website content -->

<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
    </script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="js/bootstrap-image-gallery.js"></script>
	<script src="js/main.js"></script>
<!-- END OF jQuery --> 
</body>
</html>
