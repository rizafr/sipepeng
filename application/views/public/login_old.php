<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><? echo $title;?></title>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url() ?>assets/login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
</head>
<body>
<!-- contact-form -->	
<div class="message warning"> 
<div class="inset">
	<div class="login-head">
		<h1>Silakan Login</h1>
			
	</div>
		<form method="post" action="<?php echo base_url('public/logins/process_login'); ?>">
			<li>
				<input type="text" name="username" class="text"  placeholder="username" required><a href="#" class=" icon user" ></a>
				 <?php echo form_error('username', '<p class="field_error">', '</p>'); ?>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" name="password" placeholder="password" required> <a href="#" class="icon lock"></a>
				 <?php echo form_error('password', '<p class="field_error">', '</p>'); ?>
			</li>
			
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" value="Login" >
						  <div class="clear">  </div>	
			</div>
				<div class="clear"> </div>
				<li>
			<?php
				$message = $this->session->flashdata('message');
				echo $message == '' ? '' : "  <br /> <span class='message warning'>" . $message . '</span>';
			?></li>
		</form>
			
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
<!--- footer --->
<div class="footer">
	
</div>
  <!-- Jquery validation Ketchup-->
 <script src="<?php echo base_url(); ?>assets/form-validator/jquery.form-validator.min.js"></script>
 <script> $.validate({
			  modules : 'file'
			});
</script>
</body>
</html>