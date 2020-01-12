<?php
try
{
$conn = new PDO("mysql:host=127.0.0.1;dbname=gestionlocal;charset=utf8","root","root123");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (Exception $ex) {
 
	echo 'Not Connected'. $ex->getMessage();
}
?>



