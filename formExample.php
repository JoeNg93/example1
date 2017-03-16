<h2>Form Examples</h2>
<form action="menu.php" class="" method="post">
  <select id="" name="country">
    <option value="1">Sweden</option>
    <option value="2">Finland</option>
    <option value="3">Norway</option>
  </select>
  <input type="submit" name="btnSend" value="Send">
</form>

<?php
  $chosen = $_POST['country'];
  echo 'You have chosen '.$chosen;
?>


