<a href="?action=new_admin">Add new admin</a><br>
<?php
$items = $user->getUsersInfo();
foreach ($items as $oneItem) {
  echo $oneItem['name'];

  echo "<br>";
}
 ?>
 
