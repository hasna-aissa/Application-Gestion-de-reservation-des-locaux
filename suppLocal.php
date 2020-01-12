
<?php 

require_once("connexion.php");

?>
<?php
	$IdLocal=$_GET['IdLocal'];
	$ps1=$conn->prepare("DELETE FROM creneu  WHERE IdLocal=? ");
	$params1=array($IdLocal);
	$ps1->execute($params1);

	$ps=$conn->prepare("DELETE FROM Local  WHERE IdLocal=? ");
	$params=array($IdLocal);
	$ps->execute($params);
	
	header("location:GestionSalles.php");
	
?>