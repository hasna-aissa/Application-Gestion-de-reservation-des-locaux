<?php 
include 'connexion.php';
if (isset($_POST['ModifierReservation'])) {
	
    $idreserve=$_POST['idReserve'];
	$professeur=$_POST['nomPers'];
	$nom=$_POST['nomlocal'];
	$timeD=$_POST['timeD'];
	$timeF=$_POST['timeF'];
	$dateD=$_POST['dateD'];
	$dateF=$_POST['dateF'];
	$filiere=$_POST['filiere'];
	$niveau=$_POST['niveau'];
	$datedebut=$_POST['datedebut'];
	$datefin=$_POST['datefin'];
	$timedebut=$_POST['timedebut'];
	$timefin=$_POST['timefin'];
	$grp_sec=$_POST['grp'];
	$matiere=$_POST['matiere'];

$count=0;
	date_default_timezone_set ('Europe/paris' );
    $dateauj=date('Y-m-d ');
    $timeauj= date('H:i');
	$table=explode(":", $timedebut);
	$table2=explode(":", $timefin);
	$timestamp = strtotime($datedebut);
    $day = date('l', $timestamp);
    $timestamp1 = strtotime($datefin);
    $day1 = date('l', $timestamp1);
if ($day=='Sunday' || $day1=='Sunday') {
	header('Location:GestionReservation.php?erreur=65');
}
else
{
	if ($dateauj>$datedebut || $dateauj>$datefin  ) {
	header('Location:GestionReservation.php?erreur=60');
	
}
else
{
	if (($timeauj>$timedebut || $timeauj>$timefin) && ($dateauj>$datedebut || $dateauj>$datefin  ))  {
		header('Location:GestionReservation.php?erreur=61');
	}
	else
	{
			if ($table[0]<=$table2[0]) {
$queryLocal=$conn->query("SELECT * FROM local where NomLocal='".$nom. "'");
                    $lineLocal=$queryLocal->fetch();
                    $IdLocal=$lineLocal['IdLocal'];


     $queryidPers=$conn->query("SELECT * FROM personnels where NomPers='".$professeur."' ");
     $lineidp=$queryidPers->fetch();
     $IdPers=$lineidp['IdPers'];

	$sql = "UPDATE reservations SET IdLocal=?,IdProf=?,Filiere=?,Grp_Sect=?,Niveau=?,TimeDebut=?,TimeFin=? , DateDebut=? , DateFin=?,Matiere=? where  IdReservation=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$IdLocal,$IdPers,$filiere,$grp_sec,$niveau,$timedebut,$timefin,$datedebut,$datefin,$matiere,$idreserve]);


$ps1="UPDATE creneu set NomProf=?,Filiere=?,GrpSec=?,Niveau=?,Matiere=? WHERE TimeDebut>=? AND TimeFin<=? AND Date>=? AND Date<=? AND IdLocal=?";
	$stmt3=$conn->prepare($ps1);
	$stmt3->execute([NULL, NULL,NULL,NULL,NULL,$timeD,$timeF,$dateD,$dateF,$IdLocal]);


	$ps="UPDATE creneu set NomProf=?,Filiere=?,GrpSec=?,Niveau=?,Matiere=? WHERE TimeDebut>=? AND TimeFin<=? AND Date>=? AND Date<=? AND IdLocal=?";
	$stmt2=$conn->prepare($ps);
	$stmt2->execute([$professeur, $filiere,$grp_sec,$niveau,$matiere,$timedebut,$timefin,$datedebut,$datefin,$IdLocal]);
	header("Location:GestionReservation.php");

	}
	else{
		 header('Location:GestionReservation.php?erreur=30');
	}
	}
}

}





	


}

	



 ?>

