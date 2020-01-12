<?php
include 'connexion.php';
if (isset($_POST['Reserver'])) {
	$nom=$_POST['Nom'];
	$professeur=$_POST['Professeur'];
	$sujet=$_POST['Sujet'];
	$filiere=$_POST['Filiere'];
	$niveau=$_POST['Niveau'];
	$datedebut=$_POST['DateDebut'];
	$datefin=$_POST['DateFin'];
	$timedebut=$_POST['TimeDebut'];
	$timefin=$_POST['TimeFin'];
	$grp_sec=$_POST['GrpSec'];
	$travail='professeur';
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
	header('Location:ReserverSalleProf.php?erreur=65');
}
else
{
	if ($dateauj>$datedebut || $dateauj>$datefin  ) {
	header('Location:ReserverSalleProf.php?erreur=60');
	
}
else
{
	if (($timeauj>$timedebut || $timeauj>$timefin) && ($dateauj>$datedebut || $dateauj>$datefin  ))  {
		header('Location:ReserverSalleProf.php?erreur=61');
	}
	else
	{
			if ($table[0]<=$table2[0]) {
$rep = $conn->query("SELECT count(*) from creneu where TimeDebut>='".$timedebut."' AND TimeFin<='".$timefin."' AND Date>='".$datedebut."' AND Date<='".$datefin."' and GrpSec='".$grp_sec."' and Filiere='".$filiere."' and Niveau='".$niveau."' ")->fetch();
if ($rep['count(*)']!=0) {
	header('Location:ReserverSalleProf.php?erreur=100');
}
else{
			$reponse = $conn->query("SELECT IdPers FROM personnels WHERE NomPers='".$professeur."' AND TravailPers='".$travail."'");
$reponse2 = $conn->query("SELECT IdLocal FROM local WHERE NomLocal='".$nom."'");
$donnee=$reponse2->fetch();
$idLocal=$donnee['IdLocal'];
$reponse3 = $conn->query("SELECT * from creneu where IdLocal='".$idLocal."' and TimeDebut>='".$timedebut."' AND TimeFin<='".$timefin."' AND Date>='".$datedebut."' AND Date<='".$datefin."'");

$reponse4 = $conn->query("SELECT COUNT(*) from creneu where IdLocal='".$idLocal."' and TimeDebut>='".$timedebut."' AND TimeFin<='".$timefin."' AND Date>='".$datedebut."' AND Date<='".$datefin."'");
$donnee4=$reponse4->fetch();
   while ($donnee3 = $reponse3->fetch()) {
   	if ($donnee3['NomProf']==NULL) {
   		$count++;
   	}
}
if ($donnee4['COUNT(*)']==$count) {
	while ($donnees = $reponse->fetch()) {

        $id=$donnees['IdPers'];
  $query=$conn->prepare("INSERT into reservations(IdLocal, IdProf, DateDebut, DateFin, TimeDebut, TimeFin, Matiere, Niveau, Filiere, Grp_Sect) values(?,?,?,?,?,?,?,?,?,?)");
	$query->execute(array($idLocal,$id,$datedebut,$datefin,$timedebut,$timefin,$sujet,$niveau,$filiere,$grp_sec));

		$sql = "UPDATE creneu SET NomProf=?,Matiere=?,Filiere=?,GrpSec=?,Niveau=? WHERE TimeDebut>=? AND TimeFin<=? AND Date>=? AND Date<=? AND IdLocal=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$professeur, $sujet, $filiere, $grp_sec,$niveau,$timedebut,$timefin,$datedebut,$datefin,$idLocal]);

  header('Location:ReserverSalleProf.php');


      }   
}
else{
	header('Location:ReserverSalleProf.php?erreur=5');
}
}


	}
	else{
		 header('Location:ReserverSalleProf.php?erreur=30');
	}
	}
}

}
      

}
/*
$request =$conn->query("SELECT COUNT(*) FROM creneu WHERE TimeDebut>='".$timedebut."' AND TimeFin<='".$timefin."' AND Date>='".$datedebut."' AND Date<='".$datefin."' AND IdLocal='".$idLocal."' AND NomProf!=NULL OR     " );
$result=$request->fetch();
if ($result['COUNT(*)']==0) {
	}
else {
	echo "<script language=\"JavaScript\"> alert(\"impossible\")</script>";
	
}

*/

?>
