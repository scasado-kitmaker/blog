
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Entries</title> 
	<link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/>
	<script src="http://localhost/blog/js/jquery-2.2.3.js"></script>
</head>
<body>

	<div class="show_entries">
		<?php include('menu.php');?>

		
		<div id="test_wurfl">

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
			if ($client->getDeviceCapability('is_mobile')) {  
				echo "This is a mobile device";  
			} else {  
				echo "This is a desktop device";  
			}

		//Save device data

			$nombre_device = $client->getDeviceCapability('complete_device_name');
			echo $nombre_device;

			$form_factor = $client->getDeviceCapability('form_factor');
			echo $form_factor;


			?>
		</div>

	</body>
	</html>        
