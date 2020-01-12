<?php
require('connexion.php');

$NomLocal=isset($_POST['NomLocal'])?$_POST['NomLocal']:"";
$TypeLocal=isset($_POST['TypeLocal'])?$_POST['TypeLocal']:"";
$Effectif=isset($_POST['Effectif'])?$_POST['Effectif']:"";
$Etage=isset($_POST['Etage'])?$_POST['Etage']:"";


$requete="INSERT INTO Local (NomLocal,TypeLocal,Effectif,Etage) VALUES(?,?,?,?)";
$params=array($NomLocal,$TypeLocal,$Effectif,$Etage);
	$resultat=$conn->prepare($requete);
	$resultat->execute($params);
	/*
	$requete="INSERT INTO creneu (IdLocal,Date,TimeDebut,TimeFin,NomProf,Matiere,Filiere,GrpSec,Niveau) VALUES(?,?,?,?)";
$params=array($NomLocal,$TypeLocal,$Effectif,$Etage);
	$resultat=$conn->prepare($requete);
	$resultat->execute($params);*/
	                 $datedQ=$conn->query("SELECT MIN(Date) FROM creneu ")->fetch();
                   $dated=$datedQ['MIN(Date)'];
                    $datefQ=$conn->query("SELECT MAX(Date) FROM creneu ")->fetch();
                    $datef=$datefQ['MAX(Date)'];
                    $query=$conn->query("SELECT IdLocal FROM local where NomLocal='".$NomLocal."' ")->fetch(); 
                    $IdLocal=$query['IdLocal'];

                    while ($dated<=$datef) {
                      $query=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values ('$IdLocal','$NomLocal','$dated','08:00','09:30')");
                       $query1=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin)values('$IdLocal','$NomLocal','$dated','09:45','11:15')");
 $query2=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','11:30','13:00')");

 $query3=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','14:00','15:30')");

 $query4=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','15:45','17:15')");

 $query5=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','17:30','19:00')");

                     
                     $dated ++; 
                    }
                     
header('location:GestionSalles.php');	

?>