<select id="test">
     <option value="">--- please select ---</option>
    <option value="MY">Malaysia</option>
    <option value="JP">Jipun</option>
</select>


<div id="ic" style="display:none;">
  IC
</div>

<div id="passport" style="display:none;">
  passport
</div>


<style type="text/css">
	#ic, #passport { display: none; }
</style>
<script type="text/javascript">
	$('#test').on('change', function() {
  //  alert( this.value ); // or $(this).val()
  if(this.value == "MY") {
    $('#ic').show();
    $('#passport').hide();
  } else {
    $('#ic').hide();
    $('#passport').show();
  }
});
</script>