<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign In</title> 
</head>
<body>
<div class="show_entries">
	<?php include('menu.php');?>
	
	<?=form_open(base_url().'index.php/users/validate/')?>
	<?php echo (isset($error)) ? '<p>Incorrect Data!</p>' : '';?>
	<p>Usuario: <?=form_input('username')?></p>   
	<p>Contraseña: <?=form_password('password')?></p>
	<?=form_submit('submit', 'Log In')?>
	</div>
</body>
</html>