<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Entry</title>  
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/>   
	<link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
	<script src="http://localhost/blog/js/jquery-2.2.3.js"></script>


	<!--<script>
		$(document).ready(function(){
			$("p").click(function(){
				$("#div1").fadeToggle();
				$("#div2").fadeToggle();

			});
		});
	</script> 
	-->
</head>
<body>
	<div class="show_entries" id="div0">
		<?php include('menu.php');?>
	</div>
	<div class="show_entries" id="div1">
		
		<?=form_open(base_url().'index.php/blog/insert_entry/')?>
		<p>Título: <?=form_input('title','','placeholder="¡Escribe el título de tu entrada!"')?></p>
		<p>Contenido:</p>
		<p><?=form_textarea('content','','class="editTextArea" placeholder="¡Escribe el contenido de tu entrada!"')?></p>
		<p id="enviar">Etiquetas:<?=form_input('tags','','placeholder="¡Separa las etiquetas con una coma!"')?> </p>
		<?=form_submit('submit', 'Publicar')?>
	</div>
	<div class="show_entries" id="div2" style="display: none">
		<p>Entrada publicada</p>

	</div>
</body>
</html>