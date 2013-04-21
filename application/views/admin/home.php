<?php 
$yt_input = array(
		'name' => 'yotube_url',
		'id' => 'yotube_url',
		'style' => 'yt_input',
		'value' => $email,
		'type' => 'url'
    	'placeholder' => 'Youtube Url',
   		'autofocus' => 'autofocus',
    	'required' => 'required',
	);
?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HangOuts DesWeb Admin</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>img/favicon.ico">
	<?php echo link_tag('css/bootstrap.min.css');?>
	<?php echo link_tag('css/bootstrap-responsive.min.css');?>
	<?php echo link_tag('css/sexy_admin.css');?>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar " data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#"><img src="<?php echo base_url(); ?>img/logo.png" alt="DesarrolloWeb"></a>
      <div class="nav-collapse collapse">
		<ul class="nav">
			<li class="active"><a href="#">Inicio</a></li>
			<li><a href="#">Categorías</a></li>
			<li><a href="#">Timeline</a></li>
		</ul>
		<form class="navbar-search pull-right">
		  <input type="text" class="search-query" placeholder="Buscar">
		</form>
      </div>
    </div>
  </div>
</div>
<div class="top-space"></div>
<div class="container">
	<?php echo form_open('admin/add_hangout'); ?>

	<?php echo form_input($yt_input); ?>

	<?php echo form_submit('', '(ノ^_^)ノ Nuevo hangout!! ヘ(^_^ヘ)'); ?>

	<?php echo form_close(); ?>
</div>
<footer class="footer fixed">
	<div class="container">
		<div class="row-fluid">
	 		<div class="span8">
				<a href="http://desarrolloweb.com/copyright/">Copyright</a> | <a href="http://desarrolloweb.com/anunciese/">Publicidad</a> | <a href="http://desarrolloweb.com/acercade/">Acerca de</a> | <a href="http://desarrolloweb.com/datos-legales/">Datos legales</a> | <a href="http://desarrolloweb.com/contacta/">Contacta</a> 
			</div>
			<div class="span4">
				<div class="foot-logo">
					<a href="http://desarrolloweb.com"><img src="<?php echo base_url();?>img/logo-abajo.png" width="144" height="22" alt="Ir a portada Desarrollo Web" border="0"></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- JavaScripts -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- End JavaScripts -->
</body>
</body>
</html>