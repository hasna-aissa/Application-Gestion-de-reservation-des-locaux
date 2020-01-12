
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
 if(isset($_POST["IdLocal"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "root123", "gestionlocal");  
      $query = "SELECT * FROM local WHERE IdLocal = '".$_POST["IdLocal"]."'";  
      $result = mysqli_query($connect, $query);  
      
      while($row = mysqli_fetch_array($result))  
      {  
                     echo '<input type="hidden" class="form-control" name="idlocal" value='.$row['IdLocal'].'> <div class="row"><div class="col-xs-6">
                  <label  class="labelStyle">Nom de local</label><input type="text"  class="form-control"  name="nomlocal" id="inputlogin" value='.$row['NomLocal'].'> </div><div class="col-xs-6">
                  <label  class="labelStyle">Type local</label><input type="text"  class="form-control"  name="type" id="inputlogin" value='.$row['TypeLocal'].'> </div></div>
                   <div class="row"><div class="col-xs-6"><label  class="labelStyle">Effectif</label><input type="text"  class="form-control"  name="effectif" id="inputlogin" value='.$row['Effectif'].'></div>
                  <div class="col-xs-6"><label  class="labelStyle">Etage</label><input type="text"  class="form-control"  name="etage" id="inputlogin" value='.$row['Etage'].'></div></div>';
                
      }  
        
 }  
 ?>
