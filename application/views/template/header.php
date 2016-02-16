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
		          <a class="navbar-brand" href="<?php echo base_url(); ?>">Polica</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>">Pocetna</a></li>
					<li><a href="#loginForm" class="popup-with-form">Login</a></li>
					<li><a href="#registerForm" class="popup-with-form">Registracija</a></li> 
				</ul>
			</div>
		</div>
	</nav>
    <div class="container">
		<div class="info clearfix">
			<p class="text-center">
                            <?php if($this->session->has_userdata('logged_in')) {
                                echo $username;
                            }
                            ;

 ?>
                            <i class="fa fa-times fa-lg pull-right" id="infoX"></i>
			</p>
		</div>
	</div>
    <?php
        // Start Login Form
        $formAttr = array(
            'id' => 'loginForm',
            'class' => 'mfp-hide login-block',
            'name' => 'loginForm'
        );
        echo form_open('pocetna/login',$formAttr);
        
        $formInputAttr = array(
            'placeholder' => 'Email',
            'name' => 'loginFormEmail'
        );
        echo form_input($formInputAttr);
        
        $formInputAttr['placeholder'] = 'Password';
        $formInputAttr['name'] = 'loginFormPassword';
        echo form_password($formInputAttr);
        
        $data = array(
            'name' => 'btnLogin',
            'type' => 'submit',
            'content' => 'Login'
        );
        echo form_button($data);
        echo form_close();
        // End Login Form
        
        // Start Register Form
        $formAttr['id'] = 'registerForm';
        $formAttr['name'] = 'registerForm';
        echo form_open('pocetna/registracija',$formAttr);
        
        $formInputAttr['placeholder'] = 'Username';
        $formInputAttr['name'] = 'registerFormUsername';
        echo form_input($formInputAttr);
        
        $formInputAttr['placeholder'] = 'Email';
        $formInputAttr['name'] = 'registerFormEmail';
        echo form_input($formInputAttr);
        
        $formInputAttr['placeholder'] = 'Password';
        $formInputAttr['name'] = 'registerFormPassword';
        echo form_password($formInputAttr);
        
        $formInputAttr['placeholder'] = 'Password Retype';
        $formInputAttr['name'] = 'registerFormPasswordRetype';
        echo form_password($formInputAttr);
        
        $data = array(
            'name' => 'btnRegister',
            'type' => 'submit',
            'content' => 'Register'
        );
        echo form_button($data);
        echo form_close();
        // End Register Form
    ?>