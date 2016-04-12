<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registrate</title> 
	<!--Estilos-->
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/assets/images/favicon.ico"/>
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
	</div>
</body>
</html>