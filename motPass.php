
            
<?php 
include 'connexion.php';
session_start();
if (isset($_POST['password_modif'])) {
  $passwordold=$_POST['password'];
  $passwordN=$_POST['password_nouveau'];
  $passwordC=$_POST['password_confirmation'];
  if ($passwordold==$_SESSION['password']) {
    if ($passwordC==$passwordN) {
      $sql = "UPDATE compte SET Password=? WHERE Login=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$passwordN,$_SESSION['email']]);
$_SESSION['password']=$passwordN;
header("Location:EditPassword.php?erreur=82");
    }
    else
    {
      header("Location:EditPassword.php?erreur=81");
    }
  }
  else{
    header("Location:EditPassword.php?erreur=80");
  }
  # code...
}





 ?>

