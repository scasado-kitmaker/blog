<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">


<?php
if ($this->session->userdata('is_logged_in'))
	echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."index.php/users/logout/", "logout").') | ';
elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'validate'))
	echo anchor(base_url().'index.php/users/signup/','Sign Up').' | ';
else
	echo anchor(base_url().'index.php/users/signin/','Sign In').' | ';
if ($this->session->userdata('is_logged_in'))
echo anchor(base_url().'index.php/blog/entry/', 'New Entry');
if ($this->session->userdata('is_logged_in'))
echo ' | ';
echo anchor(base_url(), 'All Entries');
if ($this->session->userdata('is_logged_in'))
echo ' | ';
if ($this->session->userdata('is_logged_in'))
echo anchor(base_url().'index.php/blog/MyEntries/', 'My Entries');

echo '<hr />';
?>