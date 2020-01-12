      <div class="panel panel-warning ">
                <div class ="panel-heading" style="background-color: #3F81CD;color: white;font-size: 25px"><strong>Les emplois du temps</strong>  </div>
                <br><br>
                 <div class="panel-body">
<div class="box">

       
                <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="fiche-tab" data-toggle="tab" href="#fiche" role="tab" aria-controls="home" aria-selected="true">1ére année</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="consultations-tab" data-toggle="tab" href="#consultations" role="tab" aria-controls="profile" aria-selected="false">2éme année</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="ordonnances-tab" data-toggle="tab" href="#ordonnances" role="tab" aria-controls="messages" aria-selected="false">Licence </a>
        </li>
      </ul>
</br>
<div class="tab-content">
<div class="tab-pane active" id="fiche" role="tabpanel" aria-labelledby="fiche-tab">
  
        <div style="height: 30%; width: 100% ; text-align:left" style="font-size: 14px">
        <div id="sectionAimprimer">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>Salles/Jours</th>
                  <th>8:00h - 9:30h</th>
                  <th>09:45h - 11:30h</th>
                  <th>11:45h - 13:00h</th>
                  <th>14:00h -15:30h</th>
                  <th>15:45h - 17:15</th>
                  <th>17:30h - 19:00h</th>
                  <?php 
                   date_default_timezone_set ('Europe/paris' );
                  $date=date('Y-m-d ');
                  $time= date('H:i:s');
                  ?>
                </tr>
                </thead>
                <tbody>

               <?php 
                 include 'tcc1.php';

                ?>
                </tbody>
              </table>
               <button style="margin-left: 95%;color: #000000" class="btn btn-default hidden-print" onClick="imprimer('sectionAimprimer')" name="imprimer" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
  

            </div>
        </div>
</div>

<div class="tab-pane" id="consultations" role="tabpanel" aria-labelledby="consultations-tab">
           <div style="height: 30%; width: 100%">
                <div id="sectionAimprimer">
                   <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>Salles/Jours</th>
                  <th>8:00h - 9:30h</th>
                  <th>09:45h - 11:30h</th>
                  <th>11:45h - 13:00h</th>
                  <th>14:00h -15:30h</th>
                  <th>15:45h - 17:15</th>
                  <th>17:30h - 19:00h</th>
                </tr>
                </thead>
                <tbody>
                  <?php include 'tcc2.php'; ?>
                
                </tbody>

              </table>
               <button style="margin-left: 95%;color: #000000" class="btn btn-default hidden-print" onClick="imprimer('sectionAimprimer')" name="imprimer" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
                </div>
            </div>
</div>

<div class="tab-pane" id="ordonnances" role="tabpanel" aria-labelledby="ordonnances-tab">
        <div style="height: 30%; width: 100%">
          <div id="sectionAimprimer">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>Salles/Jours</th>
                  <th>8:00h - 9:30h</th>
                  <th>09:45h - 11:30h</th>
                  <th>11:45h - 13:00h</th>
                  <th>14:00h -15:30h</th>
                  <th>15:45h - 17:15</th>
                  <th>17:30h - 19:00h</th>
                </tr>
                </thead>
                <tbody>
                  <?php include 'tccl.php'; ?>
                </tbody>
              </table>
            <button style="margin-left: 95%;color: #000000" class="btn btn-default hidden-print" onClick="imprimer('sectionAimprimer')" name="imprimer" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
          </div>
                    
         
        </div>
</div>
</div>
</div>
</div>
</div>


  <script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>