    <!DOCTYPE html>
     <html>
     <head>
       <title></title>
     </head>

     <body>
      <form action="testinsert.php" method="post">
        <input type="text" name="mot">
        <input type="submit" name="Rechercher">
          <?php
 include('connexion.php');
if(isset($_POST['Rechercher']))
{
  $str=$_POST['mot'];
  $query=$conn->query("SELECT * FROM local where NomLocal ='".$str."'");  
                   while($row=$query->fetch()){

                  echo "<tr class=\"text-center\"><td>".$row['IdLocal']."</td>";
                   echo "<td>".$row['NomLocal']."</td>";
                  echo "<td>".$row['TypeLocal']."</td>";
                   echo "<td>".$row['Effectif']."</td>";
                   echo "<td>".$row['Etage']."</td>";
                   echo'</tr>';
                 }}
  

 ?>
 <?php
/*
 $tableContent='';
 $strat='';
 $selectStmt = $conn->prepare('SELECT * FROM local');
 $selectStmt->execute();
 $locals=$selectStmt->fetchAll();
  foreach ($locals as $local) {
  $tableContent = $tableContent.'<tr>'.'<td>'.$local['IdLocal'].'</td>'.'<td>'.$local['NomLocal'].'</td>'.
  '<td>'.$local['TypeLocal'].'</td>'.
  '<td>'.$local['Effectif'].'</td>'.
  '<td>'.$local['Etage'].'</td>';
 }
 if(isset($_POST['Rechercher']))
 {
  $strat= $_POST['Rechercher'];
  $selectStmt = $conn->prepare('SELECT * FROM local where NomLocal like :start');
  $selectStmt->execute(array(':start'=>$strat));
}
 $locals =  $selectStmt->fetchAll();
 foreach ($locals as $local) {
  $tableContent = $tableContent.'<tr>'.'<td>'.$local['NomLocal'].'</td>'.
  '<td>'.$local['TypeLocal'].'</td>'.
  '<td>'.$local['Effectif'].'</td>'.
  '<td>'.$local['Etage'].'</td>';
 }
 ///////////////////////

  
  $NomLocal=$_POST['NomLocal'];
  $TypeLocal=$_POST['TypeLocal'];
  $Effectif=$_POST['Effectif'];
  $Etage=$_POST['Etage'];
if(isset($_POST['Ajouter']))
{
  
$insertmsg = $conn->prepare('INSERT INTO local(NomLocal,typeLocal,Effectif,Etage) VALUES(?,?,?,?)');
$insertmsg->execute(array($NomLocal,$TypeLocal,$Effectif,$Etage)); 
}*/
?>
</form>
     </body>
     </html>
