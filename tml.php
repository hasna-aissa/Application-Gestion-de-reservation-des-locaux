 <?php 
 include 'connexion.php';
               $query1 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00' AND TimeFin='09:30 ' AND DayName(Date)='Monday' AND Date>= Date(NOW())" );
                 $query2 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:15 'AND DayName(Date)='Monday' AND Date>= Date(NOW())" );
                  $query3 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:30' AND TimeFin='13:00 ' AND  DayName(Date)='Monday' AND Date>= Date(NOW())" );
                   $query4 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30' AND  DayName(Date)='Monday' AND Date>= Date(NOW())" );
                    $query5 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15'  AND  DayName(Date)='Monday' AND Date>= Date(NOW())" );
                     $query6 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Monday' AND Date>= Date(NOW())" );
                      $query7 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 '  AND  DayName(Date)='Tuesday' AND Date>= Date(NOW())" );
                       $query8 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:15 '  AND  DayName(Date)='Tuesday' AND Date>= Date(NOW())" );
                        $query9 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:30' AND TimeFin='13:00 '  AND  DayName(Date)='Tuesday' AND Date>= Date(NOW())" );
                         $query10 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30'  AND  DayName(Date)='Tuesday' AND Date>= Date(NOW())" );
                          $query11= $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15'  AND  DayName(Date)='Tuesday' AND Date>= Date(NOW())" );
                           $query12 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Tuesday' AND Date>= Date(NOW())" );
                            $query13 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 ' AND  DayName(Date)='Wednesday' AND Date>= Date(NOW())");
                             $query14 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:15 ' AND  DayName(Date)='Wednesday' AND Date>= Date(NOW())" );
                              $query15 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:30' AND TimeFin='13:00 ' AND  DayName(Date)='Wednesday' AND Date>= Date(NOW())" );
                               $query16 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30' AND  DayName(Date)='Wednesday' AND Date>= Date(NOW())" );
                                $query17 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15' AND  DayName(Date)='Wednesday' AND Date>= Date(NOW())" );
                                 $query18 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Wednesday' AND Date>= Date(NOW())" );
                                  $query19 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 ' AND  DayName(Date)='Thursday' AND Date>= Date(NOW())" );
                                   $query20 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:15 ' AND  DayName(Date)='Thursday' AND Date>= Date(NOW())" );
                                    $query21 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:30' AND TimeFin='13:00 '  AND  DayName(Date)='Thursday' AND Date>= Date(NOW())" );
                                     $query22 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30'AND  DayName(Date)='Thursday' AND Date>= Date(NOW())" );
                                      $query23 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15' AND  DayName(Date)='Thursday' AND Date>= Date(NOW())" );
                                       $query24 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00' AND  DayName(Date)='Thursday' AND Date>= Date(NOW())" );
                                        $query25 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND TimeFin='09:30 ' AND  DayName(Date)='Friday' AND Date>= Date(NOW())" );
                                         $query26 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:15 '  AND  DayName(Date)='Friday' AND Date>= Date(NOW())" );
                                          $query27 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:30' AND TimeFin='13:00 '  AND  DayName(Date)='Friday' AND Date>= Date(NOW())" );
                                           $query28 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30' AND DayName(Date)='Friday' AND Date>= Date(NOW())");
                                            $query29 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15'  AND  DayName(Date)='Friday' AND Date>= Date(NOW())" );
                                             $query30 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Friday' AND Date>= Date(NOW())" );
                                              $query31 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='08:00 ' AND  DayName(Date)='Saturday' AND Date>= Date(NOW())" );
                                               $query32 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='09:45' AND TimeFin='11:15 ' AND  DayName(Date)='Saturday' AND Date>= Date(NOW())" );
                                                $query33 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='11:30' AND TimeFin='13:00' AND  DayName(Date)='Saturday' AND Date>= Date(NOW())" );
                                                 $query34 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='14:00' AND TimeFin='15:30' AND  DayName(Date)='Saturday' AND Date>= Date(NOW())" );
                                                  $query35 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='15:45' AND TimeFin='17:15' AND  DayName(Date)='Saturday' AND Date>= Date(NOW())" );
                                                   $query36 = $conn->query("SELECT * FROM creneu WHERE TimeDebut='17:30' AND TimeFin='19:00'  AND  DayName(Date)='Saturday' AND Date>= Date(NOW())" );
                echo"<tr>";echo"<td>Lundi</td>";
                echo"<td >";
                while ($donnee1=$query1->fetch()) {
                  if ($donnee1['Filiere']=='TM' && $donnee1['Niveau']=='Licence') {
                    echo $donnee1['Matiere']." ".$donnee1['GrpSec']."  ".$donnee1['NomProf']." ".$donnee1['NomLocal'];
                  
                  }
                  echo "<hr>";
                }
                echo"</td>";
                echo"<td>";
                while ($donnee2=$query2->fetch()) {
                  if ($donnee2['Filiere']=='TM' && $donnee2['Niveau']=='Licence') {
                    echo $donnee2['Matiere']." ".$donnee2['GrpSec']."  ".$donnee2['NomProf']." ".$donnee2['NomLocal'];
                  
                  }
                  echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee3=$query3->fetch()) {
                  if ($donnee3['Filiere']=='TM' && $donnee3['Niveau']=='Licence') {
                    echo $donnee3['Matiere']." ".$donnee3['GrpSec']."  ".$donnee3['NomProf']." ".$donnee3['NomLocal'];
                  
                  }
                  echo "<hr>";
                }
                echo"</td>";
                
                echo"<td>";
                 while ($donnee4=$query4->fetch()) {
                  if ($donnee4['Filiere']=='TM' && $donnee4['Niveau']=='Licence') {
                  echo $donnee4['Matiere']." ".$donnee4['GrpSec']."  ".$donnee4['NomProf']." ".$donnee4['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee5=$query5->fetch()) {
                  if ($donnee5['Filiere']=='TM' && $donnee5['Niveau']=='Licence') {
                  echo $donnee5['Matiere']." ".$donnee5['GrpSec']."  ".$donnee5['NomProf']." ".$donnee5['NomLocal'];
                  echo "<hr>";
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee6=$query6->fetch()) {
                  if ($donnee6['Filiere']=='TM' && $donnee6['Niveau']=='Licence') {
                  echo $donnee6['Matiere']." ".$donnee6['GrpSec']."  ".$donnee6['NomProf']." ".$donnee6['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";






                echo"<tr>";echo"<td>Mardi</td>";
                echo"<td >";
                while ($donnee7=$query7->fetch()) {
                  if ($donnee7['Filiere']=='TM' && $donnee7['Niveau']=='Licence') {
                  echo $donnee7['Matiere']." ".$donnee7['GrpSec']."  ".$donnee7['NomProf']." ".$donnee7['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee8=$query8->fetch()) {
                  if ($donnee8['Filiere']=='TM' && $donnee8['Niveau']=='Licence') {
                  echo $donnee8['Matiere']." ".$donnee8['GrpSec']."  ".$donnee8['NomProf']." ".$donnee8['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee9=$query9->fetch()) {
                  if ($donnee9['Filiere']=='TM' && $donnee9['Niveau']=='Licence') {
                  echo $donnee9['Matiere']." ".$donnee9['GrpSec']."  ".$donnee9['NomProf']." ".$donnee9['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee10=$query10->fetch()) {
                  if ($donnee10['Filiere']=='TM' && $donnee10['Niveau']=='Licence') {
                  echo $donnee10['Matiere']." ".$donnee10['GrpSec']."  ".$donnee10['NomProf']." ".$donnee10['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee11=$query11->fetch()) {
                  if ($donnee11['Filiere']=='TM' && $donnee11['Niveau']=='Licence') {
                  echo $donnee11['Matiere']." ".$donnee11['GrpSec']."  ".$donnee11['NomProf']." ".$donnee11['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee12=$query12->fetch()) {
                  if ($donnee12['Filiere']=='TM' && $donnee12['Niveau']=='Licence') {
                  echo $donnee12['Matiere']." ".$donnee12['GrpSec']."  ".$donnee12['NomProf']." ".$donnee12['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";


                echo"<tr>";echo"<td>Mercredi</td>";
                echo"<td >";
                while ($donnee13=$query13->fetch()) {
                  if ($donnee13['Filiere']=='TM' && $donnee13['Niveau']=='Licence') {
                  echo $donnee13['Matiere']." ".$donnee13['GrpSec']."  ".$donnee13['NomProf']." ".$donnee13['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee14=$query14->fetch()) {
                  if ($donnee14['Filiere']=='TM' && $donnee14['Niveau']=='Licence') {
                  echo $donnee14['Matiere']." ".$donnee14['GrpSec']."  ".$donnee14['NomProf']." ".$donnee14['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee15=$query15->fetch()) {
                  if ($donnee15['Filiere']=='TM' && $donnee15['Niveau']=='Licence') {
                  echo $donnee15['Matiere']." ".$donnee15['GrpSec']."  ".$donnee15['NomProf']." ".$donnee15['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee16=$query16->fetch()) {
                  if ($donnee16['Filiere']=='TM' && $donnee16['Niveau']=='Licence') {
                  echo $donnee16['Matiere']." ".$donnee16['GrpSec']."  ".$donnee16['NomProf']." ".$donnee16['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee17=$query17->fetch()) {
                  if ($donnee17['Filiere']=='TM' && $donnee17['Niveau']=='Licence') {
                  echo $donnee17['Matiere']." ".$donnee17['GrpSec']."  ".$donnee17['NomProf']." ".$donnee17['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee18=$query18->fetch()) {
                  if ($donnee18['Filiere']=='TM' && $donnee18['Niveau']=='Licence') {
                  echo $donnee18['Matiere']." ".$donnee18['GrpSec']."  ".$donnee18['NomProf']." ".$donnee18['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                echo"<tr>";echo"<td>Jeudi</td>";
                echo"<td >";
                while ($donnee19=$query19->fetch()) {
                  if ($donnee19['Filiere']=='TM' && $donnee19['Niveau']=='Licence') {
                  echo $donnee19['Matiere']." ".$donnee19['GrpSec']."  ".$donnee19['NomProf']." ".$donnee19['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee20=$query20->fetch()) {
                  if ($donnee20['Filiere']=='TM' && $donnee20['Niveau']=='Licence') {
                  echo $donnee20['Matiere']." ".$donnee20['GrpSec']."  ".$donnee20['NomProf']." ".$donnee20['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee21=$query21->fetch()) {
                  if ($donnee21['Filiere']=='TM' && $donnee21['Niveau']=='Licence') {
                  echo $donnee21['Matiere']." ".$donnee21['GrpSec']."  ".$donnee21['NomProf']." ".$donnee21['NomLocal'];
                 
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee22=$query22->fetch()) {
                  if ($donnee22['Filiere']=='TM' && $donnee22['Niveau']=='Licence') {
                  echo $donnee22['Matiere']." ".$donnee22['GrpSec']."  ".$donnee22['NomProf']." ".$donnee22['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee23=$query23->fetch()) {
                  if ($donnee23['Filiere']=='TM' && $donnee23['Niveau']=='Licence') {
                  echo $donnee23['Matiere']." ".$donnee23['GrpSec']."  ".$donnee23['NomProf']." ".$donnee23['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee24=$query24->fetch()) {
                  if ($donnee24['Filiere']=='TM' && $donnee24['Niveau']=='Licence') {
                  echo $donnee24['Matiere']." ".$donnee24['GrpSec']."  ".$donnee24['NomProf']." ".$donnee24['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                echo"<tr>";echo"<td>Vendredi</td>";
                echo"<td >";
                while ($donnee25=$query25->fetch()) {
                  if ($donnee25['Filiere']=='TM' && $donnee25['Niveau']=='Licence') {
                  echo $donnee25['Matiere']." ".$donnee25['GrpSec']."  ".$donnee25['NomProf']." ".$donnee25['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee26=$query26->fetch()) {
                  if ($donnee26['Filiere']=='TM' && $donnee26['Niveau']=='Licence') {
                  echo $donnee26['Matiere']." ".$donnee26['GrpSec']."  ".$donnee26['NomProf']." ".$donnee26['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee27=$query27->fetch()) {
                  if ($donnee27['Filiere']=='TM' && $donnee27['Niveau']=='Licence') {
                  echo $donnee27['Matiere']." ".$donnee27['GrpSec']."  ".$donnee27['NomProf']." ".$donnee27['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee28=$query28->fetch()) {
                  if ($donnee28['Filiere']=='TM' && $donnee28['Niveau']=='Licence') {
                  echo $donnee28['Matiere']." ".$donnee28['GrpSec']."  ".$donnee28['NomProf']." ".$donnee28['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee29=$query29->fetch()) {
                  if ($donnee29['Filiere']=='TM' && $donnee29['Niveau']=='Licence') {
                  echo $donnee29['Matiere']." ".$donnee29['GrpSec']."  ".$donnee29['NomProf']." ".$donnee29['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee30=$query30->fetch()) {
                  if ($donnee30['Filiere']=='TM' && $donnee30['Niveau']=='Licence') {
                  echo $donnee30['Matiere']." ".$donnee30['GrpSec']."  ".$donnee30['NomProf']." ".$donnee30['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                echo"<tr>";echo"<td>Samedi</td>";
                echo"<td >";
                while ($donnee31=$query31->fetch()) {
                  if ($donnee31['Filiere']=='TM' && $donnee31['Niveau']=='Licence') {
                    echo $donnee31['Matiere']." ".$donnee31['GrpSec']."  ".$donnee31['NomProf']." ".$donnee31['NomLocal'];
                 
                  }
                  echo "<hr>";
                  
                } 
                echo"</td>";
                echo"<td>";
                while ($donnee32=$query32->fetch()) {
                  if ($donnee32['Filiere']=='TM' && $donnee32['Niveau']=='Licence') {
                  echo $donnee32['Matiere']." ".$donnee32['GrpSec']."  ".$donnee32['NomProf']." ".$donnee32['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo"<td>";
                 while ($donnee33=$query33->fetch()) {
                  if ($donnee33['Filiere']=='TM' && $donnee33['Niveau']=='Licence') {
                  echo $donnee33['Matiere']." ".$donnee33['GrpSec']."  ".$donnee33['NomProf']." ".$donnee33['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                
                echo"<td>";
                 while ($donnee34=$query34->fetch()) {
                  if ($donnee34['Filiere']=='TM' && $donnee34['Niveau']=='Licence') {
                  echo $donnee34['Matiere']." ".$donnee34['GrpSec']."  ".$donnee34['NomProf']." ".$donnee34['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee35=$query35->fetch()) {
                  if ($donnee35['Filiere']=='TM' && $donnee35['Niveau']=='Licence') {
                  echo $donnee35['Matiere']." ".$donnee35['GrpSec']."  ".$donnee35['NomProf']." ".$donnee35['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";

                echo"<td>";
                 while ($donnee36=$query36->fetch()) {
                  if ($donnee36['Filiere']=='TM' && $donnee36['Niveau']=='Licence') {
                  echo $donnee36['Matiere']." ".$donnee36['GrpSec']."  ".$donnee36['NomProf']." ".$donnee36['NomLocal'];
                  
                }
                echo "<hr>";
                } 
                echo"</td>";
                echo "</tr>";

                ?>