

<?php include('connexion.php'); 
session_start();
$requete=$conn->query("SELECT * FROM personnels  WHERE IdPers='".$_SESSION['IdPers']."'")->fetch();
$nom= $requete['NomPers'];
$prenom= $requete['PrenomPers'];
$travailPers= $requete['TravailPers'];
$filiere=$requete['Filiere'];
?>
<?php
 require('fpdf.php');
if (isset($_POST['pdf'])) {
/*ob_start();
   
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hello World!');
    $pdf->Output();
    ob_end_flush();*/
    class myPDF extends FPDF{
      function header()
      {
        $this->Image('logo.png',10,6);
        $this->SetFont('Arial','B',14);

        $this->Cell(276,5,'Liste des reservations',0,0,'C');
        $this->Ln();

        $this->SetFont('Times','',12);
        $this->Ln(20);
        $this->Ln(20);
      }
      function footer()
      {
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page'.$this->PageNo().'{nb}',0,0,'C');
      }
      function headerTable($conn){
        $this->SetFont('Times','B',12);
        $this->Cell(35,10,'Jours/reservation',0,0,'C');
        $queryDate=$conn->query("SELECT Date FROM creneu GROUP BY Date");
                   
                   while ($line9=$queryDate->fetch(PDO::FETCH_OBJ)) {
                    $timestamp = strtotime($line9->Date);
                    $day = date('l', $timestamp);
                    $this->Cell(20,10,$line9->Date,1,0,'C');
                  } 
      
      
        $this->Ln();
      }
      function viewTable($conn)
      {
        $this->SetFont('Times','',12);
        $query2=$conn->query("SELECT Date FROM creneu GROUP BY Date");
                    $nombre=0;
                    while ($line=$query2->fetch()) {
                      $nombre++;
                    }
                    $queryLocal=$conn->query("SELECT * FROM local ");
                    $lineLocal=$queryLocal->fetchAll();



 foreach ($lineLocal as $row) { 
                  $l= $row['IdLocal'];

                  
                
                $this->Cell(20,10,$row['NomLocal'],1,0,'C');
                for ($k=1; $k <=$nombre ; $k++) { 
                
                
                  $var = ($k*6)-6;
                  $query3=$conn->query("SELECT * FROM creneu WHERE IdLocal=$l Order By IdCreneu,Date limit $var,6");
                  while ($local2=$query3->fetch()) {
                    if ($local2['NomProf']!=NULL) {
                       $this->Cell(20,10,$local2['NomProf'],1,0,'C');

                       //echo"<tr><td style='background:red'>".$local2['NomProf']." ".$local2['Filiere']." ".$local2['Matiere']."</td></tr>";
                    }
                    else{
                      $this->Cell(20,10,$local2['TimeDebut'],1,0,'C');
                       //echo"<tr><td>".$local2['TimeDebut']." - ".$local2['TimeFin']."</td></tr>";
                    }
                   
                  } 
                
                
             
                }




      
      }
    }
    }
    $pdf= new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headerTable($conn);
    $pdf->viewTable($conn);
    $pdf->Output();

}
?>
<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EST | AGADIR</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
 <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>ST</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>EST</b>A</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <span  class="img-circle " alt="User Image" style="color: white"><img src="image/login.png" width="25px" height="25px"></span>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $nom." ".$prenom; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <span  class="img-circle " alt="User Image" style="color: white"><img src="image/login.png" width="60px" height="60px"></span>
<p><?php echo $nom." ".$prenom; ?></p>
                <p><?php echo $travailPers." de  ".$filiere; ?></p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                  <form action="deconnexion.php" method="post"><button   type="submit" value="deconnexion" name="deconnecter" class="btn btn-default" >DECONNEXION</button></form>
                  
                  
              </li>
            </ul>
          </li>
         <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <span  class="img-circle " alt="User Image" style="color: white"><img src="image/login.png" width="40px" height="40px"></span>
        </div>
        <div class="pull-left info">
          <p><?php echo $nom." ".$prenom; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="ReserverSalle.php"><i class="fa fa-link"></i> <span>Reserver Local</span></a></li>
        <li><a href="GestionReservation.php"><i class="fa fa-link"></i> <span>Gestion Reservation</span></a></li>
        <li><a href="GestionSalles.php"><i class="fa fa-link"></i> <span>Gestion Locaux</span></a></li>
        <li>
          <a href="EmploiTemps.php"><i class="fa fa-link"></i> <span>Emploi du temps</span>
          </a>
          
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content container-fluid">
      <div >
    
        <div class="box-body " >
              <div class="panel panel-warning" >
                <div class ="panel-heading" style="background-color: #3F81CD;color: white"><strong style="font-size: 25px">Reserver un local</strong>  </div>
                 <div class="panel-body">
                  

      <form method="post" action="" class="form-inline">
          <div class ="form-group">
           Chercher par :
          <select type="text" class="form-control" value="cher" name="select" >
            <option value="blank"> choisir</option>
            <option   value="type"> Type</option>
            <option  value="nom" > Nom</option>
          </select>
            <input class ="form-control" placeholder="Rechercher" name="mot">

             <button  onclick="affichageDiv();" type="submit" value="Rechercher" name="Rechercher" class="btn btn-default" >
                <span class="glyphicon glyphicon-search"></span>   
              </button>
                <button type="button" class="btn btn-default " data-toggle="modal" data-target="#modal-default" style="margin-left: 1300px; background-color: #07B7BC;color: white;height: 40px"><strong>Reserver</strong> </button>
                     
               </div>
          
             
      </form>
              
         
          <div id="monselect1">
              
                </div>

                
           
      <?php 

                       
 include('connexion.php');
if(isset($_POST['Rechercher']))
{
  echo '<style type="text/css">
   #reservation2{
              display:inline;
            }
            #reservation1{
              display:none;
            }
           
  
          </style>';

  $str=$_POST['mot'];
  $select=$_POST['select'];
  if($select=='nom'){

               include('Recherchertest.php');
                   
                 }


                   if($select=='type'){
 include('RechercherType.php');                   
                 }

 

}
    ?>
           
      </div>

       <div id="reservation1">
      <?php include'testAffichage.php'; ?>
       </div>
     
                 </div>
               </div>
        </div>


         <!-- /.Reserver local modal-->
      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#3F81CD;color: #FFFFFF;text-align: center; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title titleStyle" >Reserver local</h2>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid modalClass" >
        <div style="background-color: #FFFFFF;height: 500px">
        <form method="POST" action="ReserverLocal.php">
              
          <div class="row">
                <div class="col-xs-6">
                  <br><label  class="labelStyle">Nom de local</label>
                   <select id="inputState" class="form-control" name="Nom"> 
<?php
$query55 = "SELECT NomLocal FROM local";
    $data = $conn->prepare($query55);    // Prepare query for execution
    $data->execute();// Execute (run) the query

    while($row55=$data->fetch(PDO::FETCH_ASSOC)){
        echo '<option value="'.$row55['NomLocal'].'">'.$row55['NomLocal'].'</option>';
        //print_r($row); 
    }
?>
 </select>
              
                  
                </div><br>
                <div class="col-xs-6"><label  class="labelStyle">Nom de professeur</label>
                <select name="Professeur" id="inputState" class="form-control">
                  <?php
$query66 = "SELECT NomPers FROM personnels WHERE TravailPers='professeur'";
    $data1 = $conn->prepare($query66);    // Prepare query for execution
    $data1->execute();// Execute (run) the query

    while($row66=$data1->fetch(PDO::FETCH_ASSOC)){
        echo '<option value="'.$row66['NomPers'].'">'.$row66['NomPers'].'</option>';
        //print_r($row); 
    }
?>
                </select>
              
              </div></div>
            <div class="row">
              <div class="col-xs-6">
                <label for="inputState" class="labelStyle"  >Filiere</label>
                <select id="inputState" class="form-control"  name="Filiere">
                  <option selected>Choisir...</option>
                  <option>GI</option>
                  <option>GE</option>
                  <option>TM</option>
                  <option>TCC</option>
                  <option>GBI</option>
                </select>
                 </div>
                 <div class="col-xs-6">
                  <label  class="labelStyle">Sujet/Matiere</label>
                  <input type="text" class="form-control" value="" name="Sujet" required><br>
               </div>
            </div>
<div class="row">


                   <div class="col-xs-6">
                  <label for="inputState" class="labelStyle" >Groupe/section</label>
                <select id="inputState" class="form-control"  name="GrpSec">
                  <option selected>Choisir...</option>
                  <option>Cours</option>
                  <option>G1</option>
                  <option>G2</option>
                  <option>G3</option>
                  <option>G4</option>
                  <option>G5</option>
                  <option>G6</option>
                  <option>S1</option>
                  <option>S2</option>
                  <option>S3</option>
                  <option>S4</option>
                  <option>S5</option>
                </select>
              </div>
             
            <div class="col-xs-6">
                <label for="inputState" class="labelStyle"  >Niveau</label>
                <select id="inputState" class="form-control"  name="Niveau">
                  <option selected>Choisir...</option>
                  <option>1ere année</option>
                  <option>2eme année</option>
                  <option>Licence</option>
                </select>
                </div>
              
              </div>
<br>

              <div class="row">
                <div class="col-xs-6">
                  <br><label for="inputState"  class="labelStyle">Time Debut</label>
                    <select id="combo_nomoi" name="TimeDebut" class="form-control">
            <option value="08:00">08:00</option>
            <option value="09:45">09:45</option>
            <option value="11:30">11:30</option>
            <option value="14:00">14:00</option>
            <option value="15:45">15:45</option>
            <option value="17:30">17:30</option>
        </select>
                </div>
              
                <div class="col-xs-6">
                  <br><label for="inputState" class="labelStyle">Time Fin</label>
                   <select id="poleis" name="TimeFin" class="form-control">
                    <option > choisir...</option>
            <option id="option1" value="09:30">09:30</option>
            <option id="option2" value="11:15">11:15</option>
            <option id="option3" value="13:00">13:00</option>
            <option id="option4" value="15:30">15:30</option>
            <option id="option5" value="17:15">17:15</option>
            <option id="option6" value="19:00">19:00</option>
        </select>
                </div>
              </div>
        
<br>
<script type="text/javascript">
        document.getElementById("combo_nomoi").onchange = cityChange
function cityChange() {
   var elem = document.getElementById("combo_nomoi");
   if (elem.options[elem.selectedIndex].text == "08:00") {
      document.getElementById("option1").style.display = "inline";
      document.getElementById("option2").style.display = "inline";
      document.getElementById("option3").style.display = "inline";
      document.getElementById("option4").style.display = "none";
      document.getElementById("option5").style.display = "none";
      document.getElementById("option6").style.display = "none";
   }
   if (elem.options[elem.selectedIndex].text == "09:45") {
      document.getElementById("option1").style.display = "none";
      document.getElementById("option2").style.display = "inline";
      document.getElementById("option3").style.display = "inline";
        document.getElementById("option4").style.display = "none";
      document.getElementById("option5").style.display = "none";
      document.getElementById("option6").style.display = "none";
   }
      if (elem.options[elem.selectedIndex].text == "11:30") {
      document.getElementById("option1").style.display = "none";
      document.getElementById("option2").style.display = "none";
      document.getElementById("option3").style.display = "inline";
        document.getElementById("option4").style.display = "none";
      document.getElementById("option5").style.display = "none";
      document.getElementById("option6").style.display = "none";
   }
     if (elem.options[elem.selectedIndex].text == "14:00") {
      document.getElementById("option1").style.display = "none";
      document.getElementById("option2").style.display = "none";
      document.getElementById("option3").style.display = "none";
        document.getElementById("option4").style.display = "inline";
      document.getElementById("option5").style.display = "inline";
      document.getElementById("option6").style.display = "inline";
   }
     if (elem.options[elem.selectedIndex].text == "15:45") {
      document.getElementById("option1").style.display = "none";
      document.getElementById("option2").style.display = "none";
      document.getElementById("option3").style.display = "none";
        document.getElementById("option4").style.display = "none";
      document.getElementById("option5").style.display = "inline";
      document.getElementById("option6").style.display = "inline";
   }
     if (elem.options[elem.selectedIndex].text == "17:30") {
      document.getElementById("option1").style.display = "none";
      document.getElementById("option2").style.display = "none";
      document.getElementById("option3").style.display = "none";
        document.getElementById("option4").style.display = "none";
      document.getElementById("option5").style.display = "none";
      document.getElementById("option6").style.display = "inline";
   }
}
    </script>
<script type="text/javascript">
       function affichageDiv1() 
                  {
                    
                    document.getElementById("9_30").style.display='inline';
                    document.getElementById("11_15").style.display='inline';
                    document.getElementById("13").style.display='inline';
                    document.getElementById("15_30").style.display='none';
                    document.getElementById("17_15").style.display='none';
                    document.getElementById("19").style.display='none';
                    

                       document.getElementById('8').addEventListener('click', affichageDiv1());
                    
                  }

</script>
              <div class="row">
                <div class="col-xs-6">
                  <label  class="labelStyle">Date Debut</label>
                  <input type="Date" class="form-control" value="" placeholder="" name="DateDebut">
                </div>

                <div class="col-xs-6">
                  <label  class="labelStyle">Date Fin</label>
                  <input type="Date" class="form-control" value="" name="DateFin">
                </div>
              </div>
         <br><br>     
  <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="width: 100px;height: 50px;">Fermer</button>
      <button type="submit" class="btn btn_reserve" name="Reserver" style="width: 100px;height: 50px;background-color: #3F81CD;color: white;">Reserver</button>
  </div>
</form>
</div>
</section>
</div>
</div>
</div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <p>Changer le mot de passe d'accés au votre compte.</p>
        
        <!-- /.control-sidebar-menu -->
 <form action="EditPassword.php" method="post"><button   type="submit" value="password" name="password" class="btn btn-default">Modifier mot de passe</button></form>
                  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                   <br> <br> <br> <br> <br> <br> <br> <br>
                    <br> <br> <br> <br> <br> <br> <br> <br>
                     <br> <br> <br> <br> <br>

        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <p>Faire une mise à jour pour commencer les reservations d'une nouvelle semestre.</p>
          <form method="post" action="MiseAjour.php">
                    <input type="submit" name="mise_ajour" value="mise à jour" class="btn btn-danger">
                  </form>
                  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                   <br> <br> <br> <br> <br> <br> <br> <br>
                    <br> <br> <br> <br> <br> <br> <br> <br>
                     <br> <br> <br> <br> <br>

      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>


</html>


<?php
/*<form action="" method="post">
<input type="submit" name="test" value="test">
</form>  if(isset($_POST['test']))
 { 1
 $reponse3 = $conn->query("SELECT * from creneu into outfile testFile.txt")->fetchAll(); 
   }
 echo $count;*/ 
if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==5) {
      echo "<script language=\"JavaScript\"> alert(\" Ce local est réservé veuillez choisir une autre date \")</script>";
    }
}
$count=0;
if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==30) {
      echo "<script language=\"JavaScript\"> alert(\"L'heure fin est inférieur à l'heure de début ! \")</script>";
      header("Location:ReserverSalle.php");
    }
}

if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==60) {
      echo "<script language=\"JavaScript\"> alert(\"Veuillez choisir des dates à partir d'aujourd'hui\")</script>";
      header("Location:ReserverSalle.php");
    }
}


if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==61) {
      echo "<script language=\"JavaScript\"> alert(\"Veuillez choisir des interval du temps à partir de temps courant\")</script>";
      header("Location:ReserverSalle.php");
    }
}

if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==65) {
      echo "<script language=\"JavaScript\"> alert(\"Les reservation pour le dimanche sont pas autorisés\")</script>";
      header("Location:ReserverSalle.php");
    }
}
if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==100) {
      echo "<script language=\"JavaScript\"> alert(\"Ce groupe ou section a déja une seance dans cette intervalle\")</script>";
      header("Location:ReserverSalle.php");
    }
}
if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==101) {
      echo "<script language=\"JavaScript\"> alert(\"Ce groupe ou section a déja une seance de cours de cette Matiere\")</script>";
      header("Location:ReserverSalle.php");
    }
}

 ?>

 