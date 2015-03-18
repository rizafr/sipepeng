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
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
				<input type="text" name="username" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required><a href="#" class=" icon user" ></a>
				 <?php echo form_error('username', '<p class="field_error">', '</p>'); ?>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required> <a href="#" class="icon lock"></a>
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
				echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
			?></li>
		</form>
			
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
<!--- footer --->
<div class="footer">
	
</div>
</body>
</html>