 <?php 
 include 'connexion.php';
                $query1 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00' AND TimeFin='09:30 ' AND DayName(Date)='Monday'" );
                 $query2 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:15 'AND DayName(Date)='Monday'" );
                  $query3 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:45' AND TimeFin='13:00 ' AND  DayName(Date)='Monday'" );
                   $query4 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30' AND  DayName(Date)='Monday'" );
                    $query5 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15'  AND  DayName(Date)='Monday'" );
                     $query6 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Monday'" );
                      $query7 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 '  AND  DayName(Date)='Tuesday'" );
                       $query8 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:30 '  AND  DayName(Date)='Tuesday'" );
                        $query9 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:45' AND TimeFin='13:00 '  AND  DayName(Date)='Tuesday'" );
                         $query10 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30'  AND  DayName(Date)='Tuesday'" );
                          $query11= $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15'  AND  DayName(Date)='Tuesday'" );
                           $query12 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Tuesday'" );
                            $query13 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 ' AND  DayName(Date)='Wednesday'");
                             $query14 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:30 ' AND  DayName(Date)='Wednesday'" );
                              $query15 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:45' AND TimeFin='13:00 ' AND  DayName(Date)='Wednesday'" );
                               $query16 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30' AND  DayName(Date)='Wednesday'" );
                                $query17 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15' AND  DayName(Date)='Wednesday'" );
                                 $query18 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Wednesday'" );
                                  $query19 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 ' AND  DayName(Date)='Thursday'" );
                                   $query20 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:30 ' AND  DayName(Date)='Thursday'" );
                                    $query21 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:45' AND TimeFin='13:00 '  AND  DayName(Date)='Thursday'" );
                                     $query22 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30'AND  DayName(Date)='Thursday'" );
                                      $query23 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15' AND  DayName(Date)='Thursday'" );
                                       $query24 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00' AND  DayName(Date)='Thursday'" );
                                        $query25 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 ' AND  DayName(Date)='Friday'" );
                                         $query26 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:30 '  AND  DayName(Date)='Friday'" );
                                          $query27 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:45' AND TimeFin='13:00 '  AND  DayName(Date)='Friday'" );
                                           $query28 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30'  AND Filiere='GI' AND Niveau='1ere année'  AND Filiere='GI' AND Niveau='1 ere année' AND DayName(Date)='Friday'");
                                            $query29 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15'  AND  DayName(Date)='Friday'" );
                                             $query30 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Friday'" );
                                              $query31 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND  DayName(Date)='Saturday'" );
                                               $query32 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:30 ' AND  DayName(Date)='Saturday'" );
                                                $query33 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:45' AND TimeFin='13:00' AND  DayName(Date)='Saturday'" );
                                                 $query34 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30' AND  DayName(Date)='Saturday'" );
                                                  $query35 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15' AND  DayName(Date)='Saturday'" );
                                                   $query36 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Saturday'" );
                echo"<tr>";echo"<td>Lundi</td>";
                echo"<td >";
                while ($donnee1=$query1->fetch()) {
                  if ($donnee1['Filiere']=='GI' && $donnee1['Niveau']=='1ere année') {
                    echo $donnee1['Matiere']." ".$donnee1['GrpSec']."  ".$donnee1['NomProf']." ".$donnee1['NomLocal'];
                  
                  }
                  echo "<hr>";
                }
                echo"</td>";
                echo"<td>";
                while ($donnee2=$query2->fetch()) {
                  if ($donnee2['Filiere']=='GI' && $donnee2['Niveau']=='1ere année') {
                    echo $donnee2['Matiere']." ".$donnee2['GrpSec']."  ".$donnee2['NomProf']." ".$donnee2['NomLocal'];
                  
                  }
                  echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee3=$query3->fetch()) {
                  if ($donnee3['Filiere']=='GI' && $donnee3['Niveau']=='1ere année') {
                    echo $donnee3['Matiere']." ".$donnee3['GrpSec']."  ".$donnee3['NomProf']." ".$donnee3['NomLocal'];
                  
                  }
                  echo "<hr>";
                }
                echo"</td>";
                
                echo"<td>";
                 while ($donnee4=$query4->fetch()) {
                  if ($donnee4['Filiere']=='GI' && $donnee4['Niveau']=='1ere année') {
                  echo $donnee4['Matiere']." ".$donnee4['GrpSec']."  ".$donnee4['NomProf']." ".$donnee4['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee5=$query5->fetch()) {
                  if ($donnee5['Filiere']=='GI' && $donnee5['Niveau']=='1ere année') {
                  echo $donnee5['Matiere']." ".$donnee5['GrpSec']."  ".$donnee5['NomProf']." ".$donnee5['NomLocal'];
                  echo "<hr>";
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee6=$query6->fetch()) {
                  if ($donnee6['Filiere']=='GI' && $donnee6['Niveau']=='1ere année') {
                  echo $donnee6['Matiere']." ".$donnee6['GrpSec']."  ".$donnee6['NomProf']." ".$donnee6['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";






                echo"<tr>";echo"<td>Mardi</td>";
                echo"<td >";
                while ($donnee7=$query7->fetch()) {
                  if ($donnee7['Filiere']=='GI' && $donnee7['Niveau']=='1ere année') {
                  echo $donnee7['Matiere']." ".$donnee7['GrpSec']."  ".$donnee7['NomProf']." ".$donnee7['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee8=$query8->fetch()) {
                  if ($donnee9['Filiere']=='GI' && $donnee9['Niveau']=='1ere année') {
                  echo $donnee8['Matiere']." ".$donnee8['GrpSec']."  ".$donnee8['NomProf']." ".$donnee8['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee9=$query9->fetch()) {
                  if ($donnee9['Filiere']=='GI' && $donnee9['Niveau']=='1ere année') {
                  echo $donnee9['Matiere']." ".$donnee9['GrpSec']."  ".$donnee9['NomProf']." ".$donnee9['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee10=$query10->fetch()) {
                  if ($donnee10['Filiere']=='GI' && $donnee10['Niveau']=='1ere année') {
                  echo $donnee10['Matiere']." ".$donnee10['GrpSec']."  ".$donnee10['NomProf']." ".$donnee10['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee11=$query11->fetch()) {
                  if ($donnee11['Filiere']=='GI' && $donnee11['Niveau']=='1ere année') {
                  echo $donnee11['Matiere']." ".$donnee11['GrpSec']."  ".$donnee11['NomProf']." ".$donnee11['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee12=$query12->fetch()) {
                  if ($donnee12['Filiere']=='GI' && $donnee12['Niveau']=='1ere année') {
                  echo $donnee12['Matiere']." ".$donnee12['GrpSec']."  ".$donnee12['NomProf']." ".$donnee12['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";


                echo"<tr>";echo"<td>Mercredi</td>";
                echo"<td >";
                while ($donnee13=$query13->fetch()) {
                  if ($donnee13['Filiere']=='GI' && $donnee13['Niveau']=='1ere année') {
                  echo $donnee13['Matiere']." ".$donnee13['GrpSec']."  ".$donnee13['NomProf']." ".$donnee13['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee14=$query14->fetch()) {
                  if ($donnee14['Filiere']=='GI' && $donnee14['Niveau']=='1ere année') {
                  echo $donnee14['Matiere']." ".$donnee14['GrpSec']."  ".$donnee14['NomProf']." ".$donnee14['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee15=$query15->fetch()) {
                  if ($donnee15['Filiere']=='GI' && $donnee15['Niveau']=='1ere année') {
                  echo $donnee15['Matiere']." ".$donnee15['GrpSec']."  ".$donnee15['NomProf']." ".$donnee15['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee16=$query16->fetch()) {
                  if ($donnee16['Filiere']=='GI' && $donnee16['Niveau']=='1ere année') {
                  echo $donnee16['Matiere']." ".$donnee16['GrpSec']."  ".$donnee16['NomProf']." ".$donnee16['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee17=$query17->fetch()) {
                  if ($donnee17['Filiere']=='GI' && $donnee17['Niveau']=='1ere année') {
                  echo $donnee17['Matiere']." ".$donnee17['GrpSec']."  ".$donnee17['NomProf']." ".$donnee17['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee18=$query18->fetch()) {
                  if ($donnee18['Filiere']=='GI' && $donnee18['Niveau']=='1ere année') {
                  echo $donnee18['Matiere']." ".$donnee18['GrpSec']."  ".$donnee18['NomProf']." ".$donnee18['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                echo"<tr>";echo"<td>Jeudi</td>";
                echo"<td >";
                while ($donnee19=$query19->fetch()) {
                  if ($donnee19['Filiere']=='GI' && $donnee19['Niveau']=='1ere année') {
                  echo $donnee19['Matiere']." ".$donnee19['GrpSec']."  ".$donnee19['NomProf']." ".$donnee19['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee20=$query20->fetch()) {
                  if ($donnee20['Filiere']=='GI' && $donnee20['Niveau']=='1ere année') {
                  echo $donnee20['Matiere']." ".$donnee20['GrpSec']."  ".$donnee20['NomProf']." ".$donnee20['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee21=$query21->fetch()) {
                  if ($donnee21['Filiere']=='GI' && $donnee21['Niveau']=='1ere année') {
                  echo $donnee21['Matiere']." ".$donnee21['GrpSec']."  ".$donnee21['NomProf']." ".$donnee21['NomLocal'];
                 
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee22=$query22->fetch()) {
                  if ($donnee22['Filiere']=='GI' && $donnee22['Niveau']=='1ere année') {
                  echo $donnee22['Matiere']." ".$donnee22['GrpSec']."  ".$donnee22['NomProf']." ".$donnee22['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee23=$query23->fetch()) {
                  if ($donnee23['Filiere']=='GI' && $donnee23['Niveau']=='1ere année') {
                  echo $donnee23['Matiere']." ".$donnee23['GrpSec']."  ".$donnee23['NomProf']." ".$donnee23['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee24=$query24->fetch()) {
                  if ($donnee24['Filiere']=='GI' && $donnee24['Niveau']=='1ere année') {
                  echo $donnee24['Matiere']." ".$donnee24['GrpSec']."  ".$donnee24['NomProf']." ".$donnee24['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                echo"<tr>";echo"<td>Vendredi</td>";
                echo"<td >";
                while ($donnee25=$query25->fetch()) {
                  if ($donnee25['Filiere']=='GI' && $donnee25['Niveau']=='1ere année') {
                  echo $donnee25['Matiere']." ".$donnee25['GrpSec']."  ".$donnee25['NomProf']." ".$donnee25['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee26=$query26->fetch()) {
                  if ($donnee26['Filiere']=='GI' && $donnee26['Niveau']=='1ere année') {
                  echo $donnee26['Matiere']." ".$donnee26['GrpSec']."  ".$donnee26['NomProf']." ".$donnee26['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee27=$query27->fetch()) {
                  if ($donnee27['Filiere']=='GI' && $donnee27['Niveau']=='1ere année') {
                  echo $donnee27['Matiere']." ".$donnee27['GrpSec']."  ".$donnee27['NomProf']." ".$donnee27['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee28=$query28->fetch()) {
                  if ($donnee28['Filiere']=='GI' && $donnee28['Niveau']=='1ere année') {
                  echo $donnee28['Matiere']." ".$donnee28['GrpSec']."  ".$donnee28['NomProf']." ".$donnee28['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee29=$query29->fetch()) {
                  if ($donnee29['Filiere']=='GI' && $donnee29['Niveau']=='1ere année') {
                  echo $donnee29['Matiere']." ".$donnee29['GrpSec']."  ".$donnee29['NomProf']." ".$donnee29['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee30=$query30->fetch()) {
                  if ($donnee30['Filiere']=='GI' && $donnee30['Niveau']=='1ere année') {
                  echo $donnee30['Matiere']." ".$donnee30['GrpSec']."  ".$donnee30['NomProf']." ".$donnee30['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                echo"<tr>";echo"<td>Samedi</td>";
                echo"<td >";
                while ($donnee31=$query31->fetch()) {
                  if ($donnee31['Filiere']=='GI' && $donnee31['Niveau']=='1ere année') {
                    echo $donnee31['Matiere']." ".$donnee31['GrpSec']."  ".$donnee31['NomProf']." ".$donnee31['NomLocal'];
                 
                  }
                  echo "<hr>";
                  
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee32=$query32->fetch()) {
                  if ($donnee32['Filiere']=='GI' && $donnee32['Niveau']=='1ere année') {
                  echo $donnee32['Matiere']." ".$donnee32['GrpSec']."  ".$donnee32['NomProf']." ".$donnee32['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee33=$query33->fetch()) {
                  if ($donnee33['Filiere']=='GI' && $donnee33['Niveau']=='2ere année') {
                  echo $donnee33['Matiere']." ".$donnee33['GrpSec']."  ".$donnee33['NomProf']." ".$donnee33['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee34=$query34->fetch()) {
                  if ($donnee34['Filiere']=='GI' && $donnee34['Niveau']=='2ere année') {
                  echo $donnee34['Matiere']." ".$donnee34['GrpSec']."  ".$donnee34['NomProf']." ".$donnee34['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee35=$query35->fetch()) {
                  if ($donnee35['Filiere']=='GI' && $donnee35['Niveau']=='2ere année') {
                  echo $donnee35['Matiere']." ".$donnee35['GrpSec']."  ".$donnee35['NomProf']." ".$donnee35['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee36=$query36->fetch()) {
                  if ($donnee36['Filiere']=='GI' && $donnee36['Niveau']=='2ere année') {
                  echo $donnee36['Matiere']." ".$donnee36['GrpSec']."  ".$donnee36['NomProf']." ".$donnee36['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                ?>