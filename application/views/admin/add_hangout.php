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

<div class="container">
<!-- Notificaciones -->
<?php if(isset($error)) { ?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Upss!</strong> <?php echo $error; ?>
</div>
<!-- Fin Notificaciones -->
	<?php echo form_open('admin/add_hangout', $add_video); ?>
	<div class="controls controls-row">
	<?php echo form_input($yt_input); ?>
	<?php echo form_submit($send_b); ?>
	</div>
	<?php echo form_close(); ?>
	<div class="space-2"></div>
<?php } else { ?>
<!-- Notificaciones -->
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Bien hecho!</strong> El HangOut se agrego con Exito!! ヘ(^_^ヘ)<br> Pero aun hay información pendiente, puedes completarlo mas tarde.
</div>
<!-- Fin Notificaciones -->
<div class="row-fluid">
	<div class="span4 datos">
		<div class="video-container">
			<iframe src="http://www.youtube.com/embed/<?php echo $valores['youtube_id']; ?>" frameborder="0" width="560" height="315"></iframe>
		</div>
	</div>
	<div class="span4 datos">
		<strong>Titulo: </strong><?php echo $valores['title']; ?><br>
		<strong>Publicado: </strong><?php echo $valores['published']; ?><br>
		<strong>Duración: </strong><?php echo $valores['duration_format']; ?><br>
		<strong>Url: </strong><a href="http://youtu.be/<?php echo $valores['youtube_id']; ?>" target="_blank">http://youtu.be/<?php echo $valores['youtube_id']; ?></a>
	</div>
	<div class="span4 datos">
		<strong>Hashtag(s):</strong><br>
		<p><?php echo $valores['hashtags']; ?></p>
		<button class="btn btn-block btn-inverse" type="button">Editar Agregar Hashtag(s)</button>
		<strong>Thumbnails:</strong><br>
		<img src="<?php echo $valores['1_thumbnail']; ?>" alt="">
		<img src="<?php echo $valores['2_thumbnail']; ?>" alt="">
		<img src="<?php echo $valores['3_thumbnail']; ?>" alt="">
	</div>
</div>
<div class="space-2"></div>
<div class="row-fluid">
	<div class="span4 datos"><strong>Ponentes:</strong><br>
		<button class="btn btn-block btn-inverse" type="button">Agregar ponente</button>
	</div>
	<div class="span4 datos"><strong>Enlaces:</strong><br>
		<button class="btn btn-block btn-inverse" type="button">Agregar Enlace</button>
	</div>
	<div class="span4 datos"><strong>Archivos:</strong><br>
		<button class="btn btn-block btn-inverse" type="button">Agregar Archivo</button>
	</div>
</div>
<div class="row-fluid">
	<div class="span12 datos"><strong>Descripción</strong><br>
	<p><?php echo $valores['description']; ?></p>
	<strong>Apuntes Extra</strong><br>
	<button class="btn btn-block btn-inverse" type="button">Agregar Apuntes</button>
	</div>
</div>
<?php echo '<pre>';
	var_dump($valores);
echo '</pre>'; ?>
<?php } ?>
</div> <!-- Fin Container -->