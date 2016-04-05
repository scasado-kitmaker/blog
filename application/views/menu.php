<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">       
	<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>
	<link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
</head>

<body>


	<?php

	if ($this->session->userdata('is_logged_in'))
		//echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."index.php/users/logout/", "logout").') | ';

		echo anchor(base_url().'index.php/users/logout/','Hola, '.$this->session->userdata('name'). ' logout','class="btnLogin"');
			

	elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'validate'))
		//echo anchor(base_url().'index.php/users/signup/','Sign Up').' | ';
		echo anchor(base_url().'index.php/users/signup/',' Sign Up ','class="btnLogin"');



	else
		//echo anchor(base_url().'index.php/users/signin/','Sign In').' | ';
		echo anchor(base_url().'index.php/users/signin/',' Entrar ','class="btnLogin"'  );
	if ($this->session->userdata('is_logged_in'))
		//echo anchor(base_url().'index.php/blog/entry/', 'New Entry');
		echo anchor(base_url().'index.php/blog/entry/',' Nueva entrada ','class="btnLogin"');
	if ($this->session->userdata('is_logged_in'))
		echo ' ';
	//echo anchor(base_url(), 'All Entries');
	echo anchor(base_url().' ',' Todas las entradas ','class="btnLogin"');
	if ($this->session->userdata('is_logged_in'))
		echo ' ';
	if ($this->session->userdata('is_logged_in'))
		//echo anchor(base_url().'index.php/blog/MyEntries/', 'My Entries');
		echo anchor(base_url().'index.php/blog/MyEntries/',' Mis entradas ','class="btnLogin"');
	
	echo '<hr />';
	?>

</body>