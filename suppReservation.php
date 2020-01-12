
<?php 

require_once("connexion.php");

?>
<?php
	$IdReservation=$_GET['IdReservation'];
	$reponse2 = $conn->query("SELECT * FROM reservations WHERE IdReservation='".$IdReservation."'");
	$donnee=$reponse2->fetch();
	$timedebut=$donnee['TimeDebut'];
	$timefin=$donnee['TimeFin'];
	$datedebut=$donnee['DateDebut'];
	$datefin=$donnee['DateFin'];
	$idLocal=$donnee['IdLocal'];

	$ps=$conn->prepare("DELETE FROM reservations  WHERE IdReservation=? ");
	$params=array($IdReservation);
	$ps->execute($params);
	$sql = "UPDATE creneu SET NomProf=?,Matiere=?,Filiere=?,GrpSec=?,Niveau=? WHERE TimeDebut>=? AND TimeFin<=? AND Date>=? AND Date<=? AND IdLocal=?";
$stmt= $conn->prepare($sql);
$stmt->execute([NULL, NULL, NULL, NULL,NULL,$timedebut,$timefin,$datedebut,$datefin,$idLocal]);
	
	header("location:GestionReservation.php");
	
?>