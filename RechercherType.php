
 
        
   
    <?php 
    include('connexion.php');
     ?>
<style type="text/css">
  

  .table-scroll {
  position:relative;
  max-width:100%;
  margin:auto;
  overflow:hidden;
  border:1px solid #000;
}
.table-wrap {
  width:100%;
  overflow:auto;
}
.table-scroll table {
  width:100%;
  margin:auto;
  border-collapse:separate;
  border-spacing:0;
}
.table-scroll th, .table-scroll td {
  padding:5px 10px;
  border:1px solid #000;
  background:#fff;
  white-space:nowrap;
  vertical-align:top;
}
.table-scroll thead, .table-scroll tfoot {
  background:#f9f9f9;
}
.clone {
  position:absolute;
  top:0;
  left:0;
  pointer-events:none;
}
.clone th, .clone td {
  visibility:hidden
}
.clone td, .clone th {
  border-color:transparent
}
.clone tbody th {
  visibility:visible;
  color:red;
}
.clone .fixed-side {
  border:1px solid #000;
  background:#eee;
  visibility:visible;
}
.clone thead, .clone tfoot{background:transparent;}
.table-scroll {
    width: 100%;
    display:block;
}
div.ex1{
  height: 800px;
  overflow-y: scroll;


}

</style>


<script type="text/javascript">
  
  // requires jquery library
jQuery(document).ready(function() {
   jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');   
 });


</script>






<div id="table-scroll" class="table-scroll">
  <div class="table-wrap ex1">
    <table class="main-table table-bordered table table-striped">
      <thead>
        <tr>
          <th  >Salles/Jours</th>
                  <?php 
                  date_default_timezone_set ('Europe/paris' );
                 $dateauj=date('l');
                  $queryDate=$conn->query("SELECT Date FROM creneu GROUP BY Date");
                   
                   while ($line9=$queryDate->fetch()) {
                    $timestamp = strtotime($line9['Date']);
                    $day = date('l', $timestamp);
                    if ($day!='Sunday') {
                      echo"<th style='color:#08174C;'>".$day." le ".$line9['Date']."</th>";
                    }
                    
                  } 
                    $query2=$conn->query("SELECT Date FROM creneu GROUP BY Date");
                    $nombre=0;
                    while ($line=$query2->fetch()) {
                      $timestamp = strtotime($line9['Date']);
                    $day = date('l', $timestamp);
                    if ($day!='Sunday') {
                      $nombre++;
                    }
                      
                    }
                     $queryLocal=$conn->query("SELECT * FROM local where TypeLocal LIKE '%".$str."%' ");
                    $lineLocal=$queryLocal->fetchAll();

                  ?>
        </tr>
      </thead>
      <tbody>
         <?php 
  
                foreach ($lineLocal as $row) { 
                  $l= $row['IdLocal'];
                  echo'</tr>';
                echo"<tr>";echo"<td style='color:#08174C;;font-size:30px'>".$row['NomLocal']."</td>";
                for ($k=1; $k <=$nombre ; $k++) { 
                echo"<td><table class='table table-bordered table table-striped'>";
                
                  $var = ($k*6)-6;
                  $query3=$conn->query("SELECT * FROM creneu WHERE IdLocal=$l and  DayName(Date)!='Sunday' Order By IdCreneu,Date limit $var,6");
                  while ($local2=$query3->fetch()) {
                    $timestamp = strtotime($local2['Date']);
                    $day = date('l', $timestamp);
                    if ($day=='Sunday') {
                       continue;
                    }
                    else{
                      if ($local2['NomProf']!=NULL) {
                       echo"<tr><td style='background:#D1DADC'>".$local2['NomProf']." ".$local2['Filiere']." ".$local2['Matiere']."</td></tr>";
                    }
                    else{
                       echo"<tr><td>".$local2['TimeDebut']." - ".$local2['TimeFin']."</td></tr>";
                    }
                    }
                   
                  } 
                
                
                echo "</table></td>";
                }
                echo"</tr>";
                }

                ?>
      </tbody>
    </table>
  </div>
</div>
