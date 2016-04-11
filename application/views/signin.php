<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Identificate</title> 
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/>
	<link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
	<script src="http://localhost/blog/js/jquery-2.2.3.js"></script>	
</head>
<body>
	<div class="show_entries">
		<!--Inserta la vista que contiene el menu principal-->
		<?php include('menu.php');?>
		<!--Obtiene datos del dispositivo mediante wurfl cloud-->
		<div>
			<?php 
        // Include the autoloader - edit this path! 
			require_once 'wurfl/src/autoload.php'; 
        // Create a configuration object  
			$config = new ScientiaMobile\WurflCloud\Config();  
        // Set your WURFL Cloud API Key  
			$config->api_key = '397728:S6QuwXZeQhQkXxyeHnWBIRwWHA7HVCxh';   
        // Create the WURFL Cloud Client  
			$client = new ScientiaMobile\WurflCloud\Client($config);  
        // Detect your device  
			$client->detectDevice();  
			
        //Save device data
			$complete_device_name = $client->getDeviceCapability('complete_device_name');			

			$form_factor = $client->getDeviceCapability('form_factor');
			
			$is_mobile = $client->getDeviceCapability('is_mobile');
			if ($is_mobile==true) {  
				$is_mobile = " Dispositivo movil";  
			} else {  
				$is_mobile = " Dispositivo no movil";  
			}
			
			?>

		</div>

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
	<!--<div class="show_entries" id="div1">
		
		
		<?=form_open(base_url().'index.php/blog/insert_entry/')?>
		<p>complete_device_name <?=form_input('title','')?></p>
		<p>form_factor <?=form_input('title','')?></p>
		<p>is_mobile: <?=form_input('title','')?></p>
		<p>id: <?=form_input('title','')?></p>
		
			<?=form_submit('submit', 'Publicar')?>


		</div>-->

		<div class="show_entries" >

			<?php 

        // Include the autoloader - edit this path! 
			require_once 'wurfl/src/autoload.php'; 
        // Create a configuration object  
			$config = new ScientiaMobile\WurflCloud\Config();  
        // Set your WURFL Cloud API Key  
			$config->api_key = '397728:S6QuwXZeQhQkXxyeHnWBIRwWHA7HVCxh';   
        // Create the WURFL Cloud Client  
			$client = new ScientiaMobile\WurflCloud\Client($config);  
        // Detect your device  
			$client->detectDevice();  
        // Use the capabilities  


        //Save device data

			$complete_device_name = $client->getDeviceCapability('complete_device_name');
			


			$form_factor = $client->getDeviceCapability('form_factor');
			

			$is_mobile = $client->getDeviceCapability('is_mobile');
			if ($is_mobile==true) {  
				$is_mobile = " Dispositivo movil |";  
			} else {  
				$is_mobile = " Dispositivo no movil |";  
			}

			
			?>

		</div>

	</body>
	</html>