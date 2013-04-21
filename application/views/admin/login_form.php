<?php
if(!isset($email)){$email='';}
if(!isset($password)){$password='';}
$login = array(
	'name'	=> 'email',
	'id'	=> '',
	'size'	=> 30,
	'type' => 'email',
	'value' => $email,
    'placeholder' => 'E-mail',
    'autofocus' => 'autofocus',
    'required' => 'required',
);
$password = array(
	'name'	=> 'password',
	'id'	=> '',
	'size'	=> 30,
	'value' => $password,
    'placeholder' => 'Password',
    'required' => 'required',
);
$form_extra = array('id' => "login_forma");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HangOuts DesWeb Admin | Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>img/favicon.ico">
	<?php echo link_tag('css/bootstrap.min.css');?>
	<?php echo link_tag('css/bootstrap-responsive.min.css');?>
	<?php echo link_tag('css/sexy_admin.css');?>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
     <a class="brand" href="#"><img src="<?php echo base_url(); ?>img/logo.png" alt="DesarrolloWeb"></a>
  </div>
</div>
<div id="container">
<div class="space-large"></div>
<div class="space-large"></div>
<div class="space-large"></div>
<div class="space-large"></div>
<div class="row-fluid">
	<div class="span4"></div>
	<div class="span4 loginbox"><h1>Administración <br> <small>Login</small></h1>
	<section id="forma_ingreso">
	<?php echo form_open('admin/user_login', $form_extra); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><?php echo form_input($login); ?></div>		
		<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><?php echo form_password($password); ?></div>
		<div class="space-medium"></div>
		<button name="login_s" type="submit" id="login_submit" class="btn btn-success btn-large btn-block" tabindex="3">Dejame entrar! (' ¬_¬)</button>
		<?php if(isset($respuesta)){echo '<div class="space-2 alert alert-error">'.$respuesta.'</div>';} ?>
	<?php echo form_close(); ?>	
	</section>
	<p>
		<small>by <a href="http://desarrolloweb.com" target="_blank">desarrolloweb.com</a></small>
	</p>
	</div>
	<div class="span4"></div>
</div>
</div>
</body>
</html>