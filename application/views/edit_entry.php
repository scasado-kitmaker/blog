<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Entry</title>	
</head>
<body>
	<div class="show_entries">
		<?php 

		include('menu.php'); 
		
		$hidden = array('id' => $entry_data->id);
		?>
		
		<?=form_open(base_url().'index.php/blog/update_entry/', '', $hidden)?>
		<p>Título: <?=form_input('title', $entry_data->title)?></p>
		<p>Contenido:</p>
		<p ><?=form_textarea ('content', $entry_data->content,'class="editTextArea"')?></p>
		<p>Etiquetas: <?=form_input('tags', $entry_data->tags)?> (Separadas por coma)</p>
		<?=form_submit('submit', 'Actualizar')?>
	</div>
</body>
</html>