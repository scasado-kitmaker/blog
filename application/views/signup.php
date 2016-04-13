<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registrate</title> 
	<!--Estilos-->
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>


	<!--Prueba reCaptcha-->
	<link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>

	
</head>
<body>
	<!--Formulario usado para enviar los datos para crear un usuario-->
	<div class="show_entries">
		<?php include('menu.php');?>
		<?=form_open(base_url().'index.php/users/register/')?>
		<p>Name: <?=form_input('name','','placeholder="Introduce tu nombre."')?></p>
		<p>Username: <?=form_input('username','','placeholder="Introduce tu nombre, con el te identificaras"')?></p>
		<p>Password: <?=form_password('password','','placeholder="Introduce tu contraseña"')?></p>
		
		
		<?=form_submit('submit', 'Registrarse')?>
		
		<!--Prueba recaptcha
		<div class="g-recaptcha" data-sitekey="6LdKSh0TAAAAAK_VyEn0aL8P1Tvfz24MDpB7IQ2R"></div>
		-->




	</div>
</body>
</html>