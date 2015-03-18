<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','carterthedesigner@gmail.com');
	define('MESSAGE_SUBJECT','Graphic and Web Design');
	define('REPLY_TO', 'carterthedesigner@gmail.com');
	define('FROM_ADDRESS', 'carterthedesigner@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Carter Guthrie: Graphic and Web Design</title>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="styles/css/main.css">
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

</head>
<body>
<!-- Website content -->
	
	<div class="container-fluid">
	
<!-- Row: Header -->
	
	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
		<div class=" col-xs-12 col-sm-10">
				<a href="index.html" title="carter guthrie graphic and web design"><img src="images/layout/bw-header-cg.gif" alt="carter guthrie" class="img-responsive align-center"></a>
				<br><br><br>
		</div>
		<div class="hidden-xs col-sm-1"></div>
	</div>
	
<!-- Row: Navigation -->


	
	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
		<div class="hidden-xs col-sm-10">
		
			<nav class="align-center">
				<ul>
					<li class="main-nav-style"><a href="index.html" title="">HOME</a></li>
					<li class="main-nav-style"><a href="graphic/index.html" title="" target="_blank">GRAPHIC</a></li>
					<li class="main-nav-style"><a href="web/index.html" title="" target="_blank">WEB</a></li>
					<li class="main-nav-style"><a href="boltzonboard.html" title="">BOLTZ ON BOARD</a></li>
					<li class="main-nav-style"><a href="radio.html" title="Imminent Radio">RADIO</a></li>
					<li class="main-nav-style"><a href="aboutme.html" title="About Carter Guthrie">ABOUT</a></li>
					<li class="main-nav-style"><a href="contact.php" title="Contact Carter Guthrie">CONTACT</a></li>
				</ul>
			</nav>
		<br><br><br>
		</div>
		<div class="hidden-xs col-sm-1"></div>
	</div>	
	
<!-- First Row: Form -->
					<div class="row">
						<div class="col-sm-1"></div>
							<div class="col-xs-12 col-sm-10">
							 <h1 class="align-center">CONTACT ME</h1>
		   <br>
								<?php include('inc/form.php'); ?>
							</div>
						<div class="col-sm-1"></div>
					</div>

<!-- Footer row -->
	
	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
			<div class="col-xs-12 col-sm-10">
				<nav class="align-center">
					<ul>
						<li class="footer-style footer-size"><a href="index.html" title="carterguthrie graphic and web design">HOME</a></li>
						<li class="footer-style footer-size"><a href="contact.php" title="carterguthrie graphic and web design">CONTACT</a></li>
						<li class="footer-style footer-size"><a href="" title="carterguthrie graphic and web design">RESUME</a></li>
					</ul>
				</nav>
		
				<h1 class="align-center footer-text footer-style"><a href="" title="carterguthrie graphic and web design">CARTER GUTHRIE</a></h1>
				<br>
			</div>
		<div class="hidden-xs col-sm-1"></div>
	</div>	
		
	</div>	
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
