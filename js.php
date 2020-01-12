<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
  <script type="text/javascript">
   var x=1;
    function add_new_input(){
        x++;
        var input=document.createElement('input');
        input.setAttribute("id",x);
        input.setAttribute("type","text");

        document.getElementById("holder").appendChild(input);

    }


var index = 1;


function add_fields() {

    index++;
    var objTo = document.getElementById('room_fileds')
    var divtest = document.createElement("tr");
    divtest.innerHTML = ("<tr><td class='slno'>" + index + "</td><td><input type='text'></td><td><button class='remove_button' onclick='myfn()'>remove</button></td></tr>");
    objTo.appendChild(divtest);
     $(".slno").each(function(index, element) {
            $(element).text(index + 1);

       });

}

function myfn() {
        $(".remove_button").parents('tr').first().remove();
        $(".slno").each(function(index, element) {
            $(element).text(index + 1);

        });
}
var lundi8h = document.getElementById("lundi8h");
lundi8h.appendChild(document.createTextNode("<?php echo $lundi8h ?>"));


  </script>
</head>
<body>
<div id="holder">
<input type="text" name="1" id="1" />
</div>
<div class="add_new" onClick="add_new_input();" >+</div>
</div>

<button onclick="add_fields()">add input </button> <table id="room_fileds"> <tr> </tr> </table>
<?php
//lecture du fichier
$lundi8h = "c'est cette ligne"
?>
 
<table border="1">
  <tr>
    <th>emploi du temps en 2D</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>
    <th>16</th>
    <th>17</th>
    <th>18</th>
  </tr>
  <tr>
    <td>lundi</td>
    <td id"lundi8h"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>mardi</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

</body>
</html>




<html>
  <head>
    <script type="text/javascript">

      var i = 0;

      function addKid()
      {
        for (var j = 5; j >= 0; j--) {
          var newRow = document.createElement('tr');
          newRow.setAttribute("id",j);
          for (var k = 6; k >= 0; k--) {
          }
          newRow.innerHTML = '<td><table border="1" width="100px"><tr>'+for (var i = 6; i >= 0; i--) {tr.innerHTML='<td>fre</td></tr><tr><td>ferz</td></tr><tr><td>efza</td>'
          }+'</tr></table></td><td> <input type="text" name="Serie_'+i+'" ></td><td> <input type="text" name="Serie_'+i+'" ></td><td> <input type="text" name="Serie_'+i+'" ></td><td><input type="text" name="Quantite_'+i+'" ><button>butn</button></td><td><input type="button" id="add_kid()"  value="+" /><input type="button" value="-" onclick="removeKid(this.parentNode)">';

          document.getElementById('kids').appendChild(newRow);
          i++;
        }
        
      }

      function removeKid(element)
      {
        document.getElementById('kids').removeChild(element.parentNode);
        i--;
      }

    </script>
  </head>
  <body>
            <input type="button" id="add_kid()" onClick="addKid()" value="+" />
    <table border="1" id="kids">
      <tr>
        <th>Désignation</th>
        <th>Série</th>
        <th>Quantité</th>
        <th>Désignation</th>
        <th>Série</th>
        <th>Quantité</th>
      </tr>
      <tbody>
         
      </tbody>
    </table>
  </body>
</html>





<!-- Ajout/suppression ligne du tableau  -->
<script type="text/javascript" src="dtable.js"></script>
<!--  -->
 
 <script type="text/javascript">
function calcul(obj){
  // recherche TD parente de l'input (obj) passé en paramètre
  var oTD = obj.parentNode;
  // recherche TR parente de la TD
  var oTR = oTD.parentNode;
  // récup de la position de la TD sur la ligne
  var ind = oTD.cellIndex;
  // récup. TD précédente
  var oTDavant = oTR.cells[ind-1];
  // récup. TD suivante
  var oTDapres = oTR.cells[ind+1];
  // récup de l'INPUT de la TD précédente
  var oInputAvant = oTDavant.firstChild;
  // récup. de l'INPUT de la TD suivante
  var oInputApres = oTDapres.firstChild;
  // OUF!!! enfin le calcul
  oInputApres.value = oInputAvant.value * obj.value;
}

window.onload = dtableInit;
 
/* initialise le script */
function dtableInit() {
    var table = document.getElementsByTagName('TABLE');
    for ( var i = 0; i < table.length; i++ ) {
        // on récupère tous les tableaux dynamiques
        if ( table[i].className = 'dTable' ) {
            var tbody = table[i].tBodies[0];
            var newTr = tbody.rows[0].cloneNode(true);
 
            // on masque la première ligne du tbody (la ligne de reference)
            tbody.rows[0].style.display = 'none';
 
            // on en ajoute une
            tbody.appendChild(newTr);
        }
    }
}
 
/* trouve le tag "parentTagName" parent de "element" */
function getParent(element, parentTagName) {
    if ( ! element )
        return null;
    else if ( element.nodeType == 1 && element.tagName.toLowerCase() == parentTagName.toLowerCase() )
        return element;
    else
        return getParent(element.parentNode, parentTagName);
}
 
/* ajoute une ligne */
function addLigne(link) {
    // 1. récuperer le node "TABLE" à manipuler
    var td = link.parentNode;
    var table = getParent(td,'TABLE');
 
    // 2. on va manipuler le TBODY
    var tbody = table.tBodies[0];
 
    // 3. on clone la ligne de reference
    var newTr = tbody.rows[0].cloneNode(true);
    tbody.appendChild(newTr);
 
    if ( document.all )  // pour IE
        newTr.style.display = "block";
    else
        newTr.style.display = "table-row"; // pour Gecko
}
 
/* supprimer une ligne */
function delLigne(link) {
    // 1. récuperer le node "TABLE" à manipuler
    var td = link.parentNode;
    var table = getParent(td, 'TABLE');
 
    // 2. récuperer le TBODY
    var tbody = table.tBodies[0];
 
    // 3. Supprimer le TR
    tbody.removeChild(getParent(td, 'TR'));
}
</script>
<table class="dTable">
    <thead>
        <tr>
      <th>Poste <br/>analytique</th>
      <th>Code <br/>chantier</th>
      <th>D&eacute;signation</th>
      <th>Unit&eacute;</th>
      <th>Quantit&eacute;</th>
      <th>Prix unitaire <br/>H.T.</th>
      <th>Montant H.T.</th>
      <th>Taux <br/>TVA</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="mon_tableau">
 
        <tr>
            <td><input class = "tableau" type = "text" name = "champ1[]" /></td>
            <td><input class = "tableau" type = "text" name = "champ2[]" /></td>
            <td><input class = "tableau" type = "text" name = "champ3[]" /></td>
            <td><input class = "tableau" type = "text" name = "champ4[]" /></td>
      <td><input class = "tableau" type = "text" name = "champ5[]"/></td>
      <td><input class = "tableau" type = "text" name = "champ6[]" onkeyup = "calcul(this);"/> </td> 
            <td><input class = "tableau" type = "text" name = "champ7[]"/></td>
            <td><input class = "tableau" type = "text" name = "champ8[]" /></td>
            <td><a href="#" onclick="delLigne(this); return false;">Supp</a></td>
        </tr>
    </tbody>
    <tfoot>
    <tr><th><a href="#" onclick="addLigne(this); return false;">Ajouter une ligne</a></th></tr>
    </tfoot>      
</table>












<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
      
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
      
      </form>
      
   </body>
</html>


<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
      
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
      
      </form>
      
   </body>
</html>

