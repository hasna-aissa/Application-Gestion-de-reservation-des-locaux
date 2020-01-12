<?php
$connect = mysqli_connect("localhost", "root", "root123", "gestionlocal");
$sql = "SELECT * FROM reservations";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
 
    <table class="table table-bordered">
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
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
       <td>'.$row["IdReservation"].'</td> 
       <td>'.$row["IdLocal"].'</td> 
         <td>'.$row["IdProf"].'</td>  
         <td>'.$row["DateDebut"].'</td>  
         <td>'.$row["DateFin"].'</td> 
         <td>'.$row["TimeDebut"].'</td> 
         <td>'.$row["TimeFin"].'</td>  
         <td>'.$row["Matière"].'</td>  
         <td>'.$row["Niveau"].'</td>  
         <td>'.$row["Grp_Sect"].'</td>  
         <td>'.$row["Filiere"].'</td>  

    
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>