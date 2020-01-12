     <?php
     include 'connexion.php';
                  if(isset($_POST['mise_ajour']))
                  {
                    $dated=$_POST['dateDebut'];
                    $datef=$_POST['dateFin'];
                    $query=$conn->query("SELECT * FROM local "); 
                    $table=$query->fetchAll();

                    $ps1=$conn->exec("DELETE FROM creneu ");

                    while ($dated<=$datef) {
                     foreach ($table as $key ) 
                     {
                      $IdLocal=$key['IdLocal'];
                      $NomLocal=$key['NomLocal'];
                      $query=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values ('$IdLocal','$NomLocal','$dated','08:00','09:30')");
                       $query1=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin)values('$IdLocal','$NomLocal','$dated','09:45','11:15')");
 $query2=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','11:30','13:00')");

 $query3=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','14:00','15:30')");

 $query4=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','15:45','17:15')");

 $query5=$conn->query("INSERT into creneu(IdLocal,NomLocal,Date,TimeDebut,TimeFin) values('$IdLocal','$NomLocal','$dated','17:30','19:00')");

                     }
                     $dated ++; 
                    }
$connect = mysqli_connect("localhost", "root", "root123", "gestionlocal");
$output = '';
                    $queryy = "SELECT * FROM reservations";
 $result = mysqli_query($connect, $queryy);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         
                        <th>IdResrevation</th>  
                        <th>IdLocal</th>  
                         <th>IdProf</th>  
                         <th>DateDebut</th>  
                         <th>DateFin</th>  
                         <th>TimeDebut</th> 
                         <th>TimeFin</th>
                         <th>Matiere</th>  
                         <th>Niveau</th> 
                         <th>Grp/Sec</th> 
                         <th>Filiere</th> 
         


                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                          <td>'.$row["IdReservation"].'</td> 
       <td>'.$row["IdLocal"].'</td> 
         <td>'.$row["IdProf"].'</td>  
         <td>'.$row["DateDebut"].'</td>  
         <td>'.$row["DateFin"].'</td> 
         <td>'.$row["TimeDebut"].'</td> 
         <td>'.$row["TimeFin"].'</td>
         <td>'.$row["Matiere"].'</td>   
         <td>'.$row["Niveau"].'</td>  
         <td>'.$row["Grp_Sect"].'</td>  
         <td>'.$row["Filiere"].'</td>  
 
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

 $ps5=$conn->exec("DELETE FROM reservations ");
                     
                  }


                   ?>