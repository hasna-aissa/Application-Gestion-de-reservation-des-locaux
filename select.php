
 <style type="text/css">
        #monscript2{display: none;}
      </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EST AGADIR</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link href="boots/css/addons/datatables.min.css" rel="stylesheet">
  <script type="boots/text/javascript" src="js/addons/datatables.min.js"></script>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
<?php  
 if(isset($_POST["IdReservation"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "root123", "gestionlocal");  
      $query = "SELECT * FROM reservations r,local l,personnels p WHERE r.IdLocal=l.IdLocal AND r.IdProf=p.IdPers AND IdReservation = '".$_POST["IdReservation"]."'";  
      $result = mysqli_query($connect, $query);  
      
      while($row = mysqli_fetch_array($result))  
      {  
        
            echo "
                <input type='hidden' name='dateD'  value=".$row['DateDebut'].">
                 <input type='hidden' name='dateF' value=".$row['DateFin'].">
                 <input type='hidden' name='timeD' value=".$row['TimeDebut'].">
                 <input type='hidden' name='timeF' value=".$row['TimeFin'].">";
                     echo '<input type="hidden" class="form-control" name="idReserve" value='.$row['IdReservation'].'> <div class="row"><div class="col-xs-6">
                  <label  class="labelStyle">Nom de local</label><input type="text"  class="form-control"  name="nomlocal" id="inputlogin" value='.$row['NomLocal'].'> </div><div class="col-xs-6">
                  <label  class="labelStyle">Nom de professeur</label><input type="text"  class="form-control"  name="nomPers" id="inputlogin" value='.$row['NomPers'].'> </div></div>
                   <div class="row"><div class="col-xs-6"><label  class="labelStyle">Heure debut</label><input type="text"  class="form-control"  name="timedebut" id="inputlogin" value='.$row['TimeDebut'].'></div>
                  <div class="col-xs-6"><label  class="labelStyle">Heure fin</label><input type="text"  class="form-control"  name="timefin" id="inputlogin" value='.$row['TimeFin'].'></div></div>

                   <div class="row"><div class="col-xs-6"><label  class="labelStyle">Filiere</label><input type="text"  class="form-control"  name="filiere" id="inputlogin" value='.$row['Filiere'].'></div>
                  <div class="col-xs-6"><label  class="labelStyle"> Niveau</label><input type="text" class="form-control"   name="niveau" id="inputlogin" value='.$row['Niveau'].'></div></div>
                   <div class="row"><div class="col-xs-6"><label  class="labelStyle">Groupe/section</label><input type="text"  class="form-control"  name="grp" id="inputlogin" value='.$row['Grp_Sect'].'></div>
                  <div class="col-xs-6"><label  class="labelStyle">Matiere</label><input type="text" class="form-control"   name="matiere" id="inputlogin" value='.$row['Matiere'].'></div></div>
                   <div class="row">
                   <div class="col-xs-6"><label  class="labelStyle">Date debut</label><input type="text" class="form-control"   name="datedebut" id="inputlogin" value='.$row['DateDebut'].'></div>
                   <div class="col-xs-6"><label  class="labelStyle">Date Fin</label><input type="text" class="form-control"   name="datefin" id="inputlogin" value='.$row['DateFin'].'><br></div></div>';
                
      }  
        
 }  
 ?>
