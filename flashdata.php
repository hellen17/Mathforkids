<?php 

if(session_status() == PHP_SESSION_NONE){
	session_start();
}

if(isset($_SESSION['flashdata'])){ 
	echo '<center class="alert alert-warning">';
	print_r($_SESSION['flashdata']);
	echo '</center>';

	unset($_SESSION['flashdata']);	
}
