<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendors/magnific-popup/dist/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/default.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/pace/pace.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="index.php">Polica</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Pocetna</a></li>
					<li><a href="#loginForm" class="popup-with-form">Login</a></li>
					<li><a href="#registerForm" class="popup-with-form">Registracija</a></li> 
				</ul>
			</div>
		</div>
	</nav>
    <div class="container">
		<div class="info clearfix">
			<p class="text-center">
				<i class="fa fa-times fa-lg pull-right" id="infoX"></i>
			</p>
		</div>
	</div>