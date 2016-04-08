<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">       
	<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>
	<link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
	<link href="http://localhost/blog/css/toastr.css" rel="stylesheet"/>
	<script src="http://localhost/blog/js/toastr.js"></script>
	



</head>

<body>

	<div id="header">		
		<?=anchor(base_url().'index.php/', '<img  src="http://localhost/blog/images/header2.png">')?>
	</div>

	<div class="menuBotones">
		<ul>
			<li>
				<?php
				$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
				echo $actual_link;
				if ($actual_link =='http://localhost/blog/index.php') {
					
				}

				if ($this->session->userdata('is_logged_in'))
		//echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."index.php/users/logout/", "logout").') | ';

					echo  anchor(base_url().'index.php/users/logout/','Hola, '.$this->session->userdata('name'). ' logout ' ,'class="principal" ');



				elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'validate'))
		//echo anchor(base_url().'index.php/users/signup/','Sign Up').' | ';
					echo anchor(base_url().'index.php/users/signup/',' Sign Up ','class="principal" ');



				else
		//echo anchor(base_url().'index.php/users/signin/','Sign In').' | ';
					echo anchor(base_url().'index.php/users/signin/',' Entrar ','class="principal"'  );
				?>

			</li>

			<li>
				<?php
				if ($this->session->userdata('is_logged_in'))
					echo anchor(base_url().'index.php/blog/entry/',' Nueva entrada ');

				if ($this->session->userdata('is_logged_in'))
					echo ' ';
				?>
			</li>
			<li>
			<?php
			echo anchor(base_url().' ',' Todas las entradas ');
			if ($this->session->userdata('is_logged_in'))
				echo ' ';
			


			?>
			</li>
			<li>
			<?php
			if ($this->session->userdata('is_logged_in'))
				
				echo anchor(base_url().'index.php/blog/MyEntries/',' Mis entradas ');
			?>
			</li>

			<li>
				<?php
				if ($this->session->userdata('name')=='admin') {
					echo anchor(base_url().'index.php/blog/userDatatables/',' Tablas de datos ');

				}
				?>

			</li>

			
		</ul>




		<!--<?php

		if ($this->session->userdata('is_logged_in'))
		//echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."index.php/users/logout/", "logout").') | ';

			echo  anchor(base_url().'index.php/users/logout/','Hola, '.$this->session->userdata('name'). ' logout ' ,'class="btnLogin" style="margin-top:50px"');



		elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'validate'))
		//echo anchor(base_url().'index.php/users/signup/','Sign Up').' | ';
			echo anchor(base_url().'index.php/users/signup/',' Sign Up ','class="btnLogin" ');



		else
		//echo anchor(base_url().'index.php/users/signin/','Sign In').' | ';
			echo anchor(base_url().'index.php/users/signin/',' Entrar ','class="btnLogin"'  );
		if ($this->session->userdata('is_logged_in'))
		//echo anchor(base_url().'index.php/blog/entry/', 'New Entry');
			echo anchor(base_url().'index.php/blog/entry/',' Nueva entrada ','class="btnNuevaEntrada"');

		if ($this->session->userdata('is_logged_in'))
			echo ' ';
	//echo anchor(base_url(), 'All Entries');
		echo anchor(base_url().' ',' Todas las entradas ','class="btnMostrar"');
		if ($this->session->userdata('is_logged_in'))
			echo ' ';
		if ($this->session->userdata('is_logged_in'))
		//echo anchor(base_url().'index.php/blog/MyEntries/', 'My Entries');
			echo anchor(base_url().'index.php/blog/MyEntries/',' Mis entradas ','class="btnMisEntradas"');

		if ($this->session->userdata('name')=='admin') {
			echo anchor(base_url().'index.php/blog/userDatatables/',' datatables ','class="btnLogin"');
		}


		?>
		-->
	</div>
	<hr class="style13"/>


</body>