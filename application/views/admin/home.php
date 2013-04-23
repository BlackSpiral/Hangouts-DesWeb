<?php 
if(!isset($youtube_url)){$youtube_url='';}
$add_video = array('class' => 'add_video');
$yt_input = array(
		'name' => 'youtube_url',
		'id' => 'youtube_url',
		'style' => 'yt_input',
		'value' => $youtube_url,
		'type' => 'url',
		'class' => 'span8',
    	'placeholder' => 'Youtube Url',
   		'autofocus' => 'autofocus',
    	'required' => 'required'
	);
$send_b = array(
		'class' => 'span4 btn btn-inverse btn-large',
		'value' => 'Agregar hangout!! ヘ(^_^ヘ)'
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
	<?php echo form_open('admin/add_hangout', $add_video); ?>
	<div class="controls controls-row">
	<?php echo form_input($yt_input); ?>
	<?php echo form_submit($send_b); ?>
	</div>
	<?php echo form_close(); ?>
	<div class="space-2"></div>
	<div class="row-fluid">
		<div class="span4"><h2>Últimos Agregados</h2>
			<div class="listas">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="span4"><h2>Últimos Editados</h2>
			<div class="listas">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="span4"><h2>Incompletos</h2>
			<div class="listas">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
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