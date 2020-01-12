<button onClick="imprimer('sectionAimprimer')">Imprimer</button>
<div id='sectionAimprimer'>
Résultat MySQL ou tableau HTML à imprimer
</div>
dfghjn,;:!
<script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
