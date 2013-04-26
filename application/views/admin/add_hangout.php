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
<?php echo '<pre>'; var_dump($valores); echo '</pre>'; ?>
<?php } ?>
</div>