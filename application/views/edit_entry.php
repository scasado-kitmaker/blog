<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Editar entrada</title>	
	<!--Favicon-->
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>
	<!--Estilos-->
	<link href='http://localhost/blog/public/css/style.css' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="http://localhost/blog/public/assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="http://localhost/blog/public/assets/ckfinder/ckfinder.js"></script>
</head>
<body>
	<div class="show_entries">
		<!--Inserta la vista que contiene el menu principal-->
		<?php include('menu.php'); 		
		$hidden = array('id' => $entry_data->id);
		?>

		<!--Formulario para  editar la entrada-->
		<?=form_open(base_url().'index.php/blog/update_entry/', '', $hidden)?>
		<p>Título: <?=form_input('title', $entry_data->title)?></p>
		<?php echo $this->ckeditor->editor("content",$entry_data->content,"class='editTextArea'");?>
		<p>Imagen:</p>
		<p ><?=form_input ('image', $entry_data->image)?></p>
		<p>Contenido:</p>
		<!--<p ><?=form_textarea ('content', $entry_data->content,'class="editTextArea"')?></p>-->
		<p>Etiquetas: <?=form_input('tags', $entry_data->tags)?> (Separadas por coma)</p>
		<?=form_submit('submit', 'Actualizar')?>
	</div>
</body>
</html>