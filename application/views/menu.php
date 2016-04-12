<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">       
	<!--Estilos-->
	<link href='http://localhost/blog/assets/css/style.css' rel='stylesheet' type='text/css' />
	<link href="http://localhost/blog/assets/css/toastr.css" rel="stylesheet"/>
	<!--Scripts-->
	<script src="http://localhost/blog/assets//js/toastr.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>
</head>

<body>

	<div id="header">		
		<?=anchor((base_url().' '), '<img  src="http://localhost/blog/assets/images/header2.png">')?>
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
				//echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."index.php/users/logout/", "logout").') | ';

					echo  anchor(base_url().'index.php/users/logout/','Hola, '.$this->session->userdata('name'). ' logout ');



				elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'principal'))
					//echo anchor(base_url().'index.php/users/signup/','Sign Up').' | ';
					echo anchor(base_url().'index.php/users/signup/',' Registrate ','class="'.$varVerde6.'"');




				else
		//echo anchor(base_url().'index.php/users/signin/','Sign In').' | ';
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
		
</div>
<hr class="style13"/>
</body>