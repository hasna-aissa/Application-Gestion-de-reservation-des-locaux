<div class="row">
  <div class="large-4 columns">         
    <form>
           <fieldset>
          <label>Pick a fruit:</label>
                <select name="Fruit" onchange="show();">
                  <option value="Apple">Apple</option>
                  <option value="Orange">Orange</option>
                  <option value="Bananna">Bananna</option>
              </select>

              <div id="hiddenDiv" style="display:none">
                  <label>Hidden 2nd Question about Oranges</label>
                  <select name="Orange_question">
                    <option value="Yes">Yes</option>
                    <option value="No" selected>No</option>
                   </select>
              </div>

            <label>Should be right beneath first question unless orange is picked:</label>
              <select name="Next Question">
                  <option value="Yes">Yes</option>
                  <option value="No" selected>No</option>
              </select>
           </fieldset>
    </form>
  </div>
</div>
<script type="text/javascript">
	

	 function show(aval) {
    hiddenDiv.style.display='inline';
    
    hiddenDiv.style.display='none';
    
  }
</script>
