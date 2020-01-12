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
        $this->Cell(276,5,'Liste des locaux',0,0,'C');
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
      function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'IdLocal',1,0,'C');
        $this->Cell(40,10,'NomLocal',1,0,'C');
        $this->Cell(40,10,'TypeLocal',1,0,'C');
        $this->Cell(40,10,'Effectif',1,0,'C');
        $this->Cell(40,10,'Etage',1,0,'C');
        $this->Ln();
      }
      function viewTable($conn)
      {
        $this->SetFont('Times','',12);
        $stmt=$conn->query('SELECT * from local');
        while ($data=$stmt->fetch(PDO::FETCH_OBJ)) {
          # code...
          $this->Cell(20,10,$data->IdLocal,1,0,'C');
        $this->Cell(40,10,$data->NomLocal,1,0,'C');
        $this->Cell(40,10,$data->TypeLocal,1,0,'C');
        $this->Cell(40,10,$data->Effectif ,1,0,'C');
        $this->Cell(40,10,$data->Etage ,1,0,'C');
        $this->Ln();
        }
      }
    }
    $pdf= new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headerTable();
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
      <style type="text/css">
        #monscript2{display: none;}
      </style>
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
      <span class="logo-mini"><b>EST</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ESTA</b></span>
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
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
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
                <<p><?php echo $nom." ".$prenom; ?></p>
                <p><?php echo $travailPers." de  ".$filiere; ?></p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <form action="deconnexion.php" method="post"><button   type="submit" value="deconnexion" name="deconnecter" class="btn btn-default" " >DECONNEXION</button></form>
                </div>
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
        <li ><a href="ReserverSalle.php"><i class="fa fa-link"></i> <span>Reserver Local</span></a></li>
        <li><a href="GestionReservation.php"><i class="fa fa-link"></i> <span>Gestion Reservation</span></a></li>
        <li class="active"><a href="GestionSalles.php"><i class="fa fa-link"></i> <span>Gestion Locaux</span></a></li>
        <li >
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
    <section class="content-header">
       
      
    </section>

    <section class="content container-fluid">
     <div class="box" style="background-color: #EDEEEE">
      <div class="box-header" style="background-color: #EDEEEE;margin-left: 5%" >
         <div class="col-lg-3 col-xs-6" style="height: 30%;width:30%">
          <!-- small box -->
          <?php  
      $query1="SELECT count(IdLocal) from local";
      $stmtament1 = $conn->prepare($query1);
      $stmtament1->execute();
      $ligne1=$stmtament1->fetch(PDO::FETCH_BOTH);
      $locals=$ligne1['count(IdLocal)'];


      $query2="SELECT count(IdReservation) from reservations";
      $stmtament2 = $conn->prepare($query2);
      $stmtament2->execute();
      $ligne2=$stmtament2->fetch(PDO::FETCH_BOTH);
      $reservations=$ligne2['count(IdReservation)'];


      $query3="SELECT count(Idcreneu) FROM creneu WHERE NomProf is null and DayName(Date)!='Sunday'";
      $stmtament3 = $conn->prepare($query3);
      $stmtament3->execute();
      $ligne3=$stmtament3->fetch(PDO::FETCH_BOTH);
      $disponible=$ligne3['count(Idcreneu)'];



          ?>
          <div class="small-box bg-blue" >
            <div class="inner">
              <h3><?php echo $locals; ?></sup></h3>

              <p>Locaux</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="image/classroom_management_506721.png" width="30%" style="margin-left: 60%"></i>

            </div>

            <br>
            <a href="GestionSalles.php" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6" style="height: 30%;width:30%">
          <!-- small box -->
          <div class="small-box bg-red" >
            <div class="inner">
              <h3><?php echo $reservations; ?></h3>

              <p>Reservations</p>
            </div>
            <div class="icon">
              <i class="ion "><img src="image/reservation.png" width="35%" style="margin-left: 60%"></i>
            </div>
            <br>
            <a href="ReserverSalle.php" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
            
          </div>
        </div>
        <div class="col-lg-3 col-xs-6" style="height: 30%;width:30%">
          <!-- small box -->
          <div class="small-box" style="background-color: #928C8E">
            <div class="inner">
              <h3><?php echo $disponible; ?></h3>

              <p>Réservations disponible</p>
            </div>
            <div class="icon">
              <i class="ion "><img src="image/017-512.png" width="35%" style="margin-left: 60%"></i>
            </div>
            <br>
            <a href="ReserverSalle.php" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
               
            </div>
            <div class="box-body ">
              <div class="panel panel-warning " style="bac: #770c33;">
                <div class ="panel-heading" style="background-color: #3F81CD;color: white"><strong>Rechercher des salles</strong>  </div>
                 <br><br><div class="panel-body">
                  <form method="post" action="" class="form-inline">
                      <div class ="form-group"> 
                        <label style="margin-left: 55px">Chercher par :</label>
                      <select type="text" class="form-control" value="cher" name="select" >
                      <option value="blank"> choisir</option>
                      <option   value="type"> Type</option>
                      <option  value="nom" > Nom</option>
                      </select>
                      </div>
                      <div class ="form-group">
                        <input class ="form-control" placeholder="Rechercher" name="mot">
                        <button onclick="affichageDiv();" type="submit" value="Rechercher" name="Rechercher" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                           
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal-default" style="margin-left: 680px;background-color: #2198D2;color: #FFFFFF"><span class="glyphicon glyphicon-download-alt"> </span>
                         Ajouter 
                        </button>
<br>
                      </div>
                        <script type="text/javascript">  function myFunction() {
    window.print();
}</script>
                       
         </div><br>
          <div id="monselect1">
<?php  
 $connect = mysqli_connect("localhost", "root", "root123", "gestionlocal");  
 $query = "SELECT * FROM local";  
 $result = mysqli_query($connect, $query);  
 ?>  
                <div class="table-wrap ex1">
                     <table class="table table-bordered table table-striped" style="width: 95%;margin-left: 5%">  
                          <tr>  
                 <th class="text-center">Nom de salle</th>
                  <th class="text-center">Type</th>
                  <th class="text-center">Effectif</th>
                  <th class="text-center">Etage</th>
                  <th class="text-center">Actions</th>
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               
                  <td class="text-center"> <?php echo $row['NomLocal']?> </td>
                  <td class="text-center"> <?php echo $row['TypeLocal']?> </td>
                  <td class="text-center"> <?php echo $row['Effectif']?> </td>
                  <td class="text-center"> <?php echo $row['Etage']?> </td>
                               <td style="width: 15%"><button type="button" name="view"  id="<?php echo $row["IdLocal"]; ?>" class="btn btn-default view_data " ><span class="glyphicon glyphicon-edit"></span></button>
                                <a type="button"   class="btn btn-danger" 
                  onclick="return confirm('etes vous sure de supprimer ce local !') "
                   href="suppLocal.php?IdLocal=<?php echo($row['IdLocal'])?>" >
                    <span class="glyphicon glyphicon-trash"></span></a></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> <br>
                   </div>
                     <button type="submit" target="_blank" class="btn btn-default pull-right" name="pdf" style="margin-top: 1%" ><i class="fa fa-print"></i></buttton>
                </div>
 <div id="monselect2">
  
                           <script>
            
                     function affichageDiv() 
                  {
                    var id = "monselect2";
                    var objet = document.getElementById("monselect1");
                    objet.style.display='none';
                    document.getElementById("monselect2").style.display='inline';

                       document.getElementById('Rechercher').addEventListener('click', affichageDiv());
                    
                  }
               
                  
                </script>
                <style type="text/css">
                  div.ex1{
  height: 300px;
  overflow-y: scroll;
                </style>
                
                 <?php
                       
 include('connexion.php');
if(isset($_POST['Rechercher']))
{
  echo '<style type="text/css">
            #monselect2{
              display:inline;
            }
            #monselect1{
              display:none;
            }
  
          </style>';
          echo '<div class="table-wrap ex1">';
          echo"<table id=\"example1\" class=\"table table-bordered table table-striped\">
               <thead>
                          <tr  >
                            <th class=\"text-center\">Les locaux</th>
                            <th class=\"text-center\">Nom de salle</th>
                            <th class=\"text-center\">Type</th>
                            <th class=\"text-center\">Effectif</th>
                            <th class=\"text-center\">Etage</th>
                            <th class=\"text-center\">Actions</th>
                          </tr>
                          </thead>
                          <tbody>";
  $str=$_POST['mot'];
  $select=$_POST['select'];
  if($select=='nom'){
  $query=$conn->query("SELECT * FROM local where NomLocal LIKE '%".$str."%' ");  
                   while($row=$query->fetch()){

                  echo "<tr class=\"text-center\"><td>".$row['IdLocal']."</td>";
                   echo "<td>".$row['NomLocal']."</td>";
                  echo "<td>".$row['TypeLocal']."</td>";
                   echo "<td>".$row['Effectif']."</td>";
                   echo "<td>".$row['Etage']."</td>";
                  echo'<td>
                                    <a class=" btn btn-default" href="EditerSalle.php"><span class="glyphicon glyphicon-edit"></span></a></form>
                                    <button  type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" >
                  
                                      <span class="glyphicon glyphicon-trash"></span></button>
                                   </td></tr>';
                   
                 }}



                   if($select=='type'){
  $query=$conn->query("SELECT * FROM local where TypeLocal LIKE '%".$str."%' ");  
                   while($row=$query->fetch()){

                  echo "<tr class=\"text-center\"><td>".$row['IdLocal']."</td>";
                   echo "<td>".$row['NomLocal']."</td>";
                  echo "<td>".$row['TypeLocal']."</td>";
                   echo "<td>".$row['Effectif']."</td>";
                   echo "<td>".$row['Etage']."</td>";
                  echo'<td>
                                    <a class=" btn btn-default" href="EditerSalle.php"><span class="glyphicon glyphicon-edit"></span></a></form>
                                    <button  type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" >
                  
                                      <span class="glyphicon glyphicon-trash"></span></button>
                                   </td></tr>';
                   
                 }}


}
?>

</table>
</div>
</div>

                  </form>
                 </div>
              </div>
            </div>


      <!--------------------------
        | Your Page Content Here |
        -------------------------->

                 

                 

    </section>
                  
                  



    </div>
              <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title titleStyle" >Modifier les informations d'un locale</h4>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid" style="margin-left: 5%;margin-right: 5%;width: 90%">
        <div style="background-color: #FFFFFF;height: 500px">
        <form>
    <div class="form-group inputStyle ">
  
      <label for="inputPassword4" class="labelStyle">Nom de local</label>
      <hr style="margin-top: 1%;background: #F5F5DC">
      <input type="text" class="form-control" id="inputPassword4" placeholder="Nom de local" name="NomLocal
      ">
    </div>
    <div class="form-group inputStyle">
      <label for="inputState" class="labelStyle">Type</label>
      <select id="inputState" class="form-control" name="TypeLocal">
        <option selected>Choisir...</option>
        <option>Cours</option>
        <option>TP</option>
        <option>TD</option>
      </select>
    </div>

    <div class="form-group inputStyle">
      <label for="inputCity" class="labelStyle">Effectif</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Effectif" style="border-radius: 5px" name="Effectif">
    </div>
    <div class="form-group inputStyle">
      <label for="inputState" class="labelStyle">Etage</label>
      <select id="inputState" class="form-control" name="Etage">
        <option selected>Choisir...</option>
        <option>Rez de chaussé</option>
        <option>1ere étage</option>
        <option>2ere étage</option>
      </select>
    </div>
    <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"> Modifier</span></button>
              </div>
</form>
</div>
</section>
</div>
</div>
</div>
</div>
        <!-- /.content -->
        
          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#3F81CD;color: #FFFFFF;text-align: center; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title titleStyle" ><strong>Ajouter un nouveau local</strong></h4>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid" style="margin-left: 5%;margin-right: 5%;width: 90%">
        <form action="fatiAjouterLocal.php" method="post">
        <div style="background-color: #FFFFFF;height: 500px">

        
    <div class="form-group inputStyle ">
      <label for="inputPassword4" class="labelStyle">Nom de local</label>
      <hr style="margin-top: 1%;background: #F5F5DC">
      <input type="text" class="form-control" id="inputPassword4" placeholder="Nom de local" name="NomLocal">
    </div>
    <div class="form-group inputStyle">
      <label for="inputState" class="labelStyle">Type</label>
      <select id="inputState" class="form-control" name="TypeLocal">
        <option selected>Choisir...</option>
        <option>Cours</option>
        <option>TP</option>
        <option>TD</option>
      </select>
    </div>

    <div class="form-group inputStyle">
      <label for="inputCity" class="labelStyle">Effectif</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Effectif" style="border-radius: 5px" name="Effectif">
    </div>
    <div class="form-group inputStyle">
      <label for="inputState" class="labelStyle">Etage</label>
      <select id="inputState" class="form-control" name="Etage">
        <option selected>Choisir...</option>
        <option>Rez de chaussé</option>
        <option>1ere étage</option>
        <option>2ere étage</option>
      </select>
    </div>
    <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                <button type="submit" name="Ajouter" class="btn btn-info"><span class="glyphicon glyphicon-download-alt" > Ajouter</span></button>
              </div>

</div>
</form>
</div>
</div>
</div>
</div>

<!-- Modal pour la confirmation du suppression -->
<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog" >
            <div class="modal-content">
              <form>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Voulez-vous vraiment supprimer cette salle &hellip;?</h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-outline" name="Supprimer">Supprimer</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</div>       

  <!-- Main Footer -->


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
 <form action="EditPassword.php" method="post"><button   type="submit" value="password" name="password" class="btn btn-default"  >Modifier mot de passe</button></form>
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
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>
<?php
 include('connexion.php');
  if(isset($_POST['NomLocal']) and isset($_POST['TypeLocal']) and isset($_POST['Effectif']) and isset($_POST['Etage']))
 { $NomLocal=$_POST['NomLocal'];
   $TypeLocal=$_POST['TypeLocal'];
   $Effectif=$_POST['Effectif'];
   $Etage=$_POST['Etage'];}
if(isset($_POST['Ajouter']))
{
  
$insertmsg = $conn->prepare('INSERT INTO local(NomLocal,typeLocal,Effectif,Etage) VALUES(?,?,?,?)');
$insertmsg->execute(array($NomLocal,$TypeLocal,$Effectif,$Etage)); 
}
?>
 
                 
          
                
                 


 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
            <form action="EditLocal.php" method="post">
              <div class="modal-header" style="background-color:#3F81CD ">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title" style="color: #FFFFFF;text-align: center;">Modifier Local</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer"> 
                <button type="submit" class="btn btn-info" name="ModifierReservation">Modifier</button>  
                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>  
                </div>
              </form>
                  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var IdLocal = $(this).attr("id");  
           $.ajax({  
                url:"selectlocal.php",  
                method:"post",  
                data:{IdLocal:IdLocal},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>