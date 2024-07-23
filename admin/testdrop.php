<form id="L" method="post">
   <select name="Language">
   <option >PHP</option>
    <option >Python</option>
    <option >Java</option>
    <option >C++</option>
  </select>
<input type="submit" name="Submit" value="Submit">
</form>

<?php
if(isset($_POST['Language'])) {
  echo "Selected Language: ".htmlspecialchars($_POST['Language']);
}
?>