<?php
include('connexion.php');
if(isset($_POST['connecter'])){
    if (!empty($_POST["email"]) and !empty($_POST['password'])) {
        session_start();
      $_SESSION["email"]=$_POST["email"];
      $_SESSION["password"]=$_POST["password"];
      $travail='chef_departement';
        $login = $conn->query("SELECT COUNT(*),p.IdPers,TravailPers FROM compte c, personnels p WHERE c.Login='".$_SESSION["email"]."' AND c.Password='".$_SESSION["password"]."' and c.IdPers = p.IdPers" )->fetch();
        if ($login['COUNT(*)'] == 1){
        $_SESSION['IdPers']=$login['IdPers'];
        if ($login['TravailPers']=='chef_departement') {
           header("Location: ReserverSalle.php");
        }
        if($login['TravailPers']=='professeur') {
           header("Location: ReserverSalleProf.php");
        }
      }
      else{
        header("Location:starter.php?erreur=22");
      }
    }
    else {
      header("Location: starter.php?erreur=20");
       
    }
  }


//insertion;
if(isset($_POST['inscrire']))
{
$password=$_POST['password'];
$password_confirmation=$_POST['password_confirmation'];
$email=$_POST['email'];
$cin=$_POST['cin'];
if ($password!=$password_confirmation) {

 header("Location: starter.php?erreur=21");
}
else
{
   $reponse = $conn->query("SELECT COUNT(IdPers),IdPers,TravailPers FROM personnels WHERE CINPers='".$cin."' AND EmailPers='".$email."'");
   $login = $conn->query("SELECT COUNT(*) FROM compte c, personnels p WHERE c.Login='".$email."'" )->fetch();
      if ($login['COUNT(*)']!=0) {
        header("Location: starter.php?erreur=27");
      }
      else{
        while ($donnees = $reponse->fetch()) {
        if ($donnees['COUNT(IdPers)'] ==1){
        $id=$donnees['IdPers'];
  $query=$conn->query("INSERT into compte(IdCompte,login,Password,IdPers)values(NULL,'$email','$password','$id')");
   header("Location: starter.php");
      }   
      else{ 
        header("Location: starter.php?erreur=23");
      }
      }
      }
}

       // $id=$row['count(IdPers)'];
  /*$query=$conn->query("INSERT into compte(IdCompte,login,Password,IdPers)values(NULL,'$email','$password',1)");*/


}


  ?>