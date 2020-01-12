              <h1>Liste des creneus</h1>
            <table id="example1" class="table table-bordered table table-striped">
    <thead>
              <?php 
      include('connexion.php');
      
      $sql1 = "SELECT * FROM creneu group by (IdLocal) ";
      $sql2 = "SELECT * FROM creneu group by (Date) ";
      $sql3="SELECT count(IdLocal) from local";
      $stmt3 = $conn->prepare($sql3);
      $stmt3->execute();
      $row3=$stmt3->fetch(PDO::FETCH_BOTH);
      echo $row3['count(IdLocal)'];
      // Preparation
      
      $stmt1 = $conn->prepare($sql1);
      $stmt2 = $conn->prepare($sql2);
      // execution
      
      $stmt1->execute();
      $stmt2->execute();
      echo '<tr><th class="text-center" >Salle/Jour</th>';
      while ($row1=$stmt1->fetch(PDO::FETCH_BOTH)) {
      echo'<th class="text-center"  >'.$row1['IdLocal'].'</th>'; 
      }
     
      echo'</tr></thead><tbody>';
      while ($row2=$stmt2->fetch(PDO::FETCH_BOTH)) {
      echo'<tr class="text-center">';
      $timestamp = strtotime($row2['Date']);
      $day = date('d', $timestamp);
      echo'<td class="text-center"  >'.$day.'</td>';
      $sql = "SELECT * FROM creneu WHERE Day(Date)=$day";
      $stmt = $conn->query($sql);
      $row = $stmt->fetchAll(PDO::FETCH_OBJ);
      echo "<td>";
      echo"<table class=\"table\">";
      $cnt=0;
       foreach ($row as $donnee) {
        
          echo " <tr><td id=\"2\">".$donnee->TimeDebut." ".$donnee->TimeFin." ".$donnee->Date."</td></tr>";
                     $cnt++;
        
        }
         
                      echo"</table>";
      echo "</td>";
      echo'</tr>';
      }
           
      
    ?>

        
      
    </tbody>
</table>


