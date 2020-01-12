
<?php include('connexion.php'); 
session_start();?>
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
      function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'Id',1,0,'C');
        $this->Cell(40,10,'IdLocal',1,0,'C');
        $this->Cell(40,10,'Date',1,0,'C');
        $this->Cell(40,10,'Time debut',1,0,'C');
        $this->Cell(40,10,'Time fin',1,0,'C');
        $this->Ln();
      }
      function viewTable($conn)
      {
        $this->SetFont('Times','',12);
        $stmt=$conn->query('SELECT * from creneu');
        while ($data=$stmt->fetch(PDO::FETCH_OBJ)) {
          # code...
          $this->Cell(20,10,$data->IdCreneu,1,0,'C');
        $this->Cell(40,10,$data->IdLocal,1,0,'C');
        $this->Cell(40,10,$data->Date,1,0,'C');
        $this->Cell(40,10,$data->TimeDebut ,1,0,'C');
        $this->Cell(40,10,$data->TimeFin ,1,0,'C');
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
  <title>AdminLTE 2 | Starter</title>
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
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
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
              <span  class="img-circle glyphicon glyphicon-user" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Dgaini kaouthar</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <span  class="img-circle glyphicon glyphicon-user" alt="User Image">

                <p>
                  Dgaini kaouthar- Web Developer
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                  <form action="deconnexion.php" method="post"><button   type="submit" value="deconnexion" name="deconnecter" class="btn btn-default" >DECONNEXION</button></form>
                  
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

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

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
    

    <!-- Main content -->
    <section class="content container-fluid">
      <div style="margin-left: 110px">
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


      $query3="SELECT count(IdLocal) from creneu WHERE NomProf=NULL AND Matiere=NULL AND Filiere=NULL AND GrpSec=NULL ";
      $stmtament3 = $conn->prepare($query3);
      $stmtament3->execute();
      $ligne3=$stmtament3->fetch(PDO::FETCH_BOTH);
      $disponible=$ligne3['count(IdLocal)'];



          ?>
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $locals; ?></sup></h3>

              <p>Locaux</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="image/classroom_management_506721.png" width="35%" style="margin-left: 60%"></i>
            </div>
            <br>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6" style="height: 30%;width:30%">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $reservations; ?></h3>

              <p>Reservations</p>
            </div>
            <div class="icon">
              <i class="ion "><img src="image/reservation.png" width="35%" style="margin-left: 60%"></i>
            </div>
            <br>
            
          </div>
        </div>
        <div class="col-lg-3 col-xs-6" style="height: 30%;width:30%">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $disponible; ?></h3>

              <p>Local disponible</p>
            </div>
            <div class="icon">
              <i class="ion "><img src="image/disponible.jpg" width="35%" style="margin-left: 60%"></i>
            </div>
            <br>
            
          </div>
        </div></div><br><br><br><br><br><br><br><br>
        <div class="box-body ">
              <div class="panel panel-warning "style="bac: #770c33;">
                <div class ="panel-heading"style="background-color: #770c33;color: white"><strong>Reserver un local</strong>  </div>
                 <div class="panel-body">

      <form method="post" action="" class="form-inline">
          <div class ="form-group"> Chercher par :
          <select type="text" class="form-control" value="cher" name="select" >
            <option value="blank"> choisir</option>
            <option   value="type"> Type</option>
            <option  value="nom" > Nom</option>
            <option  value="date" > Date</option>
          </select>
          </div>
          <div class ="form-group">
            <input class ="form-control" placeholder="Rechercher" name="mot">

             <button  onclick="affichageDiv();" type="submit" value="Rechercher" name="Rechercher" class="btn btn-warning" >
                <span class="glyphicon glyphicon-search"></span>Chercher   
              </button>
  
                      </div>
      <script type="text/javascript">  function myFunction() {window.print();}</script>
  <button style="margin-left: 558px" class="btn btn-primary hidden-print" onclick="myFunction()" name="imprimer"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimer</button>
                       <button type="submit" target="_blank" class="btn btn-default pull-right" name="pdf" ><i class="fa fa-print"></i> PDF</buttton>
        <br>
            </div>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" style="margin-left: 81%;width: 230px;height: 50px;background-color: #770c33;color: white"><strong>Reserver</strong> </button>
             
      </form>
                  <form method="post" action="ReserverLocal.php" class="form-inline">
            
         
          <div id="monselect1">
              
                </div>






      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
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
                               
                  <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%" name="Nom"> 
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


              
                  

                  <label  class="labelStyle">Nom de professeur</label>
                  <input type="text" class="form-control" value="" placeholder="Nom de Professeur" name="Professeur">
                </div><br>
                <div class="col-xs-6">
                  <label  class="labelStyle">Sujet/Matière</label>
                  <input type="text" class="form-control" value="" name="Sujet"><br>
               
              <div class="col-xs-6">
                <label for="inputState" class="labelStyle"  style="margin-left: 3%">Filière</label>
                <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%" name="Filiere">
                  <option selected>Choisir...</option>
                  <option>GI</option>
                  <option>GE</option>
                  <option>TM</option>
                  <option>TCC</option>
                  <option>GBI</option>
                </select>
                 </div>
              </div><br>
            </div><br>
<div class="row">
                <div class="form-group inputStyle">
                   <div class="col-xs-6">
                  <label for="inputState" class="labelStyle"  style="margin-left: 3%">Groupe/section</label>
                <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%" name="GrpSec">
                  <option selected>Choisir...</option>
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
                <label for="inputState" class="labelStyle"  style="margin-left: 3%">Niveau</label>
                <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%" name="Niveau">
                  <option selected>Choisir...</option>
                  <option>1ere année</option>
                  <option>2eme année</option>
                  <option>Licence</option>
                </select>
                </div>
              </div>
              </div>
<br>
              <div class="row">
                <div class="col-xs-6">
                  <br><label  class="labelStyle">Time Debut</label>
                  <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%" name="TimeDebut">
                  <option selected>Choisir...</option>
                  <option>O8:00</option>
                  <option>09:45</option>
                  <option>11:30</option>
                  <option>14:00</option>
                  <option>15:45</option>
                  <option>17:30</option>
                </select>
                </div>
              
                <div class="col-xs-6">
                  <br><label  class="labelStyle">Time Fin</label>
                  <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%" name="TimeFin">
                  <option selected>Choisir...</option>
                  <option>09:30</option>
                  <option>11:15</option>
                  <option>13:00</option>
                  <option>15:30</option>
                  <option>17:15</option>
                  <option>19:00</option>
                </select>
                </div>
              </div>
<br>
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
      <button type="submit" class="btn btn_reserve" name="Reserver" style="width: 100px;height: 50px;background-color: #770c33;color: white">Reserver</button>
  </div>
</form>
</div>
</section>
</div>
</div>
</div>
</div>

      <!--------------------------
        | Your Page Content Here |
        -------------------------->


    
    

         <div id="reservation2">
                <script>
            
                     function affichageDiv() 
                  {
                    var id = "reservation2";
                    var objet = document.getElementById("reservation1");
                    objet.style.display='none';
                    document.getElementById("reservation2").style.display='inline';

                       document.getElementById('Rechercher').addEventListener('click', affichageDiv());
                    
                  }
               
                  
                </script>

                
           
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
                echo "      <table id=\"example1\" class=\"table table-bordered \">
     <thead>
              <tr  >
                  <th class=\"text-center\">Nom Local</th>
                  <th class=\"text-center\">Type</th>
                  <th class=\"text-center\">Date</th>
                </tr>
                </thead>
                <tbody>";
  $str=$_POST['mot'];
  $select=$_POST['select'];
  if($select=='nom'){
  $query=$conn->query("SELECT * FROM creneu c,local l WHERE c.IdLocal=l.IdLocal and c.NomLocal LIKE '%".$str."%' ");  
                   while($row=$query->fetch()){
                  echo "<tr class=\"text-center\">";
                   echo "<td>".$row['NomLocal']."</td>";
                   echo "<td>".$row['TypeLocal']."</td>";
                   echo "<td>".$row['Date']."</td></tr>";
                
                   
                 }}



                   if($select=='type'){
  $query=$conn->query("SELECT * FROM creneu c,local l WHERE c.IdLocal=l.IdLocal and TypeLocal LIKE '%".$str."%'  ");  
                   while($row=$query->fetch()){

                  echo "<tr class=\"text-center\">";
                   echo "<td>".$row['NomLocal']."</td>";
                   echo "<td>".$row['TypeLocal']."</td>";
                   echo "<td>".$row['Date']."</td></tr>";
                   
                 }}

                   if($select=='date'){
  $query=$conn->query("SELECT * FROM creneu c,local l WHERE c.IdLocal=l.IdLocal and Date LIKE '%".$str."%'  ");  
                   while($row=$query->fetch()){

                  echo "<tr class=\"text-center\">";
                   echo "<td>".$row['NomLocal']."</td>";
                   echo "<td>".$row['TypeLocal']."</td>";
                   echo "<td>".$row['Date']."</td></tr>";
                   
                   
                 }}


}

      
     /* $sql1 = "SELECT * FROM creneu group by (IdLocal) ";
      $sql2 = "SELECT * FROM creneu group by (Date)  ";
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
      $sql = "SELECT * FROM creneu WHERE Day(Date)=$day order by Date";
      $stmt = $conn->query($sql);
      $row = $stmt->fetchAll(PDO::FETCH_OBJ);
      echo "<td>";
      echo"<table class=\"table\">";
      $cnt=0;
       echo $row2['IdLocal'];
       foreach ($row as $donnee) {
        
          echo " <tr><td id=\"2\">".$donnee->TimeDebut." ".$donnee->TimeFin." ".$donnee->Date."</td></tr>";
                     $cnt++;

        
        }
         
                      echo"</table>";
      echo "</td>";
      echo'</tr>';
      }
           
      */
    ?>
           
              </tbody>
            </table>
      </div>
       <div id="reservation1">
   
    <?php 
      $sql1 = "SELECT * FROM creneu group by (IdLocal)";
      $sql2 = "SELECT * FROM creneu group by (Date)";
      $sql3="SELECT count(IdLocal) from local";
      $stmt3 = $conn->prepare($sql3);
      $stmt3->execute();
      $row3=$stmt3->fetch(PDO::FETCH_BOTH);
      $nbLocal=$row3['count(IdLocal)'];
      // Preparation
      $nb=$nbLocal*6;
      $stmt1 = $conn->prepare($sql1);
      $stmt2 = $conn->prepare($sql2);
      // execution
      
      $stmt1->execute();
      $stmt2->execute();
      /*echo '<tr><th class="text-center" >Salle/Jour</th>';
      while ($row1=$stmt1->fetch(PDO::FETCH_BOTH)) {
      echo'<th class="text-center"  >'.$row1['IdLocal'].'</th>'; 
      }
     */
      echo'</tr></thead><tbody>';    
      if(!isset($_GET['page']))
        {$page1=0;}
      else{
        $page = $_GET['page'];
        if($page=="" || $page==1){
          $page1=0;
        }
        else{
          $page1 = ($page*$nb)-$nb;
        }
      }
    
      $query=$conn->query("SELECT * FROM creneu ORDER BY Date limit $page1,$nb");
      ?>
      <table class="table table-striped table-bordered table-sm" id="dtBasicExample" cellspacing="0" style="width: 50%;margin-left: 20%">
     
      <?php
      $i=0;
      $j=0;
      $cmp=0;
      while($row=$query->fetch()){
        $timestamp = strtotime($row['Date']);
        $day = date('l', $timestamp);
        $cmp++;
      if ($cmp==7) {
        $j=0;
        $cmp=0;
      }
      ?>
      <tbody>
        <tr>
        <?php if ($i==0) {
          echo "<tr><div style=\"margin-left:45%;font-size:30px;font-weight:bold;color:grey\">".$day." ".$row['Date']."</div><br><br></tr>";
          $i++;
        } 
        if ($j==0) {
              echo "<td style=\"border-style: none;\"><div style=\"font-size:30px\">".$row['NomLocal']."</div></td>";
              $j++;
                echo "<td>".$row['TimeDebut']." ".$row['TimeFin']."</td>";
                 echo "<td>".$row['NomProf']." ".$row['Filiere']." ".$row['Matiere']."</td>";

        
        
      }
        else{ 
            echo "<td style=\"border-style: none;\"></td>";
              echo "<td>".$row['TimeDebut']." ".$row['TimeFin']."</td>";
                 echo "<td>".$row['NomProf']." ".$row['Filiere']." ".$row['Matiere']."</td>";

          }?>
        </tr>

      </tbody>
      <?php }?>
      </table>
      <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li><?php for($b=1;$b<10;$b++){ ?> 
        <li class="page-item"><a class="page-link" href="ReserverSalle.php?page=<?php echo $b; ?>"><?php echo $b; ?></a></li>
          <?php }  ?>
    <li class="page-item">
      <a class="page-link" href="#">Next</a><br>
      
    </li>
     
  </ul>

</nav>

   <td style="border-style: none;"></td>
        
      
    </tbody>
</table>

</thead>

</div>
                  </form>
                 </div>
              </div>
            </div>
    

         <!-- /.box -->
          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title titleStyle" >Reserver local</h4>
              </div>
              <div class="modal-body" >
                <section class="content container-fluid modalClass" >
        <div style="background-color: #FFFFFF;height: 500px">
        <form>


          <label class="labelReserve">Infos locale</label>
              <hr>
          <div class="row">
                <div class="col-xs-6">
                  <label  class="labelStyle">Nom de local</label>
                  <input type="text" class="form-control" value="" placeholder="Nom de local">
                </div>
                <div class="col-xs-6">
                  <label  class="labelStyle" style="width: 100%">Type</label>
                  <input type="text" class="form-control" value="" placeholder="Type de locale">
                </div>
              </div>
              
              <div class="row">
                <div class="col-xs-6">
                  <label  class="labelStyle">Effectif</label>
                  <input type="text" class="form-control" value="" placeholder="Effectif">
                </div>
                <div class="col-xs-6">
                  <label  class="labelStyle">Etage</label>
                  <input type="text" class="form-control" value="" placeholder="Etage" >
                </div>
              </div>
              <label class="labelReserve">Reservation</label>
              <hr>
              <div class="row">
                <div class="col-xs-6">
                  <label  class="labelStyle">Nom de professeur</label>
                  <input type="text" class="form-control" value="" placeholder="Effectif">
                </div>
                <div class="col-xs-6">
                  <label  class="labelStyle">Sujet/Matière</label>
                  <input type="text" class="form-control" value="" placeholder="Sujet/Matière">
                </div>
              </div>
              <div class="row">
                <div class="form-group inputStyle">
                <label for="inputState" class="labelStyle"  style="margin-left: 3%">Filière</label>
                <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%">
                  <option selected>Choisir...</option>
                  <option>GI</option>
                  <option>GE</option>
                  <option>TM</option>
                  <option>TCC</option>
                  <option>GBI</option>
                </select>
                </div>
                <div class="form-group inputStyle">
                <label for="inputState" class="labelStyle"  style="margin-left: 3%">Niveau</label>
                <select id="inputState" class="form-control" style="margin-left: 3%;width: 94%">
                  <option selected>Choisir...</option>
                  <option>1ere année</option>
                  <option>2eme année</option>
                  <option>Licence</option>
                </select>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <label  class="labelStyle">Date Debut</label>
                  <input type="datetime-local" class="form-control" >
                </div>
                <div class="col-xs-6">
                  <label  class="labelStyle">Date Fin</label>
                  <input type="datetime-local" class="form-control" >
                </div>
              </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
      <button type="submit" class="btn btn_reserve" >Reserver</button>
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
      echo "<script language=\"JavaScript\"> alert(\"impossible de reserver ce local\")</script>";
    }
}
$count=0;





 ?>
