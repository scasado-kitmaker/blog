<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Identificate</title> 
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>
	<link href='http://localhost/blog/public/assets/css/style.css' rel='stylesheet' type='text/css' />
	<script src="http://localhost/blog/public/assets/js/jquery-2.2.3.js"></script>	
</head>
<body>
	<div class="show_entries">
		<!--Inserta la vista que contiene el menu principal-->
		<?php include('menu.php');?>
		<!--Obtiene datos del dispositivo mediante wurfl cloud-->
		
		<?=form_open(base_url().'index.php/users/validate/')?>
		<!--Muestra un toast en caso de que los datos sea incorrectos-->
		<?php echo (isset($error)) ? '<script type="text/javascript">Command: toastr["error"]("Los datos introducidos son incorrectos", "Aviso")

		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-top-full-width",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}</script>' 
		: '';?>
		<p>Usuario: <?=form_input('username','','placeholder="Usuario"')?></p>   
		<p>Contraseña: <?=form_password('password','','placeholder="Contraseña"')?></p>
		<div style="display: none;" >
			<p>complete_device_name: <?=form_input('complete_device_name',$complete_device_name)?></p>   
			<p>is_mobile: <?=form_input('is_mobile',$is_mobile)?></p>   
			<p>form_factor: <?=form_input('form_factor',$form_factor)?></p>   
		</div>
		<?=form_submit('submit', 'Iniciar sesión')?>
	</div>
</body>
</html>