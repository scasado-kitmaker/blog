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
		<p>Título: <?=form_input('title','','placeholder="¡Escribe el título de tu entrada!"')?></p>
		<p>Contenido:</p>
		<p><?=form_textarea('content','','class="editTextArea" placeholder="¡Escribe el contenido de tu entrada!"')?></p>
		<p>Etiquetas:<?=form_input('tags','','placeholder="¡Separa las etiquetas con una coma!"')?> </p>
		<?=form_submit('submit', 'Publicar')?>
	</div>
</body>
</html>