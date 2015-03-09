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
<title>Graphic Design: Carter Guthrie</title>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
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
	
<!-- First Row: Myself -->
					<div class="row">
						<div class="col-xs-12 col-sm-10">
							<?php include('inc/form.php'); ?>
						</div>
					</div>

<!-- footer row -->
	
	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
			<div class="col-xs-12 col-sm-10">
				<nav class="align-center">
					<ul>
						<li><a href="index.html" title="carterguthrie graphic and web design">HOME</a></li>
						<li><a href="contact.php" title="carterguthrie graphic and web design">CONTACT</a></li>
						<li><a href="" title="carterguthrie graphic and web design">RESUME</a></li>
					</ul>
				</nav>
		
				<h1 class="align-center footer-text"><a href="" title="carterguthrie graphic and web design">CARTER GUTHRIE</a></h1>
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
