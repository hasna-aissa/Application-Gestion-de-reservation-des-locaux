
<?php

require_once('connexion.php');
	
 
	$IdLocal=$_POST['idlocal'];
	$NomLocal=$_POST['nomlocal'];
	$TypeLocal=$_POST['type'];
	$Effectif=$_POST['effectif'];
	$Etage=$_POST['etage'];
	

	$ps=$conn->prepare("UPDATE Local set NomLocal=?,TypeLocal=?,Effectif=?,Etage=? WHERE IdLocal=?");
	$params=array($NomLocal,$TypeLocal,$Effectif,$Etage,$IdLocal);
	$ps->execute($params);
	
	header("location:GestionSalles.php");
	
?>