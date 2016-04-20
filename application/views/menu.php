<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">       
	<!--Estilos-->
	<link href='http://localhost/blog/public/assets/css/style.css' rel='stylesheet' type='text/css' />
	<link href="http://localhost/blog/public/assets/css/toastr.css" rel="stylesheet"/>
	<link href="http://localhost/blog/public/assets/css/jquery.cookiebar.css" rel="stylesheet"/>
	<!--Scripts-->
	<script src="http://localhost/blog/public/assets/js/toastr.js"></script>	
	<script type="text/javascript" src="http://localhost/blog/public/assets/js/moment.js"></script>
	<script type="text/javascript" src="http://localhost/blog/public/assets/js/jquery.cookiebar.js"></script> 
	<script type="text/javascript"> 
		$(document).ready(function(){
			$.cookieBar();
		});
	</script>
</head>
<body>
	<div id="header">		
		<?=anchor((base_url().' '), '<img  src="http://localhost/blog/public/assets/images/header2.png">')?>
	</div>

	<!--Menu principal y codigo para resaltar el boton de la página donde estamos-->
	<div class="menuBotones"> 
		<ul>
			<li>
				<?php
				$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
				$varVerde1=' ';
				$varVerde2=' ';
				$varVerde3=' ';
				$varVerde4=' ';
				$varVerde5=' ';
				$varVerde6=' ';
				$varVerde7=' ';

				if ($actual_link =='http://localhost/blog/index.php') {
					$varVerde1='principal';
				}else{
					$varVerde1=' ';

				}
				if ($actual_link =='http://localhost/blog/index.php/blog/entry/') {
					$varVerde2='principal';
				}else{
					$varVerde2=' ';

				}
				if ($actual_link =='http://localhost/blog/index.php') {
					$varVerde3='principal';
				}else{
					$varVerde3=' ';

				}
				if ($actual_link =='http://localhost/blog/index.php/blog/MyEntries/') {
					$varVerde4='principal';
				}else{
					$varVerde4=' ';

				}
				if ($actual_link =='http://localhost/blog/index.php/blog/userDatatables/') {
					$varVerde5='principal';
				}else{
					$varVerde5=' ';

				}
				if ($actual_link ==base_url().'index.php/users/signin/') {
					$varVerde6=' ';
				}else{
					$varVerde6=' ';

				}
				if ($actual_link ==base_url().'index.php/users/signup/') {
					$varVerde7=' ';
				}else{
					$varVerde7=' ';

				}	

				if ($this->session->userdata('is_logged_in'))				
					echo  anchor(base_url().'index.php/users/logout/','Hola, '.$this->session->userdata('name'). ' logout ');
				elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'principal'))
					echo anchor(base_url().'index.php/users/signup/',' Registrate ','class="'.$varVerde6.'"');
				else		
					echo anchor(base_url().'index.php/users/signin/',' Identificate ' ,'class="'.$varVerde7.'"');
				?>
			</li>

			<li>
				<?php
				if ($this->session->userdata('is_logged_in'))
					echo anchor(base_url().'index.php/blog/entry/',' Nueva entrada ','class="'.$varVerde2.'"');
				if ($this->session->userdata('is_logged_in'))
					echo ' ';
				?>
			</li>

			<li>
				<?php
				echo anchor(base_url().' ',' Todas las entradas ','class="'.$varVerde3.'"');
				if ($this->session->userdata('is_logged_in'))
					echo ' ';	
				?>
			</li>

			<li>
				<?php
				if ($this->session->userdata('is_logged_in'))					
					echo anchor(base_url().'index.php/blog/MyEntries/',' Mis entradas ','class="'.$varVerde4.'"');
				?>
			</li>

			<li>
				<?php
				if ($this->session->userdata('name')=='admin') {
					echo anchor(base_url().'index.php/blog/userDatatables/',' Tablas de datos ','class="'.$varVerde5.'"');
				}
				?>
			</li>
		</ul>	
		<!--<?php 
		echo $this->benchmark->memory_usage(); 
		echo '<br/>';
		echo $this->benchmark->elapsed_time();
		?>-->	
	</div>
	<hr class="style13"/>
</body>