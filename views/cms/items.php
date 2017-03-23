
<form class="" action="" method="post">
  <table>
  <tr>
  <?php
  $keys = $item->getLimited(1);
  $items = $item->getAll();

//show row names from databse
  foreach ($keys as $oneItem) { 
  
    foreach ($oneItem as $key => $value) { 
      if ($key == "id") {
      echo "<td></td><td></td>";
      }else{
      echo "<td>".$key."</td> ";
    }
  }
echo "</tr>";
}

echo "<tr>";
  foreach ($items as $oneItem) { 
  
    foreach ($oneItem as $key => $value) { 
      if ($key == "id") {
        echo "<td> <a href='?action=delete&class=".$item->getClassName($item)."&id=".$value."'>delete</td> ";
        echo "<td> <a href='?action=edit&class=".$item->getClassName($item)."&id=".$value."'>edit</td> ";
      }else{
      echo "<td>".$value."</td>";
    }
    
  }
  echo "</tr>";
}
?>
</table>
 </form>
</div>



