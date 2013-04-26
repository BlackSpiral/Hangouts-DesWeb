<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
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