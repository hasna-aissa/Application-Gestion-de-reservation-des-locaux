<p>Both tables use 'table-layout: fixed' to address column sizes. Example 2 does not truncate text as desired.
<h3>Example 1: Two-Table Structure</h3>
<div class="pane pane--table1">
  <div class="pane-hScroll">

    <table>
      <thead>
        <th>foo</th><th>foo</th><th>foo</th><th>foo</th>
      </thead>
    </table>

    <div class="pane-vScroll">
      <table>
        <tbody>
          <tr><td>1</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>2</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>3</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>4</td><td>foo foo foo foo foo foo foo foo foo foo foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>5</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>6</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>7</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>8</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>9</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>10</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>11</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>12</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>13</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>14</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>15</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>16</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>17</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>18</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>19</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>20</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>21</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>22</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>23</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>24</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>25</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>26</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>27</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>28</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>28</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>29</td><td>foo</td><td>foo</td><td>foo</td></tr>
          <tr><td>30</td><td>foo</td><td>foo</td><td>foo</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<h3>Example 2: Single-Table Structure</h3>
<div class="pane pane--table2">
  <table>
    <thead>
      <th>foo</th><th>foo</th><th>foo</th><th>foo</th>
    </thead>
    <tbody>
      <tr><td>1</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>2</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>3</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>4</td><td>foo foo foo foo foo foo foo foo foo foo foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>5</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>6</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>7</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>8</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>9</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>10</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>11</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>12</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>13</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>14</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>15</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>16</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>17</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>18</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>19</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>20</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>21</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>22</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>23</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>24</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>25</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>26</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>27</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>28</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>28</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>29</td><td>foo</td><td>foo</td><td>foo</td></tr>
      <tr><td>30</td><td>foo</td><td>foo</td><td>foo</td></tr>
    </tbody>
  </table>
</div>





<script type="text/javascript">
  // Example 1
$('.pane-hScroll').scroll(function() {
  $('.pane-vScroll').width($('.pane-hScroll').width() + $('.pane-hScroll').scrollLeft());
});

// Example 2
$('.pane--table2').scroll(function() {
  $('.pane--table2 table').width($('.pane--table2').width() + $('.pane--table2').scrollLeft());
});
</script>






<style type="text/css">
  

  * {
  box-sizing: border-box;
}
body {
  font: 14px/1 Arial, sans-serif;
}
table {
  border-collapse: collapse;
  background: white;
  table-layout: fixed;
  width: 100%;
}
th, td {
  padding: 8px 16px;
  border: 1px solid #ddd;
  width: 160px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.pane {
  background: #eee;
}
.pane-hScroll {
  overflow: auto;
  width: 400px;
  background: green;
}
.pane-vScroll {
  overflow-y: auto;
  overflow-x: hidden;
  height: 200px;
  background: red;
}

.pane--table2 {
  width: 400px;
  overflow-x: scroll;
}
.pane--table2 th, .pane--table2 td {
  width: auto;
  min-width: 160px;
}
.pane--table2 tbody {
  overflow-y: scroll;
  overflow-x: hidden;
  display: block;
  height: 200px;
}
.pane--table2 thead {
    display: table-row;
}
</style>
<form action="" method="POST">  

<input type="submit" name="email" value="email">
</form>

<?php   


if (isset($_POST['email'])) {
  # code...
  // the message
$to = ini_set('SMTP','dgainikaouthar91@gmail.com');
$subject = "My subject";
$txt = "Hello world!";
$headers = ini_set('sendmail_from', 'aissa.hasna123@gmail.com');


mail($to,$subject,$txt,$headers);
}
 ?>