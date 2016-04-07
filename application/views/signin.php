<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign In</title> 
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/>
	<link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
	<script src="http://localhost/blog/js/jquery-2.2.3.js"></script>
	
	
	
</head>
<body>

	<div class="show_entries">


	<?php include('menu.php');?>		



			<?=form_open(base_url().'index.php/users/validate/')?>
			
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
			<?=form_submit('submit', 'Iniciar sesión')?>

		</body>
		</html>

