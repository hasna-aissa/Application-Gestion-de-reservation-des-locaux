<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "root123", "gestionlocal");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM reservations";
 $result = mysqli_query($connect, $query);
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
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
