<?php include('connexion.php'); 
session_start();

$requete=$conn->query("SELECT * FROM personnels  WHERE IdPers='".$_SESSION['IdPers']."'")->fetch();
$nom= $requete['NomPers'];
$prenom= $requete['PrenomPers'];
$travailPers= $requete['TravailPers'];
$filiere=$requete['Filiere'];

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
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
<style type="text/css">
  #divstarter:hover { 
  background-color: #C1ADD8;
}
#divstarter{font-weight: bold;}
#inputlogin{border: none;outline: none;background-color: transparent;border-bottom: 1px solid  #331A52;}
#modal_dialog{width: 35%;margin-top: 12%;background: transparent;border-radius: 20px;margin-left: 43%}
#modal_title{color: #331A52;font-weight: bold;font-size: 30px;text-align: center;}
#btn_connecter{width: 100%;background-color: #331A52;color: #FFFFFF}
#create_account{color: #331A52;margin-left: 40%}
#forget_password{color: #B2ACBA;}
#modal_content{background-color: #FFFFFF;border-radius: 10px}
#name ,#email ,#password ,#password-confirm{width: 170%}
#btn_inscrire{background-color: #331A52;color: #FFFFFF;width: 100%}
#login{width: 40%;margin-left: 30%;margin-top: 10%;background-color: #FFFFFF;border-radius: 10px}
#miseajour{width: 100%;color: #FFFFFF}
#dateDebut,#DateFin{width: 380px; }

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
                <span  class="img-circle " alt="User Image" style="color: white"><img src="image/login.png" width="40px" height="60px">
                </span>
                <p><?php echo $nom." ".$prenom; ?></p>
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
        <li class="active"><a href="ReserverSalle.php"><i class="fa fa-link"></i> <span>Reserver Local</span></a></li>
        <li><a href="GestionReservation.php"><i class="fa fa-link"></i> <span>Gestion Reservation</span></a></li>
        <li><a href="GestionSalles.php"><i class="fa fa-link"></i> <span>Gestion Locaux</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Emploi du temps</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="GI.php">GI</a></li>
            <li><a href="GE.php">GE</a></li>
            <li><a href="TM.php">TM</a></li>
            <li><a href="TCC.php">TCC</a></li>
            <li><a href="GBI.php">GBI</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('image/grey.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="content container-fluid">
     
                <div class="modal-content" id="login">
              <div class="modal-header" style="background-color:#3F81CD;color: #FFFFFF;text-align: center; ">
                <h2 class="modal-title titleStyle"  style="color: #FFFFFF;font-weight: bold;font-size: 20px;text-align: center;" >Mise à jour les reservations</h2>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid modalClass" >
        <div>
        <form method="POST" action="MisePhp.php">
          <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label >Date debut sesmestre</label>
            </div>
        <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="date" name="dateDebut" class="form-control" id="dateDebut" value="" required>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
              <div class="col-md-3 field-label-responsive">
                <label >Date fin sesmestre</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="date" name="dateFin" class="form-control" id="DateFin" required>
                    </div>
                </div>
            </div>
            </div>
            <!--<button type="button" class="btn btn-default " data-toggle="modal" data-target="#modal-default" ><strong>Reserver</strong> </button>-->
      <button type="submit" class="btn btn_reserve" name="mise_ajour" id="miseajour" style="background-color:#3F81CD;">Mise à jour</button><br>
       
          
        </form>
</div>
</section>
</div>
</div>

</section>
</div>       
</body>
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
        
        <!-- /.control-sidebar-menu -->
<p>Changer le mot de passe d'accés au votre compte.</p>
 <form action="EditPassword.php" method="post"><button  type="submit" value="password" name="password" class="btn btn-default"  >Modifier mot de passe</button></form>
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



if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==80) {
      echo "<script language=\"JavaScript\"> alert(\"l'ancien mot de passe est incorrect\")</script>";
      
    }
}


if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==81) {
      echo "<script language=\"JavaScript\"> alert(\"les mots nouveaux mots de passe ne sont pas identiques\")</script>";
    }
}

if (isset($_GET['erreur'])) {
    if ($_GET['erreur']==82) {
      echo "<script language=\"JavaScript\"> alert(\"Mot de passe modifié\")</script>";
    }
}



  ?>

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
              <script type="text/javascript">
                var p=document.getElementById('dateDebut').InnerHTML;
                document.write("<p>dkl"+"fghn"+p+"</p>");
              </script>
          
  
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