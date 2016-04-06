<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Entry</title>       
</head>
<body>
<div class="show_entries">
		<?php include('menu.php');?>
		<?=form_open(base_url().'index.php/blog/insert_entry/')?>
		<p>Título: <?=form_input('title')?></p>
		<p>Contenido:</p>
		<p><?=form_textarea('content','','class="editTextArea"')?></p>
		<p>Etiquetas:<?=form_input('tags')?> (Separadas por coma)</p>
		<?=form_submit('submit', 'Publicar')?>
	</div>
</body>
</html>