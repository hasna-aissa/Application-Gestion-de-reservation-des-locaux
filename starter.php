

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
  <link rel="stylesheet" href="stle.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
</style>
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
      <span class="logo-mini"><b>E</b>ST AGADIR</span>
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
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Réservation locaux</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Gestion de bibliothéque</span></a></li>
        <li class="">
          <a href="#"><i class="fa fa-link"></i> <span>Gestion des PFEs SFEs</span></a>
        </li>
        <li class="">
          <a href="#"><i class="fa fa-link"></i> <span>Gestion des matériaux</span>
            
          </a>
        
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper view" style="background-image: url('amphi.JPG'); background-repeat: no-repeat; background-size: cover; background-position: center center;">


    <!-- Content Header (Page header) -->
    <section class="content-header">
   
    </section>
    <!-- Main content -->
    <section class="content container-fluid" >

      <!--------------------------
        | Your Page Content Here |
        -------------------------->



            <div class="modal-content" id="login">
              <div class="modal-header" >
                <h4 class="modal-title titleStyle" id="modal_title" >Se connecter</h4>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid modalClass" >
        <div>
        <form method="POST" action="login.php">
        <div class="form-group has-feedback" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input type="email" class="form-control" placeholder="Email" name="email" id="inputlogin">
        
      </div>
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input type="password" class="form-control" placeholder="Password" name="password" id="inputlogin">
      </div>
      <button type="submit" class="btn btn_reserve" name="connecter" id="btn_connecter">Se connecter</button><br>
       <a href="#"  id="forget_password" >Mot de passe oublié ?</a><br><br><br><br>
        <a href="#" data-toggle="modal" data-target="#modal-defaultCDep" id="create_account" >Créer un compte</a>
          
        </form>
</div>
</section>
</div>
</div>




 <div class="modal fade" id="modal-defaultCDep"   ">
          <div class="modal-dialog" id="modal_dialog">
            <div class="modal-content" id="modal_content">
              <div class="modal-header" ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title titleStyle" id="modal_title">S'inscrire</h4>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid modalClass" >
        <div>
        <form method="POST" action="login.php">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">CIN</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="cin" class="form-control" id="name"
                               placeholder="John Doe"  required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Confirm Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control"
                               id="password-confirm" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
          <input type="submit" class="btn" name="inscrire" value="s'inscrire" id="btn_inscrire">

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
if (isset($_GET['erreur'])) {
 if ($_GET['erreur']==21) {
    echo "<script language=\"JavaScript\"> alert(\"les mots de passes sont pas identique\")</script>";
 }
}


if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==20) {
     echo "<script language=\"JavaScript\"> alert(\"veuillez remplir tout les champs\")</script>";
  }
}


if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==22) {
     echo "<script language=\"JavaScript\"> alert(\"vous n'etes pas autorisé d'utuliser cette application\")</script>";
  }
}

if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==23) {
     echo "<script language=\"JavaScript\"> alert(\"vous pouvez pas créer un compte utilisateur\")</script>";
  }
}
if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==27) {
     echo "<script language=\"JavaScript\"> alert(\"vous etes déja inscrites\")</script>";
  }
}
 ?>



             <div class="modal-content" id="login">
              <div class="modal-header" style="background-color:#3F81CD;color: #FFFFFF;text-align: center; ">
                <h2 class="modal-title titleStyle"  style="color: #FFFFFF;font-weight: bold;font-size: 20px;text-align: center;" >Mise à jour</h2>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid modalClass" >
        <div>
        <form method="POST" action="login.php">
            <div class="row">
              <div class="col-md-3 field-label-responsive">
                <label for="password">Date Debut</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        
                        <input type="Date" class="form-control" value="" placeholder="" name="DateDebutm" style="width: 340px">
                    </div>
                </div>
            </div>
            </div>
      <div class="row">
          <div class="col-md-3 field-label-responsive">
                <label for="password">Date Fin</label>
            </div>
            <div class="col-md-6">

                <div class="form-group">

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      
                        <input type="Date" class="form-control" value="" placeholder="" name="DateFinm" style="width: 340px">
                    </div>
                </div>
            </div>
        </div>
      <button type="submit" class="btn btn_reserve" name="connecter" id="btn_connecter" style="background-color:#3F81CD;">Mise à jour</button><br>
       
          
        </form>
</div>
</section>
</div>
</div>