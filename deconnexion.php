<?php 


if (isset($_POST['deconnecter'])) {
	session_destroy();
	header('location:starter.php');
	
}
 ?>