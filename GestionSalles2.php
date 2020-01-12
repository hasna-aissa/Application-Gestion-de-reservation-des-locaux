<?php include('connexion.php'); ?>
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



  <!-- ************************* fatima-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <!-- **************************** fatima -->



  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
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
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Les salles
        <small>description des salles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content container-fluid">
     <div class="box">
      <div class="box-header">
              <h3 class="box-title">les informations des salles de l'école supérieur de technologie d'Agadir</h3>    
            </div>
            <div class="box-body ">
              <div class="panel panel-warning ">
                <div class ="panel-heading"> Rechercher des salles  </div>
                 <div class="panel-body">
                  <form method="post" action="" class="form-inline">
                      <div class ="form-group"> Chercher par :
                      <select type="text" class="form-control" value="cher" name="cher" >
                      <option value="blank"> choisir</option>
                      <option name="type"  value="type"> Type</option>
                      <option name="nom" value="nom" > Nom</option>
                      </select>
                      </div>
                      <div class ="form-group">
                        <input class ="form-control" placeholder="rechercher" name="mot">
                        <button type="submit" value="Rechercher" name="Rechercher" class="btn btn-warning" >
                        <span class="glyphicon glyphicon-search"></span>
                        Chercher
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default"><span class="glyphicon glyphicon-download-alt"> </span>
                        Ajouter
                        </button>
                      </div>
                  </form>
                 </div>
              </div>
            </div>


      <!--------------------------
        | Your Page Content Here |
        -------------------------->
                  <a href="invoice.php" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Imprimer</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i>  PDF
          </button>
              <table id="example1" class="table table-bordered table table-striped">
                <form>
                <thead>
                <tr  >
                  <th class="text-center">Les locaux</th>
                  <th class="text-center">Nom de salle</th>
                  <th class="text-center">Type</th>
                  <th class="text-center">Effectif</th>
                  <th class="text-center">Etage</th>
                  <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php $query=$conn->query("SELECT * FROM local ");  
                   while($row=$query->fetch()){?>

                  <tr class="text-center">
                  <td> <?php echo $row['IdLocal']?> </td>
                  <td> <?php echo $row['NomLocal']?> </td>
                  <td> <?php echo $row['TypeLocal']?> </td>
                  <td> <?php echo $row['Effectif']?> </td>
                  <td> <?php echo $row['Etage']?> </td>
                  <td>
                  
                  <a type="button"   class="btn btn-danger" 
                  onclick="return confirm('etes vous sure de supprimer ce local !') "
                   href="suppLocal.php?IdLocal=<?php echo($row['IdLocal'])?>" >
                    <span class="glyphicon glyphicon-trash"></span></a>
                  
                                    
                   
                  <a  href="modifier.php?IdLocal=<?php echo($row['IdLocal'])?>" type="button" class=" btn btn-success " >
                  <span class="glyphicon glyphicon-edit"></span></a>
                  
                 </td>
                 </tr>
                 <?php }?>
                 
               
             
                </tbody>
                </form>
              </table>

          </div>

    </section>
    </div>
      <?php
include('connexion.php');

if(isset($_POST['NomLocal'])AND isset($_POST['TypeLocal']) AND isset($_POST['Effectif']) AND isset($_POST['Etage']) AND !empty($_POST['NomLocal']) AND !empty($_POST['TypeLocal']) AND !empty($_POST['Effectif'] AND !empty($_POST['Etage']))
AND !empty($_POST['siteweb']))
{
  $nom=$_POST['NomLocal'];
  $type=$_POST['TypeLocal'];
  $eff=$_POST['Effectif'];
  $etage=$_POST['Etage'];
if(isset($_POST['Ajouter']))
{
$insertmsg = $conn->prepare('INSERT INTO local(NomLocal,TypeLocal,Effectif,Etage) VALUES(?,?,?,?)');
$insertmsg->execute(array($nom,$type,$eff,$etage)); 
}

}
?>
  
        <!-- /.content -->
          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title titleStyle" >Ajouter un nouveau local</h4>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid" style="margin-left: 5%;margin-right: 5%;width: 90%">
        <div style="background-color: #FFFFFF;height: 500px">
        <form action="AjouterLocal.php " method="POST">
    <div class="form-group inputStyle ">
      <label for="inputPassword4" class="labelStyle">Nom de local</label>
      <hr style="margin-top: 1%;background: #F5F5DC">
      <input type="text" class="form-control" id="inputPassword4" name ="NomLocal" placeholder="Nom de local">
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
      <input type="text" class="form-control" id="inputCity" name="Effectif" placeholder="Effectif" style="border-radius: 5px">
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
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-download-alt" name="Ajouter"> Ajouter</span></button>
              </div>
</form>
</div>
</section>
</div>
</div>
</div>
</div>
<!-- <div class="modal fade" id="Modifier">
          <div class="modal-dialog">
            <div class="modal-content">
            <form action="ModifierLocal.php" method="POST" id="updateForm">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title titleStyle" >Modifier les informations d'un local</h4>
              </div>
              <div class="modal-body"  id="update_details">
                <section class="content container-fluid" style="margin-left: 5%;margin-right: 5%;width: 90%">
        <div style="background-color: #FFFFFF;height: 500px">
       
    <div class="form-group inputStyle ">
      <label for="inputPassword4" class="labelStyle">Nom de local</label>
      <hr style="margin-top: 1%;background: #F5F5DC">
      <input type="text" class="form-control" id="NomLocal" placeholder="Nom de local" name="NomLocal">
    </div>
    <div class="form-group inputStyle">
      <label for="inputState" class="labelStyle">Type</label>
      <select id="TypeLocal" class="form-control" name="TypeLocal">
        <option selected>Choisir...</option>
        <option>Cours</option>
        <option>TP</option>
        <option>TD</option>
      </select>
    </div>

    <div class="form-group inputStyle">
      <label for="inputCity" class="labelStyle">Effectif</label>
      <input type="text" class="form-control" id="Effectif" placeholder="Effectif" style="border-radius: 5px" name="Effectif">
    </div>
    <div class="form-group inputStyle">
      <label for="inputState" class="labelStyle">Etage</label>
      <select id="Etage" class="form-control" name="Etage">
        <option selected>Choisir...</option>
        <option>Rez de chaussé</option>
        <option>1ere étage</option>
        <option>2ere étage</option>
      </select>
    </div>
    <input type="hidden" name="IdLocal" id="IdLocal" />  
    </form>
    <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" name="insert" id="insert" value="Insert">Fermer</button>
                <button type="submit"  value ="insert" name ="insert" id ="insert" class="btn btn-success"><span class="glyphicon glyphicon-pencil"> Modifier</span></button>
              </div>

</div>
</section>
</div>
</div>
</div>
</div> -->


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
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->


 <!-- <script>
 $(document).on('click', '.edit_data', function(){  
           var edit_id = $(this).attr("IdLocal");  
           $.ajax({  
                url:"modifier.php",  
                type:"POST",  
                data:{edit_id:edit_id},  
                success:function(data){  
                  
                     $('#update_details').html(data);  
                     $('#Modifier').modal('show');  
                }  
           });  
      });  
 </script> -->

</body>
</html>
</form>