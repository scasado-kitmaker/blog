<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Nueva entrada</title>  
  <!--Estilos-->
  <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>   
  <link href='http://localhost/blog/public/assets/css/style.css' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!--Scripts-->
  <script src="http://localhost/blog/public/assets/js/jquery-2.2.3.js"></script>
  <script src="http://localhost/blog/public/assets/js/test.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src='http://localhost/blog/public/tinymce/js/tinymce/tinymce.min.js'></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <script src='http://localhost/blog/public/tinymce/js/tinymce/plugins/placeholder/plugin.js'></script>
  <script type="text/javascript">
    tinymce.init({
      selector: "textarea",
      plugins: [ "placeholder" ]
    });
  </script>
</head>
<body onload="autocomplete()">
	<div class="show_entries" id="div0">
    <!--Inserta la vista que contiene el menu principal-->
    <?php include('menu.php');?>
    <div  class="show_entries">
      <?php 
        // Include the autoloader - edit this path! 
      require_once 'application/libraries/wurfl/src/autoload.php'; 
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
        $is_mobile = " Dispositivo movil";  
      } else {  
        $is_mobile = " Dispositivo no movil";  
      }
      ?>
    </div>
  </div>

  <div class="show_entries" id="div1">
    <!--Formulario para enviar una nueva entrada, tambie obtiene un pequeño log que se guardara en la bbdd-->
    <?=form_open(base_url().'index.php/blog/insert_entry/')?>
    <p>Título: <?=form_input('title','','placeholder="¡Escribe el título de tu entrada!"')?></p>
    <p>Imagen entrada:</p>
    <p><?=form_input('image','','" placeholder="¡Introduce la url de la imagen!"')?></p>
    <div class="ui-widget">
      <p>Contenido:</p>
      <p><?=form_textarea('content','','class="editTextArea" placeholder="¡Escribe el contenido de tu entrada!"')?></p>
      
      <div class="ui-widget">
        <p id="enviar">Etiquetas:<?=form_input('tags','',' placeholder="¡Separa las etiquetas con una coma!" id="tags"')?> </p>
        
        <div style="display: none;" >
          <p>complete_device_name: <?=form_input('complete_device_name',$complete_device_name)?></p>   
          <p>is_mobile: <?=form_input('is_mobile',$is_mobile)?></p>   
          <p>form_factor: <?=form_input('form_factor',$form_factor)?></p>  


        </div>
      </div>
      <div class="g-recaptcha" data-sitekey="6LdKSh0TAAAAAK_VyEn0aL8P1Tvfz24MDpB7IQ2R"></div>
      <?=form_submit('submit', 'Publicar')?>
    </div>

    <div class="show_entries" id="div2" style="display: none">
      <p>Entrada publicada</p>
    </div>

  </body>
  </html>